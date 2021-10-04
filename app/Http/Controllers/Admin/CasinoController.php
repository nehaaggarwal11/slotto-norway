<?php

namespace App\Http\Controllers\Admin;

use App\Casino;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCasinoRequest;
use App\Http\Requests\StoreCasinoRequest;
use App\Http\Requests\UpdateCasinoRequest;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class CasinoController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('casino_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $casinos = Casino::all();

        return view('admin.casinos.index', compact('casinos'));
    }

    public function create()
    {
        abort_if(Gate::denies('casino_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.casinos.create');
    }

    public function store(StoreCasinoRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $casino = Casino::create($data);

        if ($request->input('featured_image', false)) {
            $casino->addMedia(storage_path('tmp/uploads/' . $request->input('featured_image')))->toMediaCollection('featured_image');
        }

        if ($request->input('logo_image', false)) {
            $casino->addMedia(storage_path('tmp/uploads/' . $request->input('logo_image')))->toMediaCollection('logo_image');
        }

        if ($request->input('transparent_logo_image', false)) {
            $casino->addMedia(storage_path('tmp/uploads/' . $request->input('transparent_logo_image')))->toMediaCollection('transparent_logo_image');
        }

        if ($request->input('bg_image', false)) {
            $casino->addMedia(storage_path('tmp/uploads/' . $request->input('bg_image')))->toMediaCollection('bg_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $casino->id]);
        }

        return redirect()->route('admin.casinos.index');
    }

    public function edit(Casino $casino)
    {
        abort_if(Gate::denies('casino_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.casinos.edit', compact('casino'));
    }

    public function update(UpdateCasinoRequest $request, Casino $casino)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $casino->update($data);

        if ($request->input('featured_image', false)) {
            if (!$casino->featured_image || $request->input('featured_image') !== $casino->featured_image->file_name) {
                $casino->addMedia(storage_path('tmp/uploads/' . $request->input('featured_image')))->toMediaCollection('featured_image');
            }
        } elseif ($casino->featured_image) {
            $casino->featured_image->delete();
        }

        if ($request->input('logo_image', false)) {
            if (!$casino->logo_image || $request->input('logo_image') !== $casino->logo_image->file_name) {
                $casino->addMedia(storage_path('tmp/uploads/' . $request->input('logo_image')))->toMediaCollection('logo_image');
            }
        } elseif ($casino->logo_image) {
            $casino->logo_image->delete();
        }

        if ($request->input('transparent_logo_image', false)) {
            if (!$casino->transparent_logo_image || $request->input('transparent_logo_image') !== $casino->transparent_logo_image->file_name) {
                $casino->addMedia(storage_path('tmp/uploads/' . $request->input('transparent_logo_image')))->toMediaCollection('transparent_logo_image');
            }
        } elseif ($casino->transparent_logo_image) {
            $casino->transparent_logo_image->delete();
        }

        if ($request->input('bg_image', false)) {
            if (!$casino->bg_image || $request->input('bg_image') !== $casino->bg_image->file_name) {
                $casino->addMedia(storage_path('tmp/uploads/' . $request->input('bg_image')))->toMediaCollection('bg_image');
            }
        } elseif ($casino->bg_image) {
            $casino->bg_image->delete();
        }

        return redirect()->back();
        // return redirect()->route('admin.casinos.index');
    }

    public function show(Casino $casino)
    {
        abort_if(Gate::denies('casino_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.casinos.show', compact('casino'));
    }

    public function destroy(Casino $casino)
    {
        abort_if(Gate::denies('casino_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $casino->delete();

        return back();
    }

    public function massDestroy(MassDestroyCasinoRequest $request)
    {
        Casino::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('casino_create') && Gate::denies('casino_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Casino();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media', 'public');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
