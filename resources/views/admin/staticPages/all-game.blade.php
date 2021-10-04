@extends('layouts.admin')
@section('content')

@php
    $all_games = \App\Game::all();
@endphp
<div class="card">
    <div class="card-header">
        {{ trans('cruds.staticPage.title') }} / {{ trans('cruds.staticPage.all-game.title') }}
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route("admin.static-pages.update", $page) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="required" for="games">{{ trans('cruds.staticPage.all-game.fields.games') }}</label>
                @php $games = old('games', @$data->games ?? []); @endphp
                <select class="form-control custom_order select2_games {{ $errors->has('games') ? 'is-invalid' : '' }}" name="games[]" id="games" data-selected="{{ implode(",", $games) }}" multiple required>
                    @foreach($games as $game_id)
                        @php
                            /**
                            * @var $game_id from loop
                            */
                            $game = \App\Game::find($game_id)
                        @endphp
                        @if($game)
                            <option value="{{ $game->id }}">{{ $game->name }}</option>
                        @endif
                    @endforeach
                    @foreach($all_games as $game)
                        @if(!in_array($game->id, $games))
                            <option value="{{ $game->id }}">{{ $game->name }}</option>
                        @endif
                    @endforeach
                </select>
                @if($errors->has('games'))
                    <div class="invalid-feedback">
                        {{ $errors->first('games') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.all-game.fields.games_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="bg_image">{{ trans('cruds.staticPage.all-game.fields.bg_image') }}(recommended size 1903*250)</label>
                <div class="needsclick dropzone {{ $errors->has('bg_image') ? 'is-invalid' : '' }}" id="bg_image-dropzone">
                </div>
                @if($errors->has('bg_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bg_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.all-game.fields.bg_image_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="bg_image_alt_text">{{ trans('cruds.staticPage.all-game.fields.bg_image_alt_text') }}</label>
                <input class="form-control {{ $errors->has('bg_image_alt_text') ? 'is-invalid' : '' }}" type="text" name="bg_image_alt_text" id="bg_image_alt_text" value="{{ old('bg_image_alt_text', @$data->bg_image_alt_text) }}">
                @if($errors->has('bg_image_alt_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bg_image_alt_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.all-game.fields.bg_image_alt_text_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="bg_image_heading">{{ trans('cruds.staticPage.all-game.fields.bg_image_heading') }}</label>
                <input class="form-control {{ $errors->has('bg_image_heading') ? 'is-invalid' : '' }}" type="text" name="bg_image_heading" id="bg_image_heading" value="{{ old('bg_image_heading', @$data->bg_image_heading) }}">
                @if($errors->has('bg_image_heading'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bg_image_heading') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.all-game.fields.bg_image_heading_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="bg_image_text">{{ trans('cruds.staticPage.all-game.fields.bg_image_text') }}</label>
                <input class="form-control {{ $errors->has('bg_image_text') ? 'is-invalid' : '' }}" type="text" name="bg_image_text" id="bg_image_text" value="{{ old('bg_image_text', @$data->bg_image_text) }}">
                @if($errors->has('bg_image_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bg_image_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staticPage.all-game.fields.bg_image_text_helper') }}</span>
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
            $('select.select2_games').select2_sortable({
                
            });
        });

        Dropzone.options.bgImageDropzone = {
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
                $('form').find('input[name="images[bg_image]"]').remove()
                $('form').append('<input type="hidden" name="images[bg_image]" value="' + response.name + '">')

                $('form').find('input[name="bg_image"]').remove()
                $('form').append('<input type="hidden" name="bg_image" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="images[bg_image]"]').val('')
                    $('form').find('input[name="bg_image"]').val('')
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                @php
                    /**
                     * @var $page from controller
                    */
                    $image = \App\StaticPage::getMediaField($page, 'bg_image');
                @endphp
                @if(isset($data) && $image)
                    var file = {!! json_encode($image) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, '{{ $image->getUrl('thumb') }}')
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="images[bg_image]" value="' + file.file_name + '">')
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
