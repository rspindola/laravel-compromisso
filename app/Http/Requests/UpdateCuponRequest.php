<?php

namespace App\Http\Requests;

use App\Cupon;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateCuponRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cupon_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
            'discount' => [
                'required',
                'integer',
            ],
            'validity' => [
                'required',
                'date',
            ],
        ];
    }
}
