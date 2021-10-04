@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.contentTag.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.content-tags.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.contentTag.fields.id') }}
                        </th>
                        <td>
                            {{ $contentTag->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentTag.fields.name') }}
                        </th>
                        <td>
                            {{ $contentTag->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentTag.fields.slug') }}
                        </th>
                        <td>
                            {{ $contentTag->slug }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.content-tags.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection