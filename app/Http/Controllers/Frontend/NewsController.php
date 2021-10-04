<?php

namespace App\Http\Controllers\Frontend;

use App\News;
use App\Comment;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NewsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request, $slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $date = Carbon::now();
        $comments = Comment::select()->where('news_id', $request->id)->get();
        return view('frontend.news', compact('news','comments','date'));
    }

    public function comment(Request $request)
    {
        $comment = Comment::create($request->all());
        return back()->with('success', 'Comment Submit successfully');
    }
}
