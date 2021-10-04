@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.send') }} {{ trans('cruds.subscriber.fields.email') }}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route("admin.subscribers.sendEmail") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="emails">{{ trans('cruds.subscriber.fields.email') }}</label>
                    <div style="padding-bottom: 4px">
                        <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                        <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                    </div>
                    <select class="form-control select2_tags {{ $errors->has('emails') ? 'is-invalid' : '' }}" name="emails[]" id="emails" multiple required>
                        @foreach(old('emails', $emails) as $email)
                            <option value="{{ $email }}" selected>{{ $email }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('emails'))
                        <div class="invalid-feedback">
                            {{ $errors->first('emails') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.subscriber.fields.email_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="name">{{ trans('cruds.subscriber.fields.subject') }}</label>
                    <input class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}" type="text" name="subject" id="subject" value="{{ old('subject') }}" required>
                    @if($errors->has('subject'))
                        <div class="invalid-feedback">
                            {{ $errors->first('subject') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.subscriber.fields.subject_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="template">{{ trans('cruds.subscriber.fields.template') }}</label>
                    <select class="form-control select2 {{ $errors->has('template') ? 'is-invalid' : '' }}" name="template" id="template">
                        @foreach($templates as $template)
                            <option value="{{ $template->id }}" {{ $template->id == old('template') ? 'selected' : '' }}>{{ $template->name }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('template'))
                        <div class="invalid-feedback">
                            {{ $errors->first('template') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.subscriber.fields.template_helper') }}</span>
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
            $(".js-example-tokenizer").select2({
                tags: true,
                tokenSeparators: [',', ' ']
            })

            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                    return {
                        upload: function() {
                            return loader.file
                                .then(function (file) {
                                    console.log(file);
                                    return new Promise(function(resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST', '/admin/content-pages/ckmedia', true);
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
                                            resolve({ default: '{{ url('') }}' + response.url });
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
                                        data.append('crud_id', {{ $contentPage->id ?? 0 }});
                                        xhr.send(data);
                                    });
                                });
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
