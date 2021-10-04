@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.news.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.news.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.id') }}
                        </th>
                        <td>
                            {{ $news->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.category') }}
                        </th>
                        <td>
                            {{ $news->category }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.logo_img') }}
                        </th>
                        <td>
                            @if($news->logo_img)
                                <a href="{{ $news->logo_img->getUrl() }}" target="_blank">
                                    <img src="{{ $news->logo_img->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.logo_img_alt_text') }}
                        </th>
                        <td>
                            {{ $news->logo_img_alt_text }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.name') }}
                        </th>
                        <td>
                            {{ $news->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.small_description') }}
                        </th>
                        <td>
                            {{ $news->small_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.bg_image') }}
                        </th>
                        <td>
                            @if($news->bg_image)
                                <a href="{{ $news->bg_image->getUrl() }}" target="_blank">
                                    <img src="{{ $news->bg_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.bg_image_alt_text') }}
                        </th>
                        <td>
                            {{ $news->bg_image_alt_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.description') }}
                        </th>
                        <td>
                            {!! $news->description !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.news.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
