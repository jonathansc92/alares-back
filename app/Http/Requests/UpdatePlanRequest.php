<?php

namespace App\Http\Requests;

use App\Enums\HasEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
use Illuminate\Validation\Rules\Enum;

class UpdatePlanRequest extends FormRequest
{
    public function rules()
    {
        return [
            'price' => ['numeric', 'min:1', 'sometimes'],
            'wifi' => [new Enum(HasEnum::class)],
            'games' => [new Enum(HasEnum::class)],
            'movies' => [new Enum(HasEnum::class)],
            'speed' => ['numeric', 'min:1', 'sometimes'],
            'best' => [new Enum(HasEnum::class)],
            'giga' => [new Enum(HasEnum::class)],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()], Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}
