@extends('layouts.admin')
@section('content')
@php
    $all_casinos = \App\Casino::all();
@endphp

<div class="card">
    <div class="card-header">
        {{ trans('cruds.staticPage.setting.title') }}
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route("admin.static-pages.update", $page) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="required" for="popular_casinos_box_title">{{ trans('cruds.staticPage.setting.fields.popular_casinos_box_title') }}</label>
                <input class="form-control {{ $errors->has('popular_casinos_box_title') ? 'is-invalid' : '' }}" type="text" name="popular_casinos_box_title" id="popular_casinos_box_title" value="{{ old('popular_casinos_box_title', @$data->popular_casinos_box_title) }}" required>
                @if($errors->has('popular_casinos_box_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('popular_casinos_box_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.setting.fields.popular_casinos_box_title_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="popular_casinos">{{ trans('cruds.staticPage.setting.fields.popular_casinos') }}</label>
                @php $popular_casinos = old('popular_casinos', @$data->popular_casinos ?? []); @endphp
                <select class="form-control custom_order select2_popular_casinos {{ $errors->has('popular_casinos') ? 'is-invalid' : '' }}" name="popular_casinos[]" id="popular_casinos" data-selected="{{ implode(",", $popular_casinos) }}" multiple required>
                    @foreach($popular_casinos as $casino_id)
                        @php
                            /**
                            * @var $casino_id from loop
                            */
                            $casino = \App\Casino::find($casino_id)
                        @endphp
                        @if($casino)
                            <option value="{{ $casino->id }}">{{ $casino->name }}</option>
                        @endif
                    @endforeach
                    @foreach($all_casinos as $casino)
                        @if(!in_array($casino->id, $popular_casinos))
                            <option value="{{ $casino->id }}">{{ $casino->name }}</option>
                        @endif
                    @endforeach
                </select>
                @if($errors->has('popular_casinos'))
                    <div class="invalid-feedback">
                        {{ $errors->first('popular_casinos') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.setting.fields.popular_casinos_helper') }}</span>
            </div>
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.staticPage.setting.fields.welcome_email_title') }}
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="required" for="welcome_email_subject">{{ trans('cruds.staticPage.setting.fields.welcome_email_subject') }}</label>
                        <input class="form-control {{ $errors->has('welcome_email_subject') ? 'is-invalid' : '' }}" type="text" name="welcome_email_subject" id="welcome_email_subject" value="{{ old('welcome_email_subject', @$data->welcome_email_subject) }}" required>
                        @if($errors->has('welcome_email_subject'))
                            <div class="invalid-feedback">
                                {{ $errors->first('welcome_email_subject') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.staticPage.setting.fields.welcome_email_subject_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label class="required" for="welcome_email_content">{{ trans('cruds.staticPage.setting.fields.welcome_email_content') }}</label>
                        <textarea class="form-control {{ $errors->has('welcome_email_content') ? 'is-invalid' : '' }}" type="text" name="welcome_email_content" id="welcome_email_content">{{ old('welcome_email_content', @$data->welcome_email_content) }}</textarea>
                        @if($errors->has('welcome_email_content'))
                            <div class="invalid-feedback">
                                {{ $errors->first('welcome_email_content') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.staticPage.setting.fields.welcome_email_content_helper') }}</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.staticPage.setting.fields.confirm_email_title') }}
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="required" for="confirm_email_subject">{{ trans('cruds.staticPage.setting.fields.confirm_email_subject') }}</label>
                        <input class="form-control {{ $errors->has('confirm_email_subject') ? 'is-invalid' : '' }}" type="text" name="confirm_email_subject" id="confirm_email_subject" value="{{ old('confirm_email_subject', @$data->confirm_email_subject) }}" required>
                        @if($errors->has('confirm_email_subject'))
                            <div class="invalid-feedback">
                                {{ $errors->first('confirm_email_subject') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.staticPage.setting.fields.confirm_email_subject_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label class="required" for="confirm_email_content">{{ trans('cruds.staticPage.setting.fields.confirm_email_content') }}</label>
                        <textarea class="form-control {{ $errors->has('confirm_email_content') ? 'is-invalid' : '' }}" type="text" name="confirm_email_content" id="confirm_email_content">{{ old('confirm_email_content', @$data->confirm_email_content) }}</textarea>
                        @if($errors->has('confirm_email_content'))
                            <div class="invalid-feedback">
                                {{ $errors->first('confirm_email_content') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.staticPage.setting.fields.confirm_email_content_helper') }}</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('select.select2_popular_casinos').select2_sortable({
                maximumSelectionLength: 5
            });
        });
    </script>
@endsection
