<?php

namespace App\Http\Requests;

use App\ContentCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyContentCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('content_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:content_categories,id',
        ];
    }
}
