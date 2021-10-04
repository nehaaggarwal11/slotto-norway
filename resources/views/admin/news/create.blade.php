@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.news.title_singular') }}
    </div>
</div>

<form method="POST" action="{{ route("admin.news.store") }}" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">News</div>
        <div class="card-body">
            <div class="form-group">
                <label for="category">{{ trans('cruds.news.fields.category') }}</label>
                <input class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" type="text" name="category" id="category" value="{{ old('category', '') }}">
                @if($errors->has('category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.news.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="logo_img">{{ trans('cruds.news.fields.logo_img') }} (recommended size 370px * 300px)</label>
                <div class="needsclick dropzone {{ $errors->has('logo_img') ? 'is-invalid' : '' }}" id="logo_img-dropzone">
                </div>
                @if($errors->has('logo_img'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo_img') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.news.fields.logo_img_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="logo_img_alt_text">{{ trans('cruds.news.fields.logo_img_alt_text') }}</label>
                <input class="form-control {{ $errors->has('logo_img_alt_text') ? 'is-invalid' : '' }}" type="text" name="logo_img_alt_text" id="logo_img_alt_text" value="{{ old('logo_img_alt_text', '') }}">
                @if($errors->has('logo_img_alt_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo_img_alt_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.news.fields.logo_img_alt_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.news.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.news.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="small_description">{{ trans('cruds.news.fields.small_description') }}</label>
                <input class="form-control {{ $errors->has('small_description') ? 'is-invalid' : '' }}" type="text" name="small_description" id="small_description" value="{{ old('small_description', '') }}">
                @if($errors->has('small_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('small_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.news.fields.small_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bg_image">{{ trans('cruds.news.fields.bg_image') }} (recommended size height=258px)</label>
                <div class="needsclick dropzone {{ $errors->has('bg_image') ? 'is-invalid' : '' }}" id="bg_image-dropzone">
                </div>
                @if($errors->has('bg_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bg_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.news.fields.bg_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bg_image_alt_text">{{ trans('cruds.news.fields.bg_image_alt_text') }}</label>
                <input class="form-control {{ $errors->has('bg_image_alt_text') ? 'is-invalid' : '' }}" type="text" name="bg_image_alt_text" id="bg_image_alt_text" value="{{ old('bg_image_alt_text', '') }}">
                @if($errors->has('bg_image_alt_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bg_image_alt_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.news.fields.bg_image_alt_text_helper') }}</span>
            </div>
            
            <div class="form-group">
                <label for="description">{{ trans('cruds.news.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description', '') !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.news.fields.description_helper') }}</span>
            </div>
        </div>
    </div>
    @php($seo_title = $seo_keyword = $seo_description = '')
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
                                        xhr.open('POST', '/no/admin/news/ckmedia', true);
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
                                        data.append('crud_id', {{ $news->id ?? 0 }});
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
        Dropzone.options.logoImgDropzone = {
            url: '{{ route('admin.news.storeMedia') }}',
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
                $('form').find('input[name="logo_img"]').remove()
                $('form').append('<input type="hidden" name="logo_img" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="logo_img"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                    @if(isset($news) && $news->logo_img)
                var file = {!! json_encode($news->logo_img) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $news->logo_img->getUrl('thumb') }}')
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="logo_img" value="' + file.file_name + '">')
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
            url: '{{ route('admin.news.storeMedia') }}',
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
                    @if(isset($news) && $news->bg_image)
                var file = {!! json_encode($news->bg_image) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $news->bg_image->getUrl('thumb') }}')
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
