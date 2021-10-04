<?php

namespace App\Http\Controllers\Admin;

use App\ContentCategory;
use App\ContentPage;
use App\ContentTag;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyContentPageRequest;
use App\Http\Requests\StoreContentPageRequest;
use App\Http\Requests\UpdateContentPageRequest;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ContentPageController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('content_page_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contentPages = ContentPage::all();

        return view('admin.contentPages.index', compact('contentPages'));
    }

    public function create()
    {
        abort_if(Gate::denies('content_page_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = ContentCategory::all()->pluck('name', 'id');

        $tags = ContentTag::all()->pluck('name', 'id');

        return view('admin.contentPages.create', compact('categories', 'tags'));
    }

    public function store(StoreContentPageRequest $request)
    {
        $contentPage = ContentPage::create($request->all());
        $contentPage->categories()->sync($request->input('categories', []));
        $contentPage->tags()->sync($request->input('tags', []));

        if ($request->input('featured_image', false)) {
            $contentPage->addMedia(storage_path('tmp/uploads/' . $request->input('featured_image')))->toMediaCollection('featured_image');
        }

        if ($request->input('logo_image', false)) {
            $contentPage->addMedia(storage_path('tmp/uploads/' . $request->input('logo_image')))->toMediaCollection('logo_image');
        }

        if ($request->input('bg_image', false)) {
            $contentPage->addMedia(storage_path('tmp/uploads/' . $request->input('bg_image')))->toMediaCollection('bg_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $contentPage->id]);
        }

        return redirect()->route('admin.content-pages.index');
    }

    public function edit(ContentPage $contentPage)
    {
        abort_if(Gate::denies('content_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = ContentCategory::all()->pluck('name', 'id');

        $tags = ContentTag::all()->pluck('name', 'id');

        $contentPage->load('categories', 'tags');

        return view('admin.contentPages.edit', compact('categories', 'tags', 'contentPage'));
    }

    public function update(UpdateContentPageRequest $request, ContentPage $contentPage)
    {
        $contentPage->update($request->all());
        $contentPage->categories()->sync($request->input('categories', []));
        $contentPage->tags()->sync($request->input('tags', []));

        if ($request->input('featured_image', false)) {
            if (!$contentPage->featured_image || $request->input('featured_image') !== $contentPage->featured_image->file_name) {
                $contentPage->addMedia(storage_path('tmp/uploads/' . $request->input('featured_image')))->toMediaCollection('featured_image');
            }
        } elseif ($contentPage->featured_image) {
            $contentPage->featured_image->delete();
        }

        return redirect()->route('admin.content-pages.index');
    }

    public function show(ContentPage $contentPage)
    {
        abort_if(Gate::denies('content_page_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contentPage->load('categories', 'tags');

        return view('admin.contentPages.show', compact('contentPage'));
    }

    public function destroy(ContentPage $contentPage)
    {
        abort_if(Gate::denies('content_page_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contentPage->delete();

        return back();
    }

    public function massDestroy(MassDestroyContentPageRequest $request)
    {
        ContentPage::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('content_page_create') && Gate::denies('content_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ContentPage();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media', 'public');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
