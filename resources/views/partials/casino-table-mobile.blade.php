@foreach($casinos as $cas => $casino)
    <div class="rating-mobile-collapsed">
        <div class="rating-mobile-area collapsed" data-toggle="collapse" href="#otherDescription{{ $cas + 1 }}">
            <div class="rating-img">
                <span>{{ $cas + 1 }}</span>
                @if($casino->featured_image)
                    <a href="{{ $casino->link }}" target="_blank" rel="nofollow">
                        <img src="{{ $casino->featured_image->getUrl('thumb') }}" alt="{{ $casino->featured_image_alt_text }}" align="center">
                    </a>
                @endif
            </div>
            <div class="rating-mobile-content">
                <h6>{{ $casino->name }}</h6>
                <p>{{ $casino->spins_text }}</p>
                <span class="bonus-span">{{ $casino->bonus_text }}</span>
                <p>{{ $casino->wagering_requirements_text }}</p>
                @if($casino->rating)
                    <p>
                        @for($i = 0; $i < $casino->rating; $i++)
                            <span class="fa fa-star text-orange"></span>
                        @endfor
                    </p>
                @endif
                <a class="add-review-btn" href="{{ $casino->route }}">Les anmeldelse</a>
            </div>
            <div class="rating-mobile-btn">
                <a href="{{ $casino->link }}" target="_blank" class="btn-play" rel="nofollow">
                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                    <p>Spill her
                    </p>
                </a>
            </div>
        </div>
        <div id="otherDescription{{ $cas + 1 }}" class="card-body collapse other-description"
             data-parent="#otherDescription{{ $cas + 1 }}">
            <p>{{ $casino->small_description }}</p>
            <hr>
            <p>{{ $casino->info }}</p>
        </div>
    </div>
@endforeach
