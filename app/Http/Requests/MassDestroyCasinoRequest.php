<?php

namespace App\Http\Requests;

use App\Casino;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCasinoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('casino_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:casinos,id',
        ];
    }
}
