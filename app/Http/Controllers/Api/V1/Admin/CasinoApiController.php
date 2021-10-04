<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Casino;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreCasinoRequest;
use App\Http\Requests\UpdateCasinoRequest;
use App\Http\Resources\Admin\CasinoResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CasinoApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('casino_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CasinoResource(Casino::all());
    }

    public function store(StoreCasinoRequest $request)
    {
        $casino = Casino::create($request->all());

        if ($request->input('featured_image', false)) {
            $casino->addMedia(storage_path('tmp/uploads/' . $request->input('featured_image')))->toMediaCollection('featured_image');
        }

        if ($request->input('logo_image', false)) {
            $casino->addMedia(storage_path('tmp/uploads/' . $request->input('logo_image')))->toMediaCollection('logo_image');
        }

        if ($request->input('bg_image', false)) {
            $casino->addMedia(storage_path('tmp/uploads/' . $request->input('bg_image')))->toMediaCollection('bg_image');
        }

        return (new CasinoResource($casino))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Casino $casino)
    {
        abort_if(Gate::denies('casino_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CasinoResource($casino);
    }

    public function update(UpdateCasinoRequest $request, Casino $casino)
    {
        $casino->update($request->all());

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

        if ($request->input('bg_image', false)) {
            if (!$casino->bg_image || $request->input('bg_image') !== $casino->bg_image->file_name) {
                $casino->addMedia(storage_path('tmp/uploads/' . $request->input('bg_image')))->toMediaCollection('bg_image');
            }
        } elseif ($casino->bg_image) {
            $casino->bg_image->delete();
        }

        return (new CasinoResource($casino))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Casino $casino)
    {
        abort_if(Gate::denies('casino_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $casino->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
