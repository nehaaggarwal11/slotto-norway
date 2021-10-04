<?php

namespace App\Http\Controllers\Frontend;

use App\News;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\StaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AllNewsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
      if( $request->ajax() ){
          $news =  News::select()->where('name', 'LIKE','%'.$request->search."%")->orderBy('id', 'desc')->get();
          return view('frontend.search-news-ajax', compact('news'));
      }
      else{
        $data = StaticPage::getAllFields('all-news');
        $data_news = StaticPage::getAllFields('news');

        $news = News::select()
        ->orderBy('id', 'desc')->get();
        $news_category = News::select('category')->get();
        $news_other = News::orderBy('id', 'desc')->get();

        if($type = $request->input('category')){
            $news = $news->where('category', $type);
        }

        return view('frontend.all-news', compact('data','data_news', 'news','news_category', 'news_other'));
      }

    }
}
