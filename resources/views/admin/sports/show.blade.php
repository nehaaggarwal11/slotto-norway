@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.sport.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sports.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.id') }}
                        </th>
                        <td>
                            {{ $sport->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.seo_title') }}
                        </th>
                        <td>
                            {{ $sport->seo_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.seo_keyword') }}
                        </th>
                        <td>
                            {{ $sport->seo_keyword }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.seo_description') }}
                        </th>
                        <td>
                            {{ $sport->seo_description }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.name') }}
                        </th>
                        <td>
                            {{ $sport->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.link') }}
                        </th>
                        <td>
                            <a href="{{ $sport->link }}" target="_blank">{{ $sport->link }}</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.rating') }}
                        </th>
                        <td>
                            {{ $sport->rating }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.small_description') }}
                        </th>
                        <td>
                            {{ $sport->small_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.description') }}
                        </th>
                        <td>
                            {{ $sport->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.info') }}
                        </th>
                        <td>
                            {{ $sport->info }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.overview') }}
                        </th>
                        <td>
                            {!! $sport->overview !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.detail') }}
                        </th>
                        <td>
                            {!! $sport->detail !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.featured_image') }}
                        </th>
                        <td>
                            @if($sport->featured_image)
                                <a href="{{ $sport->featured_image->getUrl() }}" target="_blank">
                                    <img src="{{ $sport->featured_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.featured_image_alt_text') }}
                        </th>
                        <td>
                            {{ $sport->featured_image_alt_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.logo_image') }}
                        </th>
                        <td>
                            @if($sport->logo_image)
                                <a href="{{ $sport->logo_image->getUrl() }}" target="_blank">
                                    <img src="{{ $sport->logo_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.logo_image_alt_text') }}
                        </th>
                        <td>
                            {{ $sport->logo_image_alt_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.transparent_logo_image') }}
                        </th>
                        <td>
                            @if($sport->transparent_logo_image)
                                <a href="{{ $sport->transparent_logo_image->getUrl() }}" target="_blank">
                                    <img src="{{ $sport->transparent_logo_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.transparent_logo_image_alt_text') }}
                        </th>
                        <td>
                            {{ $sport->transparent_logo_image_alt_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.bg_image') }}
                        </th>
                        <td>
                            @if($sport->bg_image)
                                <a href="{{ $sport->bg_image->getUrl() }}" target="_blank">
                                    <img src="{{ $sport->bg_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sport.fields.bg_image_alt_text') }}
                        </th>
                        <td>
                            {{ $sport->bg_image_alt_text }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sports.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
