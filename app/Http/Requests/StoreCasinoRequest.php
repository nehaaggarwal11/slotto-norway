<?php

namespace App\Http\Requests;

use App\Casino;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreCasinoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('casino_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required'],
            'overview' => [],
            'detail' => [],
            'link' => [],
            'home_page_slider_title' => [],
            'small_description' => [],
            'rating' => [],
            'description' => [],
            'info' => [],
            'spins' => [],
            'spins_text' => [],
            'bonus' => [],
            'bonus_text' => [],
            'wagering_requirements' => [],
            'wagering_requirements_text' => [],
            'popular_casino_hover_info' => [],
            'banner_info' => [],
            'featured_image_alt_text' => [],
            'logo_image_alt_text' => [],
            'transparent_logo_image_alt_text' => [],
            'bg_image_alt_text' => [],
        ];
    }
}
