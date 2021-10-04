<div class="card">
    <div class="card-header">SEO</div>
    <div class="card-body">
        <div class="form-group">
            <label for="seo_title">{{ trans('global.seo.title') }}</label>
            <input class="form-control {{ $errors->has('seo_title') ? 'is-invalid' : '' }}" type="text" name="seo_title" id="seo_title" value="{{ old('seo_title', $seo_title) }}">
            @if($errors->has('seo_title'))
                <div class="invalid-feedback">
                    {{ $errors->first('seo_title') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="seo_keyword">{{ trans('global.seo.keyword') }}</label>
            <input class="form-control {{ $errors->has('seo_keyword') ? 'is-invalid' : '' }}" type="text" name="seo_keyword" id="seo_keyword" value="{{ old('seo_keyword', $seo_keyword) }}">
            @if($errors->has('seo_keyword'))
                <div class="invalid-feedback">
                    {{ $errors->first('seo_keyword') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="seo_description">{{ trans('global.seo.description') }}</label>
            <textarea class="form-control {{ $errors->has('seo_description') ? 'is-invalid' : '' }}" name="seo_description" id="seo_description" cols="10" rows="5">{{ old('seo_description', $seo_description) }}</textarea>
            @if($errors->has('seo_description'))
                <div class="invalid-feedback">
                    {{ $errors->first('seo_description') }}
                </div>
            @endif
        </div>
    </div>
</div>
