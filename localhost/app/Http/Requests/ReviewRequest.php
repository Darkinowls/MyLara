<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ReviewRequest extends FormRequest
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
            'id' => ['gt:0', 'integer',Rule::unique('reviews')->ignore($this->review)],
            'userId' => [ 'required' ,'gt:0', 'integer'],
            'productId' => [ 'required' ,'gt:0', 'integer'],
            'reviewId' => ['gt:0', 'integer'],
            'text' => ['required', 'string'],
        ];
    }
}
