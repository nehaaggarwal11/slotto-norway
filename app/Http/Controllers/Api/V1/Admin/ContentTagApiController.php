<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\ContentTag;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContentTagRequest;
use App\Http\Requests\UpdateContentTagRequest;
use App\Http\Resources\Admin\ContentTagResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContentTagApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('content_tag_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContentTagResource(ContentTag::all());
    }

    public function store(StoreContentTagRequest $request)
    {
        $contentTag = ContentTag::create($request->all());

        return (new ContentTagResource($contentTag))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ContentTag $contentTag)
    {
        abort_if(Gate::denies('content_tag_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContentTagResource($contentTag);
    }

    public function update(UpdateContentTagRequest $request, ContentTag $contentTag)
    {
        $contentTag->update($request->all());

        return (new ContentTagResource($contentTag))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ContentTag $contentTag)
    {
        abort_if(Gate::denies('content_tag_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contentTag->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
