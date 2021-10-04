<?php

namespace App\Http\Controllers\Frontend;

use App\Game;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    use MediaUploadingTrait;
    
    public function index(Request $request, $slug)
    {
        $games = Game::where('slug', $slug)->firstOrFail();
        return view('frontend.game', compact('games'));
    }
}
