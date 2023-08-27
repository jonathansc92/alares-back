<?php

namespace App\Http\Requests;

use App\Enums\OrderStatusEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
use Illuminate\Validation\Rules\Enum;

class StoreOrderRequest extends FormRequest
{
    public function rules()
    {
        return [
            'plan_id' => ['integer', 'required', 'exists:plans,id'],
            'name' => ['max:100', 'required'],
            'email' => ['max:100', 'email', 'required'],
            'phone' => ['max:20', 'required'],
            'status' => [new Enum(OrderStatusEnum::class)],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()], Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}
