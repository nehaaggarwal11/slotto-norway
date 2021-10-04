<?php

namespace App\Http\Requests;

use App\News;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreNewsRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('news_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'category' => ['required'],
            'bg_image_button_text' => [],
            'logo_img_alt_text' => [],
            'name' => [],
            'small_description' => [],
            'bg_image_alt_text' => [],
            'description' => [],
        ];
    }
}
