<?php

namespace App\Http\Controllers\Frontend;

use App\FaqQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\StaticPage;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $data = StaticPage::getAllFields('faq');
        $faq_questions = FaqQuestion::select()->get();
        return view('frontend.faq', compact('data','faq_questions'));
    }
}
