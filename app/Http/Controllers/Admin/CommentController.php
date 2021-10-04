<?php

namespace App\Http\Controllers\Admin;

use App\News;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCommentRequest;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('comment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $comments = News::withCount('comments')->get();
        return view('admin.comments.index',compact('comments'));
    }

    public function show(Request $request, $id)
    {
        $comments = Comment::select()->where('news_id',$request->id)->get();
        return view('admin.comments.show', compact('comments'));
    }

    public function destroy(Comment $comment)
    {
        abort_if(Gate::denies('comment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comment->delete();

        return back();
    }

    public function massDestroy(MassDestroyCommentRequest $request)
    {
        Comment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

