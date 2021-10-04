<?php

namespace App\Http\Controllers\Frontend;

use App\Casino;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\StaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CasinoBonusController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
            
        $data = StaticPage::getAllFields('casino-bonus');

        $casinos_ids = implode(',', @$data->casinos ?? []);
        $casinos = $casinos_ids ? Casino::select('id','name','slug','spins', 'spins_text','bonus',
                'bonus_text','wagering_requirements', 'wagering_requirements_text','rating',
                'small_description','info', 'link','seo_title','seo_keyword','seo_description','featured_image_alt_text'
            )->whereRaw("`id` IN ($casinos_ids)")
            ->orderByRaw("FIELD(id, $casinos_ids)")
            ->get(): null;


        $tmc_casinos_ids = implode(',', @$data->tmc_casinos ?? []);
        $tmc_casinos = $tmc_casinos_ids ? Casino::select('id','link','name','slug','transparent_logo_image_alt_text')
            ->whereRaw("`id` IN ($tmc_casinos_ids)")
            ->orderByRaw("FIELD(id, $tmc_casinos_ids)")
            ->get(): null;

        return view('frontend.casino-bonus', compact('casinos','tmc_casinos', 'data'));
    }

}
