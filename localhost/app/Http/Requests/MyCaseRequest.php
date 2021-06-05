<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MyCaseRequest extends FormRequest
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
            'id' => ['gt:0', 'integer',Rule::unique('cases')->ignore($this->case)],
            'title' => ['required' , Rule::unique('cases')->ignore($this->case), 'string' ],
            'price' => ['required', 'integer', 'gt:0'],
        ];
    }
}
