<?php

namespace App\Http\Controllers\Frontend;

use App\Sport;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\StaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BettingController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {

        $data = StaticPage::getAllFields('sport-casino');

        $sports_ids = implode(',', @$data->sport_casinos ?? []);
        $sports = $sports_ids ? Sport::select('id','name','slug','bonus',
            'bonus_text','wagering_requirements', 'wagering_requirements_text','rating',
            'small_description','info', 'link','seo_title','seo_keyword','seo_description','featured_image_alt_text'
        )->whereRaw("`id` IN ($sports_ids)")
            ->orderByRaw("FIELD(id, $sports_ids)")
            ->get(): null;


        $tmc_sports_ids = implode(',', @$data->tmc_sport_casinos ?? []);
        $tmc_sports = $tmc_sports_ids ? Sport::select('id','link','name','slug','transparent_logo_image_alt_text')
            ->whereRaw("`id` IN ($tmc_sports_ids)")
            ->orderByRaw("FIELD(id, $tmc_sports_ids)")
            ->get(): null;
        // dd($sports_ids);  

        return view('frontend.betting', compact('sports','tmc_sports', 'data'));
    }

}
