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

            'id' => ['gt:0', 'integer', Rule::unique('accounts')->ignore($this->account)],

            'balance' => ['gte:0', 'integer'],
            'platform_password' => ['required', 'min:6'],
            'email' => ['required', 'email',
                Rule::unique('accounts', 'email')->where(function ($query) {
                    return $query->where('platformId', $this->platformId);
                })->ignore($this->account)],
            'email_password' => ['required', 'min:6'],
            'platformId' => ['required', 'exists:platforms,id', 'integer'],
            'productId' => ['integer', 'exists:products,id'],

        ];
    }
}
