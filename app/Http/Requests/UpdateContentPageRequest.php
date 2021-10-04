<?php

namespace App\Http\Requests;

use App\ContentPage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateContentPageRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('content_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title'        => [
                'required'],
            'categories.*' => [
                'integer'],
            'categories'   => [
                'array'],
            'tags.*'       => [
                'integer'],
            'tags'         => [
                'array'],
        ];
    }
}
