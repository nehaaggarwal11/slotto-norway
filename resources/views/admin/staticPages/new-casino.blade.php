@extends('layouts.admin')

@section('content')
    @php
        $all_casinos = \App\Casino::all();
    @endphp

    <div class="card">
        <div class="card-header">
            {{ trans('cruds.staticPage.title') }} / {{ trans('cruds.staticPage.new-casino.title') }}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route("admin.static-pages.update", $page) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="required" for="casinos">{{ trans('cruds.staticPage.home.fields.casinos') }}</label>
                    @php $casinos = old('casinos', @$data->casinos ?? []); @endphp
                    <select class="form-control custom_order select2_casinos {{ $errors->has('casinos') ? 'is-invalid' : '' }}" name="casinos[]" id="casinos" data-selected="{{ implode(",", $casinos) }}" multiple required>
                        @foreach($casinos as $casino_id)
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
                            @if($casino && !in_array($casino->id, $casinos))
                                <option value="{{ $casino->id }}">{{ $casino->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @if($errors->has('casinos'))
                        <div class="invalid-feedback">
                            {{ $errors->first('casinos') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.staticPage.home.fields.casinos_helper') }}</span>
                </div>



                <div class="card">
                    <div class="card-header">Top 3 Casinos</div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">First</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="top3_first_image">{{ trans('cruds.staticPage.new-casino.fields.image') }}</label>
                                    <div class="needsclick dropzone {{ $errors->has('top3_first_image') ? 'is-invalid' : '' }}" id="top3_first_image-dropzone">
                                    </div>
                                    @if($errors->has('top3_first_image'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('top3_first_image') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.image_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="top3_first_image_alt_text">{{ trans('cruds.staticPage.new-casino.fields.image_alt_text') }}</label>
                                    <input class="form-control {{ $errors->has('top3_first_image_alt_text') ? 'is-invalid' : '' }}" type="text" name="top3_first_image_alt_text" id="top3_first_image_alt_text" value="{{ old('top3_first_image_alt_text', @$data->top3_first_image_alt_text) }}">
                                    @if($errors->has('top3_first_image_alt_text'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('top3_first_image_alt_text') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.image_alt_text_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required" for="top3_first_content">{{ trans('cruds.staticPage.new-casino.fields.content') }}</label>
                                    <textarea class="form-control {{ $errors->has('top3_first_content') ? 'is-invalid' : '' }}" name="top3_first_content" id="top3_first_content" required>{{ old('top3_first_content', @$data->top3_first_content) }}</textarea>
                                    @if($errors->has('top3_first_content'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('top3_first_content') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.content_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required" for="top3_first_link">{{ trans('cruds.staticPage.new-casino.fields.link') }}</label>
                                    <input class="form-control {{ $errors->has('top3_first_link') ? 'is-invalid' : '' }}" type="text" name="top3_first_link" id="top3_first_link" value="{{ old('top3_first_link', @$data->top3_first_link) }}" required>
                                    @if($errors->has('top3_first_link'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('top3_first_link') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.link_helper') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">Second</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="top3_second_image">{{ trans('cruds.staticPage.new-casino.fields.image') }}</label>
                                    <div class="needsclick dropzone {{ $errors->has('top3_second_image') ? 'is-invalid' : '' }}" id="top3_second_image-dropzone">
                                    </div>
                                    @if($errors->has('top3_second_image'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('top3_second_image') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.image_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="top3_second_image_alt_text">{{ trans('cruds.staticPage.new-casino.fields.image_alt_text') }}</label>
                                    <input class="form-control {{ $errors->has('top3_second_image_alt_text') ? 'is-invalid' : '' }}" type="text" name="top3_second_image_alt_text" id="top3_second_image_alt_text" value="{{ old('top3_second_image_alt_text', @$data->top3_second_image_alt_text) }}">
                                    @if($errors->has('top3_second_image_alt_text'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('top3_second_image_alt_text') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.image_alt_text_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required" for="top3_second_content">{{ trans('cruds.staticPage.new-casino.fields.content') }}</label>
                                    <textarea class="form-control {{ $errors->has('top3_second_content') ? 'is-invalid' : '' }}" name="top3_second_content" id="top3_second_content" required>{{ old('top3_second_content', @$data->top3_second_content) }}</textarea>
                                    @if($errors->has('top3_second_content'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('top3_second_content') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.content_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required" for="top3_second_link">{{ trans('cruds.staticPage.new-casino.fields.link') }}</label>
                                    <input class="form-control {{ $errors->has('top3_second_link') ? 'is-invalid' : '' }}" type="text" name="top3_second_link" id="top3_second_link" value="{{ old('top3_second_link', @$data->top3_second_link) }}" required>
                                    @if($errors->has('top3_second_link'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('top3_second_link') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.link_helper') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">Third</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="top3_third_image">{{ trans('cruds.staticPage.new-casino.fields.image') }}</label>
                                    <div class="needsclick dropzone {{ $errors->has('top3_third_image') ? 'is-invalid' : '' }}" id="top3_third_image-dropzone">
                                    </div>
                                    @if($errors->has('top3_third_image'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('top3_third_image') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.image_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="top3_third_image_alt_text">{{ trans('cruds.staticPage.new-casino.fields.image_alt_text') }}</label>
                                    <input class="form-control {{ $errors->has('top3_third_image_alt_text') ? 'is-invalid' : '' }}" type="text" name="top3_third_image_alt_text" id="top3_third_image_alt_text" value="{{ old('top3_third_image_alt_text', @$data->top3_third_image_alt_text) }}">
                                    @if($errors->has('top3_third_image_alt_text'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('top3_third_image_alt_text') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.image_alt_text_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required" for="top3_third_content">{{ trans('cruds.staticPage.new-casino.fields.content') }}</label>
                                    <textarea class="form-control {{ $errors->has('top3_third_content') ? 'is-invalid' : '' }}" name="top3_third_content" id="top3_third_content" required>{{ old('top3_third_content', @$data->top3_third_content) }}</textarea>
                                    @if($errors->has('top3_third_content'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('top3_third_content') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.content_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required" for="top3_third_link">{{ trans('cruds.staticPage.new-casino.fields.link') }}</label>
                                    <input class="form-control {{ $errors->has('top3_third_link') ? 'is-invalid' : '' }}" type="text" name="top3_third_link" id="top3_third_link" value="{{ old('top3_third_link', @$data->top3_third_link) }}" required>
                                    @if($errors->has('top3_third_link'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('top3_third_link') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.link_helper') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="heading">{{ trans('cruds.staticPage.new-casino.fields.heading') }}</label>
                    <input class="form-control {{ $errors->has('heading') ? 'is-invalid' : '' }}" type="text" name="heading" id="heading" value="{{ old('heading', @$data->heading) }}">
                    @if($errors->has('heading'))
                        <div class="invalid-feedback">
                            {{ $errors->first('heading') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.heading_helper') }}</span>
                </div>

                <div class="form-group">
                    <label for="sub_heading">{{ trans('cruds.staticPage.new-casino.fields.sub_heading') }}</label>
                    <input class="form-control {{ $errors->has('sub_heading') ? 'is-invalid' : '' }}" type="text" name="sub_heading" id="sub_heading" value="{{ old('sub_heading', @$data->sub_heading) }}">
                    @if($errors->has('sub_heading'))
                        <div class="invalid-feedback">
                            {{ $errors->first('sub_heading') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.sub_heading_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="new_casino_text_less">{{ trans('cruds.staticPage.new-casino.fields.section_text_less') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('new_casino_text_less') ? 'is-invalid' : '' }}" name="new_casino_text_less" id="new_casino_text_less">{!! old('new_casino_text_less', @$data->new_casino_text_less) !!}</textarea>
                    @if($errors->has('new_casino_text_less'))
                        <div class="invalid-feedback">
                            {{ $errors->first('new_casino_text_less') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.section_text_less_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="new_casino_text_more">{{ trans('cruds.staticPage.new-casino.fields.section_text_more') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('new_casino_text_more') ? 'is-invalid' : '' }}" name="new_casino_text_more" id="new_casino_text_more">{!! old('new_casino_text_more', @$data->new_casino_text_more) !!}</textarea>
                    @if($errors->has('new_casino_text_more'))
                        <div class="invalid-feedback">
                            {{ $errors->first('new_casino_text_more') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.section_text_more_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="new_online_casino_text">{{ trans('cruds.staticPage.new-casino.fields.section_text') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('new_online_casino_text') ? 'is-invalid' : '' }}" name="new_online_casino_text" id="new_online_casino_text">{!! old('new_online_casino_text', @$data->new_online_casino_text) !!}</textarea>
                    @if($errors->has('new_online_casino_text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('new_online_casino_text') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.staticPage.new-casino.fields.section_text_helper') }}</span>
                </div>
                @php
                    /**
                     * @var $casino from controller
                    */
                    $seo_title = @$data->seo_title;
                    $seo_keyword = @$data->seo_keyword;
                    $seo_description = @$data->seo_description;
                    @endphp
                    @include('partials.seoFields', compact('errors', 'seo_title', 'seo_keyword', 'seo_description'))
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
            $('select.select2_casinos').select2_sortable({
                maximumSelectionLength: 40
            });

            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                    return {
                        upload: function() {
                            return loader.file
                                .then(function (file) {
                                    return new Promise(function(resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST', '/no/admin/casinos/ckmedia', true);
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
                                        data.append('crud_id', {{ @$casino->id ?? 0 }});
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

        Dropzone.options.top3FirstImageDropzone = {
            url: '{{ route('admin.static-pages.storeMedia') }}',
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
                $('form').find('input[name="images[top3_first_image]"]').remove()
                $('form').append('<input type="hidden" name="images[top3_first_image]" value="' + response.name + '">')

                $('form').find('input[name="top3_first_image"]').remove()
                $('form').append('<input type="hidden" name="top3_first_image" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="images[top3_first_image]"]').val('')
                    $('form').find('input[name="top3_first_image"]').val('')
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                    @php
                        /**
                         * @var $page from controller
                        */
                        $image = \App\StaticPage::getMediaField($page, 'top3_first_image');
                    @endphp
                    @if(isset($data) && $image)
                var file = {!! json_encode($image) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $image->getUrl('thumb') }}')
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="images[top3_first_image]" value="' + file.file_name + '">')
                $('form').append('<input type="hidden" name="top3_first_image" value="' + file.file_name + '">')
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
        Dropzone.options.top3SecondImageDropzone = {
            url: '{{ route('admin.static-pages.storeMedia') }}',
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
                $('form').find('input[name="images[top3_second_image]"]').remove()
                $('form').append('<input type="hidden" name="images[top3_second_image]" value="' + response.name + '">')

                $('form').find('input[name="top3_second_image"]').remove()
                $('form').append('<input type="hidden" name="top3_second_image" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="images[top3_second_image]"]').val('')
                    $('form').find('input[name="top3_second_image"]').val('')
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                    @php
                        /**
                         * @var $page from controller
                        */
                        $image = \App\StaticPage::getMediaField($page, 'top3_second_image');
                    @endphp
                    @if(isset($data) && $image)
                var file = {!! json_encode($image) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $image->getUrl('thumb') }}')
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="images[top3_second_image]" value="' + file.file_name + '">')
                $('form').append('<input type="hidden" name="top3_second_image" value="' + file.file_name + '">')
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
        Dropzone.options.top3ThirdImageDropzone = {
            url: '{{ route('admin.static-pages.storeMedia') }}',
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
                $('form').find('input[name="images[top3_third_image]"]').remove()
                $('form').append('<input type="hidden" name="images[top3_third_image]" value="' + response.name + '">')

                $('form').find('input[name="top3_third_image"]').remove()
                $('form').append('<input type="hidden" name="top3_third_image" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="images[top3_third_image]"]').val('')
                    $('form').find('input[name="top3_third_image"]').val('')
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                    @php
                        /**
                         * @var $page from controller
                        */
                        $image = \App\StaticPage::getMediaField($page, 'top3_third_image');
                    @endphp
                    @if(isset($data) && $image)
                var file = {!! json_encode($image) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $image->getUrl('thumb') }}')
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="images[top3_third_image]" value="' + file.file_name + '">')
                $('form').append('<input type="hidden" name="top3_third_image" value="' + file.file_name + '">')
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



