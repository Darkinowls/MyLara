<?php

namespace App\Http\Requests;

use App\Models\Account;
use App\Models\Platform;
use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AccountRequest extends FormRequest
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

            'id' =>['unique:accounts'],
            'name' => ['required', 'string'],
            'balance' => ['nullable', 'gte:0', 'integer'],
            'platform_password' => ['required', ],
            'email' => ['required','email',
                Rule::unique('accounts', 'email')->where(function ($query) {
                    return $query->where('platform_id', $this->platform_id);
                })],
            'email_password' => ['required', ],
            'platform_id' => ['exists:platforms,id'],
            'product_id' => ['integer', 'exists:products,id'],

        ];
    }
}
