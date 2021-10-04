<?php

namespace App\Http\Controllers\Admin;

use App\Game;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyGameRequest;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use Illuminate\Http\Request;
use Gate;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class GameController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('game_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $games = Game::all();

        return view('admin.games.index', compact('games'));
    }

    public function create()
    {
        abort_if(Gate::denies('game_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.games.create');
    }

    public function store(StoreGameRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $game = Game::create($data);

        if ($request->input('logo', false)) {
            $game->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        }

        if ($request->input('bg_image', false)) {
            $game->addMedia(storage_path('tmp/uploads/' . $request->input('bg_image')))->toMediaCollection('bg_image');
        }

        if ($request->input('bg_image_logo', false)) {
            $game->addMedia(storage_path('tmp/uploads/' . $request->input('bg_image_logo')))->toMediaCollection('bg_image_logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $game->id]);
        }

        return redirect()->route('admin.games.index');
        
    }

    public function show(Game $game)
    {
        abort_if(Gate::denies('game_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.games.show', compact('game'));
    }

    public function edit(Game $game)
    {
        abort_if(Gate::denies('game_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.games.edit', compact('game'));
    }

    public function update(UpdateGameRequest $request, Game $game)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $game->update($data);

        if ($request->input('logo', false)) {
            if (!$game->logo || $request->input('logo') !== $game->logo->file_name) {
                $game->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
            }
        } elseif ($game->logo) {
            $game->logo->delete();
        }

        if ($request->input('bg_image', false)) {
            if (!$game->bg_image || $request->input('bg_image') !== $game->bg_image->file_name) {
                $game->addMedia(storage_path('tmp/uploads/' . $request->input('bg_image')))->toMediaCollection('bg_image');
            }
        } elseif ($game->bg_image) {
            $game->bg_image->delete();
        }

        if ($request->input('bg_image_logo', false)) {
            if (!$game->bg_image_logo || $request->input('bg_image_logo') !== $game->bg_image_logo->file_name) {
                $game->addMedia(storage_path('tmp/uploads/' . $request->input('bg_image_logo')))->toMediaCollection('bg_image_logo');
            }
        } elseif ($game->bg_image_logo) {
            $game->bg_image_logo->delete();
        }

        return redirect()->back();
    }

    public function destroy(Game $game)
    {
        abort_if(Gate::denies('game_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $game->delete();

        return back();
    }

    public function massDestroy(MassDestroyGameRequest $request)
    {
        Game::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('game_create') && Gate::denies('game_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Game();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media', 'public');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
