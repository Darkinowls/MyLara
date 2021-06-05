<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OrderRequest extends FormRequest
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
            'id' => ['gt:0', 'integer', Rule::unique('orders')->ignore($this->order)],
            'userId' => ['required', 'gt:0', 'integer'],

            'keyId' => ['gt:0', 'integer', 'exists:keys,id',
                Rule::unique('orders')->ignore($this->order), 'required_without:accountId' ],

            'accountId' => ['gt:0', 'integer' , 'exists:accounts,id',
                Rule::unique('orders')->ignore($this->order), 'required_without:keyId'],

        ];
    }
}
