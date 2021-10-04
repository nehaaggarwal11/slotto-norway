<div class="table-body">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
        <table class="table sports-casinos nj_sorting_table dataTable no-footer" id="DataTables_Table_0" role="grid">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;&amp;nbsp;# : activate to sort column descending" style="width: 37px;">&nbsp;&nbsp;# <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Bonus : activate to sort column ascending" style="width: 176px;">Bonus <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Omsetningskrav : activate to sort column ascending" style="width: 200px;">Omsetningskrav <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Rating : activate to sort column ascending" style="width: 109px;">Rating <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Info" style="width: 119px;">Info</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Free Spins : activate to sort column ascending" style="width: 206px;"></th>
                
            </tr>
            </thead>
            <tbody>
             @foreach($sports as $sp => $sport)
                <tr>
                    <td><span class="serial_no">{{ $sp + 1 }}</span></td>
                    <td data-order="{{ $sport->spins }}" class="note">
                        @if($sport->featured_image)
                            <a href="{{ $sport->link }}" target="_blank">
                                <img src="{{ $sport->featured_image->getUrl('thumb') }}" alt="{{ $sport->featured_image_alt_text }}" class="sport-featured-image">
                            </a>
                        @endif
                    </td>
                    <td data-order="{{ $sport->bonus }}" align="center" style="width:200px;">
                        <a href="{{ $sport->link }}"><h6>{{ $sport->name }}</h6></a>
                        <p>{{ $sport->spins_text }}</p>
                        <span class="bonus-span">{{ $sport->bonus_text }}</span>
                        <p>{{ $sport->wagering_requirements_text }}</p>
                        @if($sport->rating)
                            <p>
                                @for($i = 0; $i < $sport->rating; $i++)
                                    <span class="fa fa-star text-orange"></span>
                                @endfor
                            </p>
                        @endif
                        <a href="{{ $sport->route }}">
                            <p class="add-review-btn">Les anmeldelse</p>
                        </a>
                    </td>
                    <td data-order="{{ $sport->wagering_requirements }}">
                        <p>{{ $sport->small_description }}</p>
                    </td>
                    <td data-order="{{ $sport->rating }}">
                        <p>{{ $sport->info }}</p>
                    </td>
                    <td>
                        <a href="{{ $sport->link }}" target="_blank" class="btn blue text-nowrap">Spill her
                        </a>
                    </td>
                </tr>
            @endforeach
            
            </tbody>
        </table>
    </div>
</div>
