<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\ContentCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContentCategoryRequest;
use App\Http\Requests\UpdateContentCategoryRequest;
use App\Http\Resources\Admin\ContentCategoryResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContentCategoryApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('content_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContentCategoryResource(ContentCategory::all());
    }

    public function store(StoreContentCategoryRequest $request)
    {
        $contentCategory = ContentCategory::create($request->all());

        return (new ContentCategoryResource($contentCategory))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ContentCategory $contentCategory)
    {
        abort_if(Gate::denies('content_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContentCategoryResource($contentCategory);
    }

    public function update(UpdateContentCategoryRequest $request, ContentCategory $contentCategory)
    {
        $contentCategory->update($request->all());

        return (new ContentCategoryResource($contentCategory))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ContentCategory $contentCategory)
    {
        abort_if(Gate::denies('content_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contentCategory->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
