@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.game.title_singular') }}
    </div>
</div>

<form method="POST" action="{{ route("admin.games.store") }}" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">Game</div>
        <div class="card-body">
            <div class="form-group">
                <label for="logo">{{ trans('cruds.game.fields.logo') }} (upload in 1:1 ratio, recommended size  120*120)</label>
                <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                </div>
                @if($errors->has('logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="logo_alt_text">{{ trans('cruds.game.fields.logo_alt_text') }}</label>
                <input class="form-control {{ $errors->has('logo_alt_text') ? 'is-invalid' : '' }}" type="text" name="logo_alt_text" id="logo_alt_text" value="{{ old('logo_alt_text', '') }}">
                @if($errors->has('logo_alt_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo_alt_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.logo_alt_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bg_image">{{ trans('cruds.game.fields.bg_image') }} (recommended size  1920*400)</label>
                <div class="needsclick dropzone {{ $errors->has('bg_image') ? 'is-invalid' : '' }}" id="bg_image-dropzone">
                </div>
                @if($errors->has('bg_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bg_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.bg_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bg_image_alt_text">{{ trans('cruds.game.fields.bg_image_alt_text') }}</label>
                <input class="form-control {{ $errors->has('bg_image_alt_text') ? 'is-invalid' : '' }}" type="text" name="bg_image_alt_text" id="bg_image_alt_text" value="{{ old('bg_image_alt_text', '') }}">
                @if($errors->has('bg_image_alt_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bg_image_alt_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.bg_image_alt_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bg_image_logo">{{ trans('cruds.game.fields.bg_image_logo') }} (recommended size   max-width:300px & max-height:200px)</label>
                <div class="needsclick dropzone {{ $errors->has('bg_image_logo') ? 'is-invalid' : '' }}" id="bg_image_logo-dropzone">
                </div>
                @if($errors->has('bg_image_logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bg_image_logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.bg_image_logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bg_image_logo_alt_text">{{ trans('cruds.game.fields.bg_image_logo_alt_text') }}</label>
                <input class="form-control {{ $errors->has('bg_image_logo_alt_text') ? 'is-invalid' : '' }}" type="text" name="bg_image_logo_alt_text" id="bg_image_logo_alt_text" value="{{ old('bg_image_logo_alt_text', '') }}">
                @if($errors->has('bg_image_logo_alt_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bg_image_logo_alt_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.bg_image_logo_alt_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bg_image_text">{{ trans('cruds.game.fields.bg_image_text') }}</label>
                <input class="form-control {{ $errors->has('bg_image_text') ? 'is-invalid' : '' }}" type="text" name="bg_image_text" id="bg_image_text" value="{{ old('bg_image_text', '') }}">
                @if($errors->has('bg_image_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bg_image_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.bg_image_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bg_image_button_text">{{ trans('cruds.game.fields.bg_image_button_text') }}</label>
                <input class="form-control {{ $errors->has('bg_image_button_text') ? 'is-invalid' : '' }}" type="text" name="bg_image_button_text" id="bg_image_button_text" value="{{ old('bg_image_button_text', '') }}">
                @if($errors->has('bg_image_button_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bg_image_button_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.bg_image_button_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bg_image_button_link">{{ trans('cruds.game.fields.bg_image_button_link') }}</label>
                <input class="form-control {{ $errors->has('bg_image_button_link') ? 'is-invalid' : '' }}" type="text" name="bg_image_button_link" id="bg_image_button_link" value="{{ old('bg_image_button_link', '') }}">
                @if($errors->has('bg_image_button_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bg_image_button_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.bg_image_button_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="game_link">{{ trans('cruds.game.fields.game_link') }}</label>
                <textarea class="form-control {{ $errors->has('game_link') ? 'is-invalid' : '' }}" name="game_link" id="game_link" placeholder="http://abc.com" value="{!! old('game_link', '') !!}"></textarea>
                @if($errors->has('game_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('game_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.game_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.game.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.name_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="rtp_game">{{ trans('cruds.game.fields.rtp_game') }}</label>
                <input class="form-control {{ $errors->has('rtp_game') ? 'is-invalid' : '' }}" type="text" name="rtp_game" id="rtp_game" value="{{ old('rtp_game', '') }}">
                @if($errors->has('rtp_game'))
                    <div class="invalid-feedback">
                        {{ $errors->first('rtp_game') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.rtp_game_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="layout">{{ trans('cruds.game.fields.layout') }}</label>
                <input class="form-control {{ $errors->has('layout') ? 'is-invalid' : '' }}" type="text" name="layout" id="layout" value="{{ old('layout', '') }}">
                @if($errors->has('layout'))
                    <div class="invalid-feedback">
                        {{ $errors->first('layout') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.layout_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="gevinstlinjer">{{ trans('cruds.game.fields.gevinstlinjer') }}</label>
                <input class="form-control {{ $errors->has('gevinstlinjer') ? 'is-invalid' : '' }}" type="text" name="gevinstlinjer" id="gevinstlinjer" value="{{ old('gevinstlinjer', '') }}">
                @if($errors->has('gevinstlinjer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gevinstlinjer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.gevinstlinjer_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="maks_mynt_gevinst">{{ trans('cruds.game.fields.maks_mynt_gevinst') }}</label>
                <input class="form-control {{ $errors->has('maks_mynt_gevinst') ? 'is-invalid' : '' }}" type="text" name="maks_mynt_gevinst" id="maks_mynt_gevinst" value="{{ old('maks_mynt_gevinst', '') }}">
                @if($errors->has('maks_mynt_gevinst'))
                    <div class="invalid-feedback">
                        {{ $errors->first('maks_mynt_gevinst') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.maks_mynt_gevinst_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="volatilitet_game">{{ trans('cruds.game.fields.volatilitet_game') }}</label>
                <input class="form-control {{ $errors->has('volatilitet_game') ? 'is-invalid' : '' }}" type="text" name="volatilitet_game" id="volatilitet_game" value="{{ old('volatilitet_game', '') }}">
                @if($errors->has('volatilitet_game'))
                    <div class="invalid-feedback">
                        {{ $errors->first('volatilitet_game') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.volatilitet_game_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="min_innsats">{{ trans('cruds.game.fields.min_innsats') }}</label>
                <input class="form-control {{ $errors->has('min_innsats') ? 'is-invalid' : '' }}" type="text" name="min_innsats" id="min_innsats" value="{{ old('min_innsats', '') }}">
                @if($errors->has('min_innsats'))
                    <div class="invalid-feedback">
                        {{ $errors->first('min_innsats') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.min_innsats_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="maks_innsats">{{ trans('cruds.game.fields.maks_innsats') }}</label>
                <input class="form-control {{ $errors->has('maks_innsats') ? 'is-invalid' : '' }}" type="text" name="maks_innsats" id="maks_innsats" value="{{ old('maks_innsats', '') }}">
                @if($errors->has('maks_innsats'))
                    <div class="invalid-feedback">
                        {{ $errors->first('maks_innsats') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.maks_innsats_helper') }}</span>
            </div>
            
            <div class="form-group">
                <label for="description">{{ trans('cruds.game.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description', '') !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="provider">{{ trans('cruds.game.fields.provider') }}</label>
                <input class="form-control {{ $errors->has('provider') ? 'is-invalid' : '' }}" type="text" name="provider" id="provider" value="{{ old('provider', '') }}">
                @if($errors->has('provider'))
                    <div class="invalid-feedback">
                        {{ $errors->first('provider') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.provider_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rtp">{{ trans('cruds.game.fields.rtp') }}</label>
                <select class="form-control select2 {{ $errors->has('rtp') ? 'is-invalid' : '' }}" name="rtp" id="rtp">
                    <option value="Low">Low</option>
                    <option value="Medium">Medium</option>
                    <option value="High">High</option>
                </select>
                @if($errors->has('rtp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('rtp') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.rtp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="volatilitet">{{ trans('cruds.game.fields.volatilitet') }}</label>
                <select class="form-control select2 {{ $errors->has('volatilitet') ? 'is-invalid' : '' }}" name="volatilitet" id="volatilitet">
                    <option value="Low">Low</option>
                    <option value="Medium">Medium</option>
                    <option value="High">High</option>
                </select>
                @if($errors->has('volatilitet'))
                    <div class="invalid-feedback">
                        {{ $errors->first('volatilitet') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.volatilitet_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gpi">{{ trans('cruds.game.fields.gpi') }}</label>
                <select class="form-control select2 {{ $errors->has('gpi') ? 'is-invalid' : '' }}" name="gpi" id="gpi">
                    <option value="Low">Low</option>
                    <option value="Medium">Medium</option>
                    <option value="High">High</option>
                </select>
                @if($errors->has('gpi'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gpi') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.gpi_helper') }}</span>
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
                                        xhr.open('POST', '/no/admin/games/ckmedia', true);
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
                                        data.append('crud_id', {{ $game->id ?? 0 }});
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
        Dropzone.options.logoDropzone = {
            url: '{{ route('admin.games.storeMedia') }}',
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
                $('form').find('input[name="logo"]').remove()
                $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="logo"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                    @if(isset($game) && $game->logo)
                var file = {!! json_encode($game->logo) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $game->logo->getUrl('thumb') }}')
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
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
            url: '{{ route('admin.games.storeMedia') }}',
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
                    @if(isset($game) && $game->bg_image)
                var file = {!! json_encode($game->bg_image) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $game->bg_image->getUrl('thumb') }}')
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
        Dropzone.options.bgImageLogoDropzone = {
            url: '{{ route('admin.games.storeMedia') }}',
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
                $('form').find('input[name="bg_image_logo"]').remove()
                $('form').append('<input type="hidden" name="bg_image_logo" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="bg_imag_logo"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                    @if(isset($game) && $game->bg_image_logo)
                var file = {!! json_encode($game->bg_image_logo) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $game->bg_image_logo->getUrl('thumb') }}')
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="bg_image_logo" value="' + file.file_name + '">')
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
