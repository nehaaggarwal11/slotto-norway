@foreach($sports as $sp => $sport)
<div class="sport-mobile-collapsed">
    <div class="sport-mobile-area collapsed" data-toggle="collapse" href="#otherDescription1">
        <div class="rating-img">
            <span>{{ $sp + 1 }}</span>
            @if($sport->featured_image)
                <a href="{{ $sport->link }}" target="_blank">
                    <img src="{{ $sport->featured_image->getUrl('thumb') }}" alt="{{ $sport->featured_image_alt_text }}" align="center">
                </a>
            @endif
        </div>
        <div class="rating-mobile-content">
            <h6>{{ $sport->name }}</h6>
            <span class="bonus-span">{{ $sport->spins_text }}</span>
            <p>{{ $sport->bonus_text }}</p>
            <p>
                @if($sport->rating)
                    <p>
                        @for($i = 0; $i < $sport->rating; $i++)
                            <span class="fa fa-star text-orange"></span>
                        @endfor
                    </p>
                @endif
            </p>
            <a class="add-review-btn" href="{{ $sport->route }}">Les anmeldelse</a>
        </div>
        <div class="rating-mobile-btn">
            <a href="{{ $sport->link }}" target="_blank" class="btn-play">
                <i class="fa fa-play-circle" aria-hidden="true"></i>
                <p>Spill her
                </p>
            </a>
        </div>
    </div>
    <div id="otherDescription{{ $sp + 1 }}" class="card-body collapse other-description" data-parent="#otherDescription{{ $sp + 1 }}">
        <p>{{ $sport->small_description }}</p>
        <hr>
        <p>{{ $sport->info }}</p>
    </div>
</div>
@endforeach
