<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class UpdatePlanRequest extends FormRequest
{
    public function rules()
    {
        return [
            'price' => ['numeric', 'min:1', 'sometimes'],
            'wifi' => ['boolean'],
            'games' => ['boolean'],
            'movies' => ['boolean'],
            'speed' => ['numeric', 'min:1', 'sometimes'],
            'best' => ['boolean'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()], Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}
