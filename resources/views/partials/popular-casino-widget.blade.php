<div class="popular-casino">
    <h6>{{ \App\StaticPage::getField('setting', 'popular_casinos_box_title') }}</h6>
    <ul class="casino-list">
        @php
            $popular_casinos_ids = implode(',', @json_decode(\App\StaticPage::getField('setting', 'popular_casinos'), true) ?? []);
            $popular_casinos = $popular_casinos_ids ? \App\Casino::select('id', 'name', 'popular_casino_hover_info', 'link', 'featured_image_alt_text')
                ->whereRaw("`id` IN ($popular_casinos_ids)")
                ->orderByRaw("FIELD(id, $popular_casinos_ids)")
                ->get(): null;
        @endphp
        @foreach($popular_casinos as $casino)
            <li>
                <a href="{{ $casino->link }}" class="casino-widget" rel="nofollow">
                    <div class="casino-top casino-inner">
                        <img src="{{ $casino->featured_image->thumbnail }}" alt="{{ $casino->featured_image_alt_text }}" class="casino-img" width="32" height="32">
                        {{ $casino->name }}
                    </div>
                    <div class="casino-bottom casino-inner">
                        <svg class="casino-widget___svg" width="32"
                             height="32"
                             xmlns="http://www.w3.org/2000/svg"
                             fill-rule="evenodd" clip-rule="evenodd">
                            <path
                                d="M22 22h-20c-1.104 0-2-.896-2-2v-12c0-1.104.896-2 2-2h1.626l.078.283c.194.631.518 1.221.95 1.717h-2.154c-.276 0-.5.224-.5.5v5.5h20v-5.5c0-.276-.224-.5-.5-.5h-2.154c.497-.569.853-1.264 1.029-2h1.625c1.104 0 2 .896 2 2v12c0 1.104-.896 2-2 2zm-20-5v2.5c0 .276.224.5.5.5h19c.276 0 .5-.224.5-.5v-2.5h-20zm8.911-5h-2.911c.584-1.357 1.295-2.832 2-4-.647-.001-1.572.007-2 0-2.101-.035-2.987-1.806-3-3-.016-1.534 1.205-3.007 3-3 1.499.006 2.814.872 4 2.313 1.186-1.441 2.501-2.307 4-2.313 1.796-.007 3.016 1.466 3 3-.013 1.194-.899 2.965-3 3-.428.007-1.353-.001-2 0 .739 1.198 1.491 2.772 2 4h-2.911c-.241-1.238-.7-2.652-1.089-3.384-.388.732-.902 2.393-1.089 3.384zm-2.553-7.998c-1.131 0-1.507 1.918.12 1.998.237.012 2.235 0 2.235 0-1.037-1.44-1.52-1.998-2.355-1.998zm7.271 0c1.131 0 1.507 1.918-.12 1.998-.237.012-2.222 0-2.222 0 1.037-1.44 1.507-1.998 2.342-1.998z"
                                fill="#fff">
                            </path>
                        </svg>
                        {{ $casino->popular_casino_hover_info }}
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
