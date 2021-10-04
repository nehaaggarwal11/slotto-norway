@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.game.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.games.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.id') }}
                        </th>
                        <td>
                            {{ $game->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.bg_image_text') }}
                        </th>
                        <td>
                            {{ $game->bg_image_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.bg_image_button_text') }}
                        </th>
                        <td>
                            {{ $game->bg_image_button_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.logo') }}
                        </th>
                        <td>
                            @if($game->logo)
                                <a href="{{ $game->logo->getUrl() }}" target="_blank">
                                    <img src="{{ $game->logo->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.logo_alt_text') }}
                        </th>
                        <td>
                            {{ $game->logo_alt_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.bg_image') }}
                        </th>
                        <td>
                            @if($game->bg_image)
                                <a href="{{ $game->bg_image->getUrl() }}" target="_blank">
                                    <img src="{{ $game->bg_image->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.bg_image_alt_text') }}
                        </th>
                        <td>
                            {{ $game->bg_image_alt_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.bg_image_logo') }}
                        </th>
                        <td>
                            @if($game->bg_image_logo)
                                <a href="{{ $game->bg_image_logo->getUrl() }}" target="_blank">
                                    <img src="{{ $game->bg_image_logo->url }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.bg_image_logo_alt_text') }}
                        </th>
                        <td>
                            {{ $game->bg_image_logo_alt_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.bg_image_button_link') }}
                        </th>
                        <td>
                            {{ $game->bg_image_button_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.name') }}
                        </th>
                        <td>
                            {{ $game->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.rtp_game') }}
                        </th>
                        <td>
                            {{ $game->rtp_game }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.layout') }}
                        </th>
                        <td>
                            {{ $game->layout }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.gevinstlinjer') }}
                        </th>
                        <td>
                            {{ $game->gevinstlinjer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.rtp_game') }}
                        </th>
                        <td>
                            {{ $game->rtp_game }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.maks_mynt_gevinst') }}
                        </th>
                        <td>
                            {!! $game->maks_mynt_gevinst !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.volatilitet_game') }}
                        </th>
                        <td>
                            {{ $game->volatilitet_game }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.min_innsats') }}
                        </th>
                        <td>
                            {{ $game->min_innsats }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.maks_innsats') }}
                        </th>
                        <td>
                            {{ $game->maks_innsats }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.provider') }}
                        </th>
                        <td>
                            {{ $game->provider }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.rtp') }}
                        </th>
                        <td>
                            {{ $game->rtp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.volatilitet') }}
                        </th>
                        <td>
                            {{ $game->volatilitet }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.gpi') }}
                        </th>
                        <td>
                            {{ $game->gpi }}
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.games.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
