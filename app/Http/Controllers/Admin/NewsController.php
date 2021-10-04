<?php

namespace App\Http\Controllers\Admin;

use App\News;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyGameRequest;
use App\Http\Requests\MassDestroyNewsRequest;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateGameRequest;
use Illuminate\Http\Request;
use Gate;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('news_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $news = News::all();

        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        abort_if(Gate::denies('news_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.news.create');
    }

    public function store(StoreNewsRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $news = News::create($data);

        if ($request->input('logo_img', false)) {
            $news->addMedia(storage_path('tmp/uploads/' . $request->input('logo_img')))->toMediaCollection('logo_img');
        }

        if ($request->input('bg_image', false)) {
            $news->addMedia(storage_path('tmp/uploads/' . $request->input('bg_image')))->toMediaCollection('bg_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $news->id]);
        }

        return redirect()->route('admin.news.index');
        
    }

    public function show(News $news)
    {
        abort_if(Gate::denies('news_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.news.show', compact('news'));
    }

    public function edit(News $news)
    {
        abort_if(Gate::denies('news_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.news.edit', compact('news'));
    }

    public function update(UpdateGameRequest $request, News $news)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $news->update($data);

        if ($request->input('logo_img', false)) {
            if (!$news->logo_img || $request->input('logo_img') !== $news->logo_img->file_name) {
                $news->addMedia(storage_path('tmp/uploads/' . $request->input('logo_img')))->toMediaCollection('logo_img');
            }
        } elseif ($news->logo_img) {
            $news->logo_img->delete();
        }

        if ($request->input('bg_image', false)) {
            if (!$news->bg_image || $request->input('bg_image') !== $news->bg_image->file_name) {
                $news->addMedia(storage_path('tmp/uploads/' . $request->input('bg_image')))->toMediaCollection('bg_image');
            }
        } elseif ($news->bg_image) {
            $news->bg_image->delete();
        }
        

        return redirect()->back();
    }

    public function destroy(News $news)
    {
        abort_if(Gate::denies('news_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $news->delete();

        return back();
    }

    public function massDestroy(MassDestroyNewsRequest $request)
    {
        News::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }


    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('news_create') && Gate::denies('news_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new News();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media', 'public');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
