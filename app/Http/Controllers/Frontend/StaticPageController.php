<?php

namespace App\Http\Controllers\Frontend;

use App\StaticPage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function aboutUs()
    {
        $about = StaticPage::getAllFields('about-us');

        return view('frontend.about-us', compact('about'));
    }

    public function privacyPolicy()
    {
        $privacy = StaticPage::getAllFields('privacy');

        return view('frontend.privacy', compact('privacy'));
    }

    public function responsibleGaming()
    {
        $responsible = StaticPage::getAllFields('responsible-gaming');

        return view('frontend.responsible-gaming', compact('responsible'));
    }

    public function terms()
    {
        $terms = StaticPage::getAllFields('terms');

        return view('frontend.terms', compact('terms'));
    }

    public function generalInformation()
    {
        $general = StaticPage::getAllFields('general');

        return view('frontend.general', compact('general'));
    }

    public function cookies()
    {
        $cookies = StaticPage::getAllFields('cookies');

        return view('frontend.cookies', compact('cookies'));
    }
}
