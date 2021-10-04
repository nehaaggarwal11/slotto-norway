@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('cruds.staticPage.title') }} / {{ trans('cruds.staticPage.newsletter.title') }}
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route("admin.static-pages.update", $page) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="heading">{{ trans('cruds.staticPage.newsletter.fields.heading') }}</label>
                <input class="form-control {{ $errors->has('heading') ? 'is-invalid' : '' }}" type="text" name="heading" id="heading" value="{{ old('heading', @$data->heading) }}">
                @if($errors->has('heading'))
                    <div class="invalid-feedback">
                        {{ $errors->first('heading') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.newsletter.fields.heading_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="newsletter_description">{{ trans('cruds.staticPage.newsletter.fields.newsletter_description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('newsletter_description') ? 'is-invalid' : '' }}" name="newsletter_description" id="newsletter_description">{!! old('newsletter_description', @$data->newsletter_description) !!}</textarea>
                @if($errors->has('newsletter_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('newsletter_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.newsletter.fields.newsletter_description_helper') }}</span>
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

    </script>
@endsection

