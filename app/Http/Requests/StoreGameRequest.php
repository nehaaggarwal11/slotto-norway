<?php

namespace App\Http\Requests;

use App\Game;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreGameRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('game_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'bg_image_text' => [],
            'bg_image_button_text' => [],
            'bg_image_button_link' => [],
            'logo_alt_text' => [],
            'bg_image_alt_text' => [],
            'bg_image_logo_alt_text' => [],
            'game_link' => [],
            'name' => ['required'],
            'rtp_game' => [],
            'layout' => [],
            'gevinstlinjer' => [],
            'maks_mynt_gevinst' => [],
            'volatilitet_game' => [],
            'min_innsats' => [],
            'maks_innsats' => [],
            'description' => [],
            'provider' => [],
            'rtp' => [],
            'volatilitet' => [],
        ];
    }
}
