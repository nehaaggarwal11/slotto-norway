<?php

namespace App\Http\Controllers\Frontend;

use App\Casino;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\StaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class NewCasinoController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $data = StaticPage::getAllFields('new-casino');

        $casinos_ids = implode(',', @$data->casinos ?? []);
        $casinos = $casinos_ids ? Casino::select('id','name','slug','spins', 'spins_text','bonus',
                'bonus_text','wagering_requirements', 'wagering_requirements_text','rating',
                'small_description','info', 'link','seo_title','seo_keyword','seo_description','featured_image_alt_text'
            )->whereRaw("`id` IN ($casinos_ids)")
            ->orderByRaw("FIELD(id, $casinos_ids)")
            ->get(): null;

        $top3_casinos = [
            [
                'image' => StaticPage::getMediaField('new-casino', 'top3_first_image'),
                'content' => "<li>".str_replace(PHP_EOL, "</li><li>", $data->top3_first_content)."</li>",
                'link' => $data->top3_first_link,
                'image_alt_text' => $data->top3_first_image_alt_text,
            ],
            [
                'image' => StaticPage::getMediaField('new-casino', 'top3_second_image'),
                'content' => "<li>".str_replace(PHP_EOL, "</li><li>", $data->top3_second_content)."</li>",
                'link' => $data->top3_second_link,
                'image_alt_text' => $data->top3_second_image_alt_text,
            ],
            [
                'image' => StaticPage::getMediaField('new-casino', 'top3_third_image'),
                'content' => "<li>".str_replace(PHP_EOL, "</li><li>", $data->top3_third_content)."</li>",
                'link' => $data->top3_third_link,
                'image_alt_text' => $data->top3_third_image_alt_text,
            ],
        ];
        $top3_casinos = json_decode(json_encode($top3_casinos));

        return view('frontend.new-casinos', compact('data', 'casinos', 'top3_casinos'));
    }

}
