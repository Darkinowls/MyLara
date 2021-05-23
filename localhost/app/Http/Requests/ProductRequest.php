<?php

namespace App\Http\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //////ЧИТАЙ ДОКИ
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'price' => ['required' , 'integer'],
            'title' => ['required' , 'string' ],
            'description' => ['required' , 'string' ],
            'photo' => ['required', 'string'],
            'platform_id' => ['required', 'integer' ],
            'date' => ['date_format:d.m.Y' /*,'before_or_equal:today'*/],
        ];
    }

}




