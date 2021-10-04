@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.casino.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.casinos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.id') }}
                        </th>
                        <td>
                            {{ $casino->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.seo_title') }}
                        </th>
                        <td>
                            {{ $casino->seo_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.seo_keyword') }}
                        </th>
                        <td>
                            {{ $casino->seo_keyword }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.seo_description') }}
                        </th>
                        <td>
                            {{ $casino->seo_description }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.name') }}
                        </th>
                        <td>
                            {{ $casino->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.link') }}
                        </th>
                        <td>
                            <a href="{{ $casino->link }}" target="_blank">{{ $casino->link }}</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.home_page_slider_title') }}
                        </th>
                        <td>
                            {{ $casino->home_page_slider_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.small_description') }}
                        </th>
                        <td>
                            {{ $casino->small_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.rating') }}
                        </th>
                        <td>
                            {{ $casino->rating }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.description') }}
                        </th>
                        <td>
                            {{ $casino->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.info') }}
                        </th>
                        <td>
                            {{ $casino->info }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.overview') }}
                        </th>
                        <td>
                            {!! $casino->overview !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.detail') }}
                        </th>
                        <td>
                            {!! $casino->detail !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.featured_image') }}
                        </th>
                        <td>
                            @if($casino->featured_image)
                                <a href="{{ $casino->featured_image->getUrl() }}" target="_blank">
                                    <img src="{{ $casino->featured_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.featured_image_alt_text') }}
                        </th>
                        <td>
                            {{ $casino->featured_image_alt_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.logo_image') }}
                        </th>
                        <td>
                            @if($casino->logo_image)
                                <a href="{{ $casino->logo_image->getUrl() }}" target="_blank">
                                    <img src="{{ $casino->logo_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.logo_image_alt_text') }}
                        </th>
                        <td>
                            {{ $casino->logo_image_alt_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.transparent_logo_image') }}
                        </th>
                        <td>
                            @if($casino->transparent_logo_image)
                                <a href="{{ $casino->transparent_logo_image->getUrl() }}" target="_blank">
                                    <img src="{{ $casino->transparent_logo_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.transparent_logo_image_alt_text') }}
                        </th>
                        <td>
                            {{ $casino->transparent_logo_image_alt_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.bg_image') }}
                        </th>
                        <td>
                            @if($casino->bg_image)
                                <a href="{{ $casino->bg_image->getUrl() }}" target="_blank">
                                    <img src="{{ $casino->bg_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.casino.fields.bg_image_alt_text') }}
                        </th>
                        <td>
                            {{ $casino->bg_image_alt_text }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.casinos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
