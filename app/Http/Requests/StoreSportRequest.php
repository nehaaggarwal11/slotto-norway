<?php

namespace App\Http\Requests;

use App\Sport;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreSportRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('sports_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required'],
            'overview' => [],
            'detail' => [],
            'link' => [],
            'small_description' => [],
            'rating' => [],
            'description' => [],
            'bonus' => [],
            'bonus_text' => [],
            'wagering_requirements' => [],
            'wagering_requirements_text' => [],
            'popular_casino_hover_info' => [],
            'banner_info' => [],
            'logo_image_alt_text' => [],
            'transparent_logo_image_alt_text' => [],
            'bg_image_alt_text' => [],
        ];
    }
}
