@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.contentPage.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.content-pages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.contentPage.fields.id') }}
                        </th>
                        <td>
                            {{ $contentPage->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentPage.fields.title') }}
                        </th>
                        <td>
                            {{ $contentPage->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentPage.fields.category') }}
                        </th>
                        <td>
                            @foreach($contentPage->categories as $key => $category)
                                <span class="label label-info">{{ $category->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentPage.fields.tag') }}
                        </th>
                        <td>
                            @foreach($contentPage->tags as $key => $tag)
                                <span class="label label-info">{{ $tag->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentPage.fields.page_text') }}
                        </th>
                        <td>
                            {!! $contentPage->page_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentPage.fields.excerpt') }}
                        </th>
                        <td>
                            {{ $contentPage->excerpt }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentPage.fields.featured_image') }}
                        </th>
                        <td>
                            @if($contentPage->featured_image)
                                <a href="{{ $contentPage->featured_image->getUrl() }}" target="_blank">
                                    <img src="{{ $contentPage->featured_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.content-pages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection