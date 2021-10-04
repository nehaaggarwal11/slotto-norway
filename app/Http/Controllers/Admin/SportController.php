<?php

namespace App\Http\Controllers\Admin;

use App\Sport;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCasinoRequest;
use App\Http\Requests\StoreSportRequest;
use App\Http\Requests\UpdateSportRequest;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class SportController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('sports_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sports = Sport::all();

        return view('admin.sports.index', compact('sports'));
    }

    public function create()
    {
        abort_if(Gate::denies('sports_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sports.create');
    }
    
    public function store(StoreSportRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $sport = Sport::create($data);

        if ($request->input('featured_image', false)) {
            $sport->addMedia(storage_path('tmp/uploads/' . $request->input('featured_image')))->toMediaCollection('featured_image');
        }

        if ($request->input('logo_image', false)) {
            $sport->addMedia(storage_path('tmp/uploads/' . $request->input('logo_image')))->toMediaCollection('logo_image');
        }
        
        if ($request->input('transparent_logo_image', false)) {
            $sport->addMedia(storage_path('tmp/uploads/' . $request->input('transparent_logo_image')))->toMediaCollection('transparent_logo_image');
        }

        if ($request->input('bg_image', false)) {
            $sport->addMedia(storage_path('tmp/uploads/' . $request->input('bg_image')))->toMediaCollection('bg_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $sport->id]);
        }

        return redirect()->route('admin.sports.index');
    }
    
    public function edit(Sport $sport)
    {
        abort_if(Gate::denies('sport_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sports.edit', compact('sport'));
    }
    
    public function update(UpdateSportRequest $request, Sport $sport)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $sport->update($data);

        if ($request->input('featured_image', false)) {
            if (!$sport->featured_image || $request->input('featured_image') !== $sport->featured_image->file_name) {
                $sport->addMedia(storage_path('tmp/uploads/' . $request->input('featured_image')))->toMediaCollection('featured_image');
            }
        } elseif ($sport->featured_image) {
            $sport->featured_image->delete();
        }

        if ($request->input('logo_image', false)) {
            if (!$sport->logo_image || $request->input('logo_image') !== $sport->logo_image->file_name) {
                $sport->addMedia(storage_path('tmp/uploads/' . $request->input('logo_image')))->toMediaCollection('logo_image');
            }
        } elseif ($sport->logo_image) {
            $sport->logo_image->delete();
        }
        
        if ($request->input('transparent_logo_image', false)) {
            if (!$sport->transparent_logo_image || $request->input('transparent_logo_image') !== $sport->transparent_logo_image->file_name) {
                $sport->addMedia(storage_path('tmp/uploads/' . $request->input('transparent_logo_image')))->toMediaCollection('transparent_logo_image');
            }
        } elseif ($sport->transparent_logo_image) {
            $sport->transparent_logo_image->delete();
        }

        if ($request->input('bg_image', false)) {
            if (!$sport->bg_image || $request->input('bg_image') !== $sport->bg_image->file_name) {
                $sport->addMedia(storage_path('tmp/uploads/' . $request->input('bg_image')))->toMediaCollection('bg_image');
            }
        } elseif ($sport->bg_image) {
            $sport->bg_image->delete();
        }

        return redirect()->back();
        // return redirect()->route('admin.casinos.index');
    }
    
    public function show(Sport $sport)
    {
        abort_if(Gate::denies('sport_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sports.show', compact('sport'));
    }
    
    public function destroy(Sport $sport)
    {
        abort_if(Gate::denies('sport_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sport->delete();

        return back();
    }

    public function massDestroy(MassDestroySportRequest $request)
    {
        Sport::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('sports_create') && Gate::denies('sport_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Sport();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media', 'public');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }

}
