<div class="table-body">
    <table class="table table-rating nj_sorting_table">
        <thead>
            <tr>
                <th>&nbsp;&nbsp;# <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th>Free Spins <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th>Bonus <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th>Omsetningskrav <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th>Rating <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th class="no-sort">Info</th>
            </tr>
        </thead>
        <tbody>
            @foreach($casinos as $cas => $casino)
                <tr>
                    <td><span class="serial_no">{{ $cas + 1 }}</span></td>
                    <td data-order="{{ $casino->spins }}" class="note">
                        @if($casino->featured_image)
                            <a href="{{ $casino->link }}" target="_blank" rel="nofollow">
                                <img src="{{ $casino->featured_image->getUrl('thumb') }}" alt="{{ $casino->featured_image_alt_text }}">
                            </a>
                        @endif
                    </td>
                    <td data-order="{{ $casino->bonus }}" align="center" style="width:200px;">
                        <a href="{{ $casino->link }}" rel="nofollow"><h6>{{ $casino->name }}</h6></a>
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
                        <a href="{{ $casino->route }}">
                            <p class="add-review-btn">Les anmeldelse</p>
                        </a>
                    </td>
                    <td data-order="{{ $casino->wagering_requirements }}">
                        <p>{{ $casino->small_description }}</p>
                    </td>
                    <td data-order="{{ $casino->rating }}">
                        <p>{{ $casino->info }}</p>
                    </td>
                    <td>
                        <a href="{{ $casino->link }}" target="_blank" class="btn blue text-nowrap" rel="nofollow">Spill her
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
