<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class KeyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => ['gt:0', 'integer',Rule::unique('keys')->ignore($this->key)],
            'code' => ['required' , Rule::unique('keys')->ignore($this->key), 'string' , 'min:8'],
            'productId' => ['required' , 'integer', 'gt:0'],
        ];
    }
}
