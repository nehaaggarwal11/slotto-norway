@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('cruds.staticPage.title') }} / {{ trans('cruds.staticPage.landing-page.title') }}
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route("admin.static-pages.update", $page) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="board_image">{{ trans('cruds.staticPage.landing-page.fields.board_image') }}(recommended size 1903*250)</label>
                <div class="needsclick dropzone {{ $errors->has('board_image') ? 'is-invalid' : '' }}" id="board_image-dropzone">
                </div>
                @if($errors->has('board_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('board_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.landing-page.fields.board_image_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="board_image_alt_text">{{ trans('cruds.staticPage.landing-page.fields.board_image_alt_text') }}</label>
                <input class="form-control {{ $errors->has('board_image_alt_text') ? 'is-invalid' : '' }}" type="text" name="board_image_alt_text" id="board_image_alt_text" value="{{ old('board_image_alt_text', @$data->board_image_alt_text) }}">
                @if($errors->has('board_image_alt_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('board_image_alt_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.landing-page.fields.board_image_alt_text_helper') }}</span>
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
        function SimpleUploadAdapter(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                return {
                    upload: function() {
                        return loader.file
                            
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

    Dropzone.options.boardImageDropzone = {
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
                $('form').find('input[name="images[board_image]"]').remove()
                $('form').append('<input type="hidden" name="images[board_image]" value="' + response.name + '">')

                $('form').find('input[name="board_image"]').remove()
                $('form').append('<input type="hidden" name="board_image" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="images[board_image]"]').val('')
                    $('form').find('input[name="board_image"]').val('')
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                @php
                    /**
                     * @var $page from controller
                    */
                    $image = \App\StaticPage::getMediaField($page, 'board_image');
                @endphp
                @if(isset($data) && $image)
                    var file = {!! json_encode($image) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, '{{ $image->getUrl('thumb') }}')
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="images[board_image]" value="' + file.file_name + '">')
                    $('form').append('<input type="hidden" name="board_image" value="' + file.file_name + '">')
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