<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class UpdateOrderRequest extends FormRequest
{
    public function rules()
    {
        return [
            'plan_id' => ['integer', 'sometimes', 'exists:plans,id'],
            'name' => ['max:100', 'sometimes'],
            'email' => ['max:100', 'email', 'sometimes'],
            'phone' => ['max:20', 'sometimes'],
            'status' => ['boolean'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()], Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}
