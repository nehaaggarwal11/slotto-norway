<?php

namespace App\Http\Requests;

use App\ContentCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreContentCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('content_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required'],
        ];
    }
}
