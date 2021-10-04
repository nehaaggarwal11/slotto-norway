<?php

namespace App\Http\Controllers\Frontend;

use App\Game;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\StaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AllGameController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
      if($type = $request->input('rtp') || $type = $request->input('provider') || $type = $request->input('volatilitet') ||$type = $request->input('gpi') || $game_query = $request->input('game_category') || $type = $request->input('search')) {
              abort(404);
          }

          $data = StaticPage::getAllFields('all-game');

          $games_ids = implode(',', @$data->games ?? []);
          $games   = Game::select('id','name','slug', 'rtp','provider','volatilitet', 'gpi', 'logo_alt_text');

          $games_data = Game::select('rtp','provider','volatilitet','gpi')
          ->orderByRaw("FIELD(rtp, 'Low', 'Medium', 'High')")
          ->orderByRaw("FIELD(volatilitet, 'Low', 'Medium', 'High')")
          ->orderByRaw("FIELD(gpi, 'Low', 'Medium', 'High')")->get();

          $games = $games_ids ? $games->whereRaw("`id` IN ($games_ids)")
          ->orderByRaw("FIELD(id, $games_ids)")
          ->get(): null;

          return view('frontend.all-games', compact('data', 'games_data','games'));
    }

    public function ajaxFilter(Request $request){
      if($request->ajax()){
        $games =  Game::select()->where('name', 'LIKE','%'.$request->search."%")->get();
        return view('frontend.search-games-ajax', compact('games'));
      }
      else{
        if($request->method() == 'GET') {
           abort(404);
       }
           $data = StaticPage::getAllFields('all-game');

           $games_ids = implode(',', @$data->games ?? []);
           $games   = Game::select('id','name','slug', 'rtp','provider','volatilitet', 'gpi', 'logo_alt_text');

           $games_data = Game::select('rtp','provider','volatilitet','gpi')
           ->orderByRaw("FIELD(rtp, 'Low', 'Medium', 'High')")
           ->orderByRaw("FIELD(volatilitet, 'Low', 'Medium', 'High')")
           ->orderByRaw("FIELD(gpi, 'Low', 'Medium', 'High')")->get();

           if($type = $request->input('rtp')){
               $games = $games->where('rtp', $type);
           }
           if($type = $request->input('provider'))
           {
               $games = $games->where('provider', $type);
           }
           if($type = $request->input('volatilitet'))
           {
               $games = $games->where('volatilitet', $type);
           }
           if($type = $request->input('gpi'))
           {
               $games = $games->where('gpi', $type);
           }

           if($type = $request->input('search'))
           {
               $games = $games->where('name', $type);
           }
           $games = $games_ids ? $games->whereRaw("`id` IN ($games_ids)")
           ->orderByRaw("FIELD(id, $games_ids)")
           ->get(): null;

           return view('frontend.all-games', compact('data', 'games_data','games'));
     }
}
}
