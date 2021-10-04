@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.sport.title_singular') }}
    </div>
</div>
<form method="POST" action="{{ route("admin.sports.update", [$sport->id]) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="card">
        <div class="card-header">SPORT</div>
        <div class="card-body">
            <div class="form-group">
                <label>{{ trans('cruds.sport.fields.slug') }}</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <a href="{{ $sport->route }}" class="btn btn-link btn-outline-light" target="_blank">View</a>
                        <span class="input-group-text">{{ $sport->route }}</span>
                    </div>
                </div>
                <span class="help-block">{{ trans('cruds.sport.fields.slug_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.sport.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $sport->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="link">{{ trans('cruds.sport.fields.link') }}</label>
                <input class="form-control {{ $errors->has('link') ? 'is-invalid' : '' }}" type="text" name="link" id="link" value="{{ old('link', $sport->link) }}">
                @if($errors->has('link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="small_description">{{ trans('cruds.sport.fields.small_description') }}</label>
                <input class="form-control {{ $errors->has('small_description') ? 'is-invalid' : '' }}" type="text" name="small_description" id="small_description" value="{{ old('small_description', $sport->small_description) }}">
                @if($errors->has('small_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('small_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.small_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rating">{{ trans('cruds.sport.fields.rating') }}</label>
                <input class="form-control {{ $errors->has('rating') ? 'is-invalid' : '' }}" type="number" name="rating" id="rating" value="{{ old('rating', $sport->rating) }}" min="0" max="5">
                @if($errors->has('rating'))
                    <div class="invalid-feedback">
                        {{ $errors->first('rating') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.rating_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.sport.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" cols="10" rows="5">{{ old('description', $sport->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="info">{{ trans('cruds.sport.fields.info') }}</label>
                <input class="form-control {{ $errors->has('info') ? 'is-invalid' : '' }}" type="text" name="info" id="info" value="{{ old('info', $sport->info) }}">
                @if($errors->has('info'))
                    <div class="invalid-feedback">
                        {{ $errors->first('info') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.info_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bonus">{{ trans('cruds.sport.fields.bonus') }}</label>
                <input class="form-control {{ $errors->has('bonus') ? 'is-invalid' : '' }}" type="number" name="bonus" id="bonus" value="{{ old('bonus', $sport->bonus) }}">
                @if($errors->has('bonus'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bonus') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.bonus_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bonus_text">{{ trans('cruds.sport.fields.bonus_text') }}</label>
                <input class="form-control {{ $errors->has('bonus_text') ? 'is-invalid' : '' }}" type="text" name="bonus_text" id="bonus_text" value="{{ old('bonus_text', $sport->bonus_text) }}">
                @if($errors->has('bonus_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bonus_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.bonus_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="wagering_requirements">{{ trans('cruds.sport.fields.wagering_requirements') }}</label>
                <input class="form-control {{ $errors->has('wagering_requirements') ? 'is-invalid' : '' }}" type="number" name="wagering_requirements" id="wagering_requirements" value="{{ old('wagering_requirements', $sport->wagering_requirements) }}">
                @if($errors->has('wagering_requirements'))
                    <div class="invalid-feedback">
                        {{ $errors->first('wagering_requirements') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.wagering_requirements_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="wagering_requirements_text">{{ trans('cruds.sport.fields.wagering_requirements_text') }}</label>
                <input class="form-control {{ $errors->has('wagering_requirements_text') ? 'is-invalid' : '' }}" type="text" name="wagering_requirements_text" id="wagering_requirements_text" value="{{ old('wagering_requirements_text', $sport->wagering_requirements_text) }}">
                @if($errors->has('wagering_requirements_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('wagering_requirements_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.wagering_requirements_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="banner_info">{{ trans('cruds.sport.fields.banner_info') }}</label>
                <input class="form-control {{ $errors->has('banner_info') ? 'is-invalid' : '' }}" type="text" name="banner_info" id="banner_info" value="{{ old('banner_info', $sport->banner_info) }}">
                @if($errors->has('banner_info'))
                    <div class="invalid-feedback">
                        {{ $errors->first('banner_info') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.banner_info_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="popular_casino_hover_info">{{ trans('cruds.sport.fields.popular_casino_hover_info') }}</label>
                <input class="form-control {{ $errors->has('popular_casino_hover_info') ? 'is-invalid' : '' }}" type="text" name="popular_casino_hover_info" id="popular_casino_hover_info" value="{{ old('popular_casino_hover_info', $sport->popular_casino_hover_info) }}">
                @if($errors->has('popular_casino_hover_info'))
                    <div class="invalid-feedback">
                        {{ $errors->first('popular_casino_hover_info') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.popular_casino_hover_info_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="overview">{{ trans('cruds.sport.fields.overview') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('overview') ? 'is-invalid' : '' }}" name="overview" id="overview">{!! old('overview', $sport->overview) !!}</textarea>
                @if($errors->has('overview'))
                    <div class="invalid-feedback">
                        {{ $errors->first('overview') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.overview_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="detail">{{ trans('cruds.sport.fields.detail') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('detail') ? 'is-invalid' : '' }}" name="detail" id="detail">{!! old('detail', $sport->detail) !!}</textarea>
                @if($errors->has('detail'))
                    <div class="invalid-feedback">
                        {{ $errors->first('detail') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.detail_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="featured_image">{{ trans('cruds.sport.fields.featured_image') }} (recommended size  150px*150px)</label>
                <div class="needsclick dropzone {{ $errors->has('featured_image') ? 'is-invalid' : '' }}" id="featured_image-dropzone">
                </div>
                @if($errors->has('featured_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('featured_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.featured_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="featured_image_alt_text">{{ trans('cruds.sport.fields.featured_image_alt_text') }}</label>
                <input class="form-control {{ $errors->has('featured_image_alt_text') ? 'is-invalid' : '' }}" type="text" name="featured_image_alt_text" id="featured_image_alt_text" value="{{ old('featured_image_alt_text', $sport->featured_image_alt_text) }}">
                @if($errors->has('featured_image_alt_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('featured_image_alt_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.featured_image_alt_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="logo_image">{{ trans('cruds.sport.fields.logo_image') }} (recommended size   max-width:200px & max-height:150px)</label>
                <div class="needsclick dropzone {{ $errors->has('logo_image') ? 'is-invalid' : '' }}" id="logo_image-dropzone">
                </div>
                @if($errors->has('logo_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.logo_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="logo_image_alt_text">{{ trans('cruds.sport.fields.logo_image_alt_text') }}</label>
                <input class="form-control {{ $errors->has('logo_image_alt_text') ? 'is-invalid' : '' }}" type="text" name="logo_image_alt_text" id="logo_image_alt_text" value="{{ old('logo_image_alt_text', $sport->logo_image_alt_text) }}">
                @if($errors->has('logo_image_alt_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo_image_alt_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.logo_image_alt_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bg_image">{{ trans('cruds.sport.fields.bg_image') }}(recommended size 870*260)</label>
                <div class="needsclick dropzone {{ $errors->has('bg_image') ? 'is-invalid' : '' }}" id="bg_image-dropzone">
                </div>
                @if($errors->has('bg_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bg_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.bg_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="transparent_logo_image">{{ trans('cruds.sport.fields.transparent_logo_image') }} (recommended size  max-width:300px & max-height:200px)</label>
                <div class="needsclick dropzone {{ $errors->has('transparent_logo_image') ? 'is-invalid' : '' }}" id="transparent_logo_image-dropzone">
                </div>
                @if($errors->has('transparent_logo_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('transparent_logo_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.transparent_logo_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="transparent_logo_image_alt_text">{{ trans('cruds.sport.fields.transparent_logo_image_alt_text') }} </label>
                <input class="form-control {{ $errors->has('transparent_logo_image_alt_text') ? 'is-invalid' : '' }}" type="text" name="transparent_logo_image_alt_text" id="transparent_logo_image_alt_text" value="{{ old('transparent_logo_image_alt_text', $sport->transparent_logo_image_alt_text) }}">
                @if($errors->has('transparent_logo_image_alt_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('transparent_logo_image_alt_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.transparent_logo_image_alt_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bg_image_alt_text">{{ trans('cruds.sport.fields.bg_image_alt_text') }}</label>
                <input class="form-control {{ $errors->has('bg_image_alt_text') ? 'is-invalid' : '' }}" type="text" name="bg_image_alt_text" id="bg_image_alt_text" value="{{ old('bg_image_alt_text', $sport->bg_image_alt_text) }}">
                @if($errors->has('bg_image_alt_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bg_image_alt_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sport.fields.bg_image_alt_text_helper') }}</span>
            </div>
        </div>
    </div>
    @php
        /**
          * @var $casino from controller
          */
        $seo_title = $sport->seo_title;
        $seo_keyword = $sport->seo_keyword;
        $seo_description = $sport->seo_description;
    @endphp
    @include('partials.seoFields', compact('errors', 'seo_title', 'seo_keyword', 'seo_description'))
    @include('partials.saveWideButton')
</form>



@endsection


@section('scripts')
    <script>
        $(document).ready(function () {
            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                    return {
                        upload: function() {
                            return loader.file
                                .then(function (file) {
                                    return new Promise(function(resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST', '/no/admin/sports/ckmedia', true);
                                        xhr.setRequestHeader('x-csrf-token', window._token);
                                        xhr.setRequestHeader('Accept', 'application/json');
                                        xhr.responseType = 'json';

                                        // Init listeners
                                        var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                                        xhr.addEventListener('error', function() { reject(genericErrorText) });
                                        xhr.addEventListener('abort', function() { reject() });
                                        xhr.addEventListener('load', function() {
                                            var response = xhr.response;

                                            if (!response || xhr.status !== 201) {
                                                return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                                            }

                                            $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                                            resolve({ default: response.url });
                                        });

                                        if (xhr.upload) {
                                            xhr.upload.addEventListener('progress', function(e) {
                                                if (e.lengthComputable) {
                                                    loader.uploadTotal = e.total;
                                                    loader.uploaded = e.loaded;
                                                }
                                            });
                                        }

                                        // Send request
                                        var data = new FormData();
                                        data.append('upload', file);
                                        data.append('crud_id', {{ $sport->id ?? 0 }});
                                        xhr.send(data);
                                    });
                                })
                        }
                    };
                }
            }

            var allEditors = document.querySelectorAll('.ckeditor');
            for (var i = 0; i < allEditors.length; ++i) {
                ClassicEditor.create(
                    allEditors[i], {
                        extraPlugins: [SimpleUploadAdapter]
                    }
                );
            }
        });
    </script>

    <script>
        Dropzone.options.featuredImageDropzone = {
            url: '{{ route('admin.sports.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2,
                width: 4086,
                height: 4096
            },
            success: function (file, response) {
                $('form').find('input[name="featured_image"]').remove()
                $('form').append('<input type="hidden" name="featured_image" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="featured_image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                    @if(isset($sport) && $sport->featured_image)
                var file = {!! json_encode($sport->featured_image) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $sport->featured_image->getUrl('thumb') }}')
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="featured_image" value="' + file.file_name + '">')
                this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function (file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
        Dropzone.options.logoImageDropzone = {
            url: '{{ route('admin.sports.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2,
                width: 4086,
                height: 4096
            },
            success: function (file, response) {
                $('form').find('input[name="logo_image"]').remove()
                $('form').append('<input type="hidden" name="logo_image" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="logo_image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                    @if(isset($sport) && $sport->logo_image)
                var file = {!! json_encode($sport->logo_image) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $sport->logo_image->getUrl('thumb') }}')
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="logo_image" value="' + file.file_name + '">')
                this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function (file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
        
        Dropzone.options.transparentLogoImageDropzone = {
            url: '{{ route('admin.sports.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2,
                width: 4086,
                height: 4096
            },
            success: function (file, response) {
                $('form').find('input[name="transparent_logo_image"]').remove()
                $('form').append('<input type="hidden" name="transparent_logo_image" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="transparent_logo_image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                    @if(isset($sport) && $sport->transparent_logo_image)
                var file = {!! json_encode($sport->transparent_logo_image) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $sport->transparent_logo_image->getUrl('thumb') }}')
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="transparent_logo_image" value="' + file.file_name + '">')
                this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function (file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
        
        Dropzone.options.bgImageDropzone = {
            url: '{{ route('admin.sports.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2,
                width: 4086,
                height: 4096
            },
            success: function (file, response) {
                $('form').find('input[name="bg_image"]').remove()
                $('form').append('<input type="hidden" name="bg_image" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="bg_image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                    @if(isset($sport) && $sport->bg_image)
                var file = {!! json_encode($sport->bg_image) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $sport->bg_image->getUrl('thumb') }}')
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="bg_image" value="' + file.file_name + '">')
                this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function (file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
@endsection
