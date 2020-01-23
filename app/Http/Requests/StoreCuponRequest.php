<?php

namespace App\Http\Requests;

use App\Cupon;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreCuponRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cupon_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
