<?php

namespace App\Http\Requests;

use App\ContentTag;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateContentTagRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('content_tag_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
