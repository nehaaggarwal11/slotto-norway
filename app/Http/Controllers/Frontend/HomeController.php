<?php

namespace App\Http\Controllers\Frontend;

use App\Casino;
use App\Sport;
use App\FaqQuestion;
use App\FaqQuestions;
use App\Game;
use App\News;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\StaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Notifications\SubscriberEmail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    use MediaUploadingTrait;

    /* public function index()
    {
        $data = StaticPage::getAllFields('landing-page');
        return view('frontend.index', compact('data'));
    } */

    public function index()
    {
      $current_country = sl_get_current_country();

           $slider_casinos_ids = implode(',', @json_decode(StaticPage::getField('home', 'slider_casinos'), true) ?? []);
           $slider_casinos = Casino::select('id', 'home_page_slider_title','info','link', 'transparent_logo_image_alt_text')
               ->whereRaw("`id` IN ($slider_casinos_ids)")
               ->orderByRaw("FIELD(id, $slider_casinos_ids)");

           if ($current_country) {
               $slider_casinos = $slider_casinos->countries([$current_country]);
           }

           $slider_casinos = $slider_casinos_ids ? $slider_casinos->get() : null;

        $casinos_ids = implode(',', @json_decode(StaticPage::getField('home', 'casinos'), true) ?? []);
        $casinos = $casinos_ids ? Casino::select('id','name','slug','spins', 'spins_text','bonus',
                'bonus_text', 'wagering_requirements', 'wagering_requirements_text','rating',
                'small_description', 'info','link','seo_title','seo_keyword','seo_description','featured_image_alt_text'
            )->whereRaw("`id` IN ($casinos_ids)")
            ->orderByRaw("FIELD(id, $casinos_ids)")
            ->get(): null;

        $sports_ids = implode(',', @json_decode(StaticPage::getField('home', 'sports'), true) ?? []);
        $sports = $sports_ids ? Sport::select('id','name','slug','bonus',
                'bonus_text', 'wagering_requirements', 'wagering_requirements_text','rating',
                'small_description','info', 'link','seo_title','seo_keyword','seo_description','featured_image_alt_text'
            )->whereRaw("`id` IN ($sports_ids)")
            ->orderByRaw("FIELD(id, $sports_ids)")
            ->get(): null;

        $new_casino_data = StaticPage::getAllFields('new-casino');

        $top3_casinos = [
            [
                'image' => StaticPage::getMediaField('new-casino', 'top3_first_image'),
                'content' => "<li>".str_replace(PHP_EOL, "</li><li>", $new_casino_data->top3_first_content)."</li>",
                'link' => $new_casino_data->top3_first_link,
                'image_alt_text' => $new_casino_data->top3_first_image_alt_text,
            ],
            [
                'image' => StaticPage::getMediaField('new-casino', 'top3_second_image'),
                'content' => "<li>".str_replace(PHP_EOL, "</li><li>", $new_casino_data->top3_second_content)."</li>",
                'link' => $new_casino_data->top3_second_link,
                'image_alt_text' => $new_casino_data->top3_second_image_alt_text,
            ],
            [
                'image' => StaticPage::getMediaField('new-casino', 'top3_third_image'),
                'content' => "<li>".str_replace(PHP_EOL, "</li><li>", $new_casino_data->top3_third_content)."</li>",
                'link' => $new_casino_data->top3_third_link,
                'image_alt_text' => $new_casino_data->top3_third_image_alt_text,
            ],
        ];
        $top3_casinos = json_decode(json_encode($top3_casinos));


        $games_ids = implode(',', @json_decode(StaticPage::getField('home', 'games'), true) ?? []);
        $games = $games_ids ? Game::select('id','name','slug','logo_alt_text')
            ->whereRaw("`id` IN ($games_ids)")
            ->orderByRaw("FIELD(id, $games_ids)")
            ->get(): null;

        $blog_ids = implode(',', @json_decode(StaticPage::getField('home', 'blog'), true) ?? []);
        $blog = $blog_ids ? News::select('id','name','slug', 'small_description', 'logo_img_alt_text')
            ->whereRaw("`id` IN ($blog_ids)")
            ->orderByRaw("FIELD(id, $blog_ids)")
            ->get(): null;

        $faq_questions_ids = implode(',', @json_decode(StaticPage::getField('home', 'faqs'), true) ?? []);
        $faq_questions = $faq_questions_ids ? FaqQuestion::select('id','question', 'answer')
            ->whereRaw("`id` IN ($faq_questions_ids)")
            ->orderByRaw("FIELD(id, $faq_questions_ids)")
            ->get(): null;

        $home_content = StaticPage::getAllFields('home');
        $newsletter = StaticPage::getAllFields('newsletter');

        return view('frontend.index', compact('slider_casinos', 'casinos', 'sports', 'top3_casinos', 'games', 'blog', 'faq_questions', 'home_content', 'newsletter'));
    }


}
