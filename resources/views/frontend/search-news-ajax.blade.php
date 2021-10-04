@foreach($news as $news)
    <div class="col-md-4 mb-4">
        <div class="single-blog blog-2 mt-30">
            <div class="blog-image">
                <a href="{{ $news->route }}"><img
                        src="{{ @$news->logo_img->url }}"
                        alt="{{ $news->logo_img_alt_text }}"></a>
            </div>
            <div class="blog-content">
                <h4 class="news-blog-title"><a href="{{ $news->route }}">{{ $news->name }}</a></h4>
                <p class="news-short-description">{{ Str::limit($news->small_description, 80) }}</p>
                <a class="btn read-blog-btn mx-auto d-block"
                href="{{ $news->route }}">Les Blogg</a>
            </div>
        </div>
    </div>
@endforeach