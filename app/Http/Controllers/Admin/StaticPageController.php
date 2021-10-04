<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\UpdateStaticPageRequest;
use App\StaticPage;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class StaticPageController extends Controller
{
    use MediaUploadingTrait;

    public function edit($page)
    {
        abort_if(Gate::denies('static_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $data = StaticPage::getAllFields($page);

        abort_if(!view()->exists('admin.staticPages.'.$page), Response::HTTP_NOT_FOUND);

        return view('admin.staticPages.'.$page, compact('page','data'));
    }

    public function update(UpdateStaticPageRequest $request, $page)
    {
        abort_if(!view()->exists('admin.staticPages.'.$page), Response::HTTP_NOT_FOUND);

        StaticPage::updateAllFields($page, $request);
        return redirect()->route('admin.static-pages.edit', $page);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('static_page_create') && Gate::denies('static_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new StaticPage();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media', 'public');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
