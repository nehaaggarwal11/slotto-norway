@extends('layouts.admin')
@section('content')
    @php
        $all_casinos = \App\Casino::all();
    @endphp

    <div class="card">
        <div class="card-header">
            {{ trans('cruds.staticPage.title') }} / {{ trans('cruds.staticPage.casino-bonus.title') }}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route("admin.static-pages.update", $page) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="casino_heading">{{ trans('cruds.staticPage.casino-bonus.fields.casino_heading') }}</label>
                    <input class="form-control {{ $errors->has('casino_heading') ? 'is-invalid' : '' }}" type="text" name="casino_heading" value="{{ old('casino_heading', @$data->casino_heading)}}">
                    @if($errors->has('casino_heading'))
                        <div class="invalid-feedback">
                            {{ $errors->first('casino_heading') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.casino_heading_helper') }}</span>
                </div>

                <div class="form-group">
                    <label for="casino_text">{{ trans('cruds.staticPage.casino-bonus.fields.casino_text') }}</label>
                    <input class="form-control {{ $errors->has('casino_text') ? 'is-invalid' : '' }}" type="text" name="casino_text" value="{{ old('casino_text', @$data->casino_text)}}">
                    @if($errors->has('casino_text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('casino_text') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.casino_text_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="casinos">{{ trans('cruds.staticPage.casino-bonus.fields.casinos') }}</label>
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
                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.casinos_helper') }}</span>
                </div>

                <div class="card">
                    <div class="card-header">Two Main Casinos</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="required" for="tmc_casinos">{{ trans('cruds.staticPage.casino-bonus.fields.tmc_casinos') }}</label>
                            @php $tmc_casinos = old('tmc_casinos', @$data->tmc_casinos ?? []); @endphp
                            <select class="form-control custom_order select2_two_casinos {{ $errors->has('tmc_casinos') ? 'is-invalid' : '' }}" name="tmc_casinos[]" id="tmc_casinos" data-selected="{{ implode(",", $tmc_casinos) }}" multiple required>
                                @foreach($tmc_casinos as $casino_id)
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
                                    @if($casino && !in_array($casino->id, $tmc_casinos))
                                        <option value="{{ $casino->id }}">{{ $casino->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @if($errors->has('tmc_casinos'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('tmc_casinos') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.casinos_helper') }}</span>
                        </div>

                        <div class="card">
                            <div class="card-header">{{ trans('cruds.staticPage.casino-bonus.fields.casino_first') }}</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="tmc1_heading_icon_image">{{ trans('cruds.staticPage.casino-bonus.fields.heading_icon_image') }}</label>
                                    <div class="needsclick dropzone {{ $errors->has('tmc1_heading_icon_image') ? 'is-invalid' : '' }}" id="tmc1_heading_icon_image-dropzone">
                                    </div>
                                    @if($errors->has('tmc1_heading_icon_image'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tmc1_heading_icon_image') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.heading_icon_image_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="tmc1_heading_icon_image_alt_text">{{ trans('cruds.staticPage.casino-bonus.fields.heading_icon_image_alt_text') }}</label>
                                    <input class="form-control {{ $errors->has('tmc1_heading_icon_image_alt_text') ? 'is-invalid' : '' }}" type="text" name="tmc1_heading_icon_image_alt_text" value="{{ old('tmc1_heading_icon_image_alt_text', @$data->tmc1_heading_icon_image_alt_text)}}">
                                    @if($errors->has('tmc1_heading_icon_image_alt_text'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tmc1_heading_icon_image_alt_text') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.heading_icon_image_alt_text_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="tmc1_heading_title">{{ trans('cruds.staticPage.casino-bonus.fields.heading_title') }}</label>
                                    <input class="form-control {{ $errors->has('tmc1_heading_title') ? 'is-invalid' : '' }}" type="text" name="tmc1_heading_title" value="{{ old('tmc1_heading_title', @$data->tmc1_heading_title)}}">
                                    @if($errors->has('tmc1_heading_title'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tmc1_heading_title') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.heading_title_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="tmc1_bg_image">{{ trans('cruds.staticPage.casino-bonus.fields.bg_image') }}</label>
                                    <div class="needsclick dropzone {{ $errors->has('tmc1_bg_image') ? 'is-invalid' : '' }}" id="tmc1_bg_image-dropzone">
                                    </div>
                                    @if($errors->has('tmc1_bg_image'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tmc1_bg_image') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.bg_image_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="tmc1_bg_image_alt_text">{{ trans('cruds.staticPage.casino-bonus.fields.bg_image_alt_text') }}</label>
                                    <input class="form-control {{ $errors->has('tmc1_bg_image_alt_text') ? 'is-invalid' : '' }}" type="text" name="tmc1_bg_image_alt_text" value="{{ old('tmc1_bg_image_alt_text', @$data->tmc1_bg_image_alt_text)}}">
                                    @if($errors->has('tmc1_bg_image_alt_text'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tmc1_bg_image_alt_text') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.bg_image_alt_text_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required" for="tmc1_info_text">{{ trans('cruds.staticPage.casino-bonus.fields.info_text') }}</label>
                                    <input class="form-control {{ $errors->has('tmc1_info_text') ? 'is-invalid' : '' }}" type="text" name="tmc1_info_text" value="{{ old('tmc1_info_text', @$data->tmc1_info_text)}}" required>
                                    @if($errors->has('tmc1_info_text'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tmc1_info_text') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.info_text_helper') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">{{ trans('cruds.staticPage.casino-bonus.fields.casino_second') }}</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="tmc2_heading_icon_image">{{ trans('cruds.staticPage.casino-bonus.fields.heading_icon_image') }}</label>
                                    <div class="needsclick dropzone {{ $errors->has('tmc2_heading_icon_image') ? 'is-invalid' : '' }}" id="tmc2_heading_icon_image-dropzone">
                                    </div>
                                    @if($errors->has('tmc2_heading_icon_image'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tmc2_heading_icon_image') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.heading_icon_image_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="tmc2_heading_icon_image_alt_text">{{ trans('cruds.staticPage.casino-bonus.fields.heading_icon_image_alt_text') }}</label>
                                    <input class="form-control {{ $errors->has('tmc2_heading_icon_image_alt_text') ? 'is-invalid' : '' }}" type="text" name="tmc2_heading_icon_image_alt_text" value="{{ old('tmc2_heading_icon_image_alt_text', @$data->tmc2_heading_icon_image_alt_text)}}">
                                    @if($errors->has('tmc2_heading_icon_image_alt_text'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tmc2_heading_icon_image_alt_text') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.heading_icon_image_alt_text_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="tmc2_heading_title">{{ trans('cruds.staticPage.casino-bonus.fields.heading_title') }}</label>
                                    <input class="form-control {{ $errors->has('tmc2_heading_title') ? 'is-invalid' : '' }}" type="text" name="tmc2_heading_title" value="{{ old('tmc2_heading_title', @$data->tmc2_heading_title)}}">
                                    @if($errors->has('tmc2_heading_title'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tmc2_heading_title') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.heading_title_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="tmc2_bg_image">{{ trans('cruds.staticPage.casino-bonus.fields.bg_image') }}</label>
                                    <div class="needsclick dropzone {{ $errors->has('tmc2_bg_image') ? 'is-invalid' : '' }}" id="tmc2_bg_image-dropzone">
                                    </div>
                                    @if($errors->has('tmc2_bg_image'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tmc2_bg_image') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.bg_image_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="tmc2_bg_image_alt_text">{{ trans('cruds.staticPage.casino-bonus.fields.bg_image_alt_text') }}</label>
                                    <input class="form-control {{ $errors->has('tmc2_bg_image_alt_text') ? 'is-invalid' : '' }}" type="text" name="tmc2_bg_image_alt_text" value="{{ old('tmc2_bg_image_alt_text', @$data->tmc2_bg_image_alt_text)}}">
                                    @if($errors->has('tmc2_bg_image_alt_text'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tmc2_bg_image_alt_text') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.bg_image_alt_text_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required" for="tmc2_info_text">{{ trans('cruds.staticPage.casino-bonus.fields.info_text') }}</label>
                                    <input class="form-control {{ $errors->has('tmc2_info_text') ? 'is-invalid' : '' }}" type="text" name="tmc2_info_text" value="{{ old('tmc2_info_text', @$data->tmc2_info_text)}}" required>
                                    @if($errors->has('tmc2_info_text'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tmc2_info_text') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.info_text_helper') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">Sannheten om gratis bonus</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="free_bonus_heading">{{ trans('cruds.staticPage.casino-bonus.fields.section_heading') }}</label>
                                    <input class="form-control {{ $errors->has('free_bonus_heading') ? 'is-invalid' : '' }}" type="text" name="free_bonus_heading" id="free_bonus_heading" value="{{ old('free_bonus_heading', @$data->free_bonus_heading) }}">
                                    @if($errors->has('free_bonus_heading'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('free_bonus_heading') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.section_heading_helper') }}</span>
                                </div>

                                <div class="form-group">
                                    <label for="free_bonus_text">{{ trans('cruds.staticPage.casino-bonus.fields.section_text') }}</label>
                                    <textarea class="form-control ckeditor {{ $errors->has('free_bonus_text') ? 'is-invalid' : '' }}" name="free_bonus_text" id="free_bonus_text">{!! old('free_bonus_text', @$data->free_bonus_text) !!}</textarea>
                                    @if($errors->has('free_bonus_text'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('free_bonus_text') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.section_text_helper') }}</span>
                                </div>

                                <div class="card">
                                    <div class="card-header">Pengebonuser og free spins uten innskudd</div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="casino_bonus_penge_text_less">{{ trans('cruds.staticPage.casino-bonus.fields.section_text_less') }}</label>
                                            <textarea class="form-control ckeditor {{ $errors->has('casino_bonus_penge_text_less') ? 'is-invalid' : '' }}" name="casino_bonus_penge_text_less" id="casino_bonus_penge_text_less">{!! old('casino_bonus_penge_text_less', @$data->casino_bonus_penge_text_less) !!}</textarea>
                                            @if($errors->has('casino_bonus_penge_text_less'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('casino_bonus_penge_text_less') }}
                                                </div>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.section_text_less_helper') }}</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="casino_bonus_penge_text_more">{{ trans('cruds.staticPage.casino-bonus.fields.section_text_more') }}</label>
                                            <textarea class="form-control ckeditor {{ $errors->has('casino_bonus_penge_text_more') ? 'is-invalid' : '' }}" name="casino_bonus_penge_text_more" id="casino_bonus_penge_text_more">{!! old('casino_bonus_penge_text_more', @$data->casino_bonus_penge_text_more) !!}</textarea>
                                            @if($errors->has('casino_bonus_penge_text_more'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('casino_bonus_penge_text_more') }}
                                                </div>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.section_text_more_helper') }}</span>
                                        </div>
                                    </div>
                                </div>  
                                
                                <div class="card">
                                    <div class="card-header">Innskuddsbonuser hos nettcasino</div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="casino_bonus_nettcasino_text_less">{{ trans('cruds.staticPage.casino-bonus.fields.section_text_less') }}</label>
                                            <textarea class="form-control ckeditor {{ $errors->has('casino_bonus_nettcasino_text_less') ? 'is-invalid' : '' }}" name="casino_bonus_nettcasino_text_less" id="casino_bonus_nettcasino_text_less">{!! old('casino_bonus_nettcasino_text_less', @$data->casino_bonus_nettcasino_text_less) !!}</textarea>
                                            @if($errors->has('casino_bonus_nettcasino_text_less'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('casino_bonus_nettcasino_text_less') }}
                                                </div>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.section_text_less_helper') }}</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="casino_bonus_nettcasino_text_more">{{ trans('cruds.staticPage.casino-bonus.fields.section_text_more') }}</label>
                                            <textarea class="form-control ckeditor {{ $errors->has('casino_bonus_nettcasino_text_more') ? 'is-invalid' : '' }}" name="casino_bonus_nettcasino_text_more" id="casino_bonus_nettcasino_text_more">{!! old('casino_bonus_nettcasino_text_more', @$data->casino_bonus_nettcasino_text_more) !!}</textarea>
                                            @if($errors->has('casino_bonus_nettcasino_text_more'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('casino_bonus_nettcasino_text_more') }}
                                                </div>
                                            @endif
                                            <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.section_text_more_helper') }}</span>
                                        </div>
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <label for="casino_bonus_wagering_text">{{ trans('cruds.staticPage.casino-bonus.fields.section_text') }}</label>
                                    <textarea class="form-control ckeditor {{ $errors->has('casino_bonus_wagering_text') ? 'is-invalid' : '' }}" name="casino_bonus_wagering_text" id="casino_bonus_wagering_text">{!! old('casino_bonus_wagering_text', @$data->casino_bonus_wagering_text) !!}</textarea>
                                    @if($errors->has('casino_bonus_wagering_text'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('casino_bonus_wagering_text') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.staticPage.casino-bonus.fields.section_text_helper') }}</span>
                                </div>

                            </div>

                        </div>

                        @php
                        /**
                         * @var $data from controller
                        */
                        $seo_title = @$data->seo_title;
                        $seo_keyword = @$data->seo_keyword;
                        $seo_description = @$data->seo_description;
                        @endphp
                        @include('partials.seoFields', compact('errors', 'seo_title', 'seo_keyword', 'seo_description'))
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
            $('select.select2_casinos').select2_sortable({
                maximumSelectionLength: 40
            });
            $('select.select2_two_casinos').select2_sortable({
                maximumSelectionLength: 2
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

        

        Dropzone.options.tmc1HeadingIconImageDropzone = {
            url: '{{ route('admin.static-pages.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif,.svg',
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
                $('form').find('input[name="images[tmc1_heading_icon_image]"]').remove()
                $('form').append('<input type="hidden" name="images[tmc1_heading_icon_image]" value="' + response.name + '">')

                $('form').find('input[name="tmc1_heading_icon_image"]').remove()
                $('form').append('<input type="hidden" name="tmc1_heading_icon_image" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="images[tmc1_heading_icon_image]"]').val('')
                    $('form').find('input[name="tmc1_heading_icon_image"]').val('')
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                    @php
                        /**
                         * @var $page from controller
                        */
                        $image = \App\StaticPage::getMediaField($page, 'tmc1_heading_icon_image');
                    @endphp
                    @if(isset($data) && $image)
                var file = {!! json_encode($image) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $image->getUrl('thumb') }}')
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="images[tmc1_heading_icon_image]" value="' + file.file_name + '">')
                $('form').append('<input type="hidden" name="tmc1_heading_icon_image" value="' + file.file_name + '">')
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
        Dropzone.options.tmc1BgImageDropzone = {
            url: '{{ route('admin.static-pages.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif,.svg',
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
                $('form').find('input[name="images[tmc1_bg_image]"]').remove()
                $('form').append('<input type="hidden" name="images[tmc1_bg_image]" value="' + response.name + '">')

                $('form').find('input[name="tmc1_bg_image"]').remove()
                $('form').append('<input type="hidden" name="tmc1_bg_image" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="images[tmc1_bg_image]"]').val('')
                    $('form').find('input[name="tmc1_bg_image"]').val('')
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                    @php
                        /**
                         * @var $page from controller
                        */
                        $image = \App\StaticPage::getMediaField($page, 'tmc1_bg_image');
                    @endphp
                    @if(isset($data) && $image)
                var file = {!! json_encode($image) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $image->getUrl('thumb') }}')
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="images[tmc1_bg_image]" value="' + file.file_name + '">')
                $('form').append('<input type="hidden" name="tmc1_bg_image" value="' + file.file_name + '">')
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
        Dropzone.options.tmc2HeadingIconImageDropzone = {
            url: '{{ route('admin.static-pages.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif,.svg',
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
                $('form').find('input[name="images[tmc2_heading_icon_image]"]').remove()
                $('form').append('<input type="hidden" name="images[tmc2_heading_icon_image]" value="' + response.name + '">')

                $('form').find('input[name="tmc2_heading_icon_image"]').remove()
                $('form').append('<input type="hidden" name="tmc2_heading_icon_image" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="images[tmc2_heading_icon_image]"]').val('')
                    $('form').find('input[name="tmc2_heading_icon_image"]').val('')
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                    @php
                        /**
                         * @var $page from controller
                        */
                        $image = \App\StaticPage::getMediaField($page, 'tmc2_heading_icon_image');
                    @endphp
                    @if(isset($data) && $image)
                var file = {!! json_encode($image) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $image->getUrl('thumb') }}')
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="images[tmc2_heading_icon_image]" value="' + file.file_name + '">')
                $('form').append('<input type="hidden" name="tmc2_heading_icon_image" value="' + file.file_name + '">')
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
        Dropzone.options.tmc2BgImageDropzone = {
            url: '{{ route('admin.static-pages.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif,.svg',
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
                $('form').find('input[name="images[tmc2_bg_image]"]').remove()
                $('form').append('<input type="hidden" name="images[tmc2_bg_image]" value="' + response.name + '">')

                $('form').find('input[name="tmc2_bg_image"]').remove()
                $('form').append('<input type="hidden" name="tmc2_bg_image" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="images[tmc2_bg_image]"]').val('')
                    $('form').find('input[name="tmc2_bg_image"]').val('')
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                    @php
                        /**
                         * @var $page from controller
                        */
                        $image = \App\StaticPage::getMediaField($page, 'tmc2_bg_image');
                    @endphp
                    @if(isset($data) && $image)
                var file = {!! json_encode($image) !!}
                        this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, '{{ $image->getUrl('thumb') }}')
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="images[tmc2_bg_image]" value="' + file.file_name + '">')
                $('form').append('<input type="hidden" name="tmc2_bg_image" value="' + file.file_name + '">')
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
