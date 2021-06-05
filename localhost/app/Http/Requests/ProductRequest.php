<?php

namespace App\Http\Requests;


use App\Models\Product;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class ProductRequest extends FormRequest
{

    protected function createDefaultValidator(ValidationFactory $factory)
    {
        $this->slug = Str::slug($this->title, '-');
        return parent::createDefaultValidator($factory);
    }

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

            'id' => ['gt:0', 'integer',Rule::unique('products')->ignore($this->product)],

            'slug' => ['required', 'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/i',
                Rule::unique('products')->ignore($this->product)],

            'price' => ['required', 'integer', 'gt:0'],
            'title' => ['required', 'string', Rule::unique('products')->ignore($this->product)],

            'description' => ['required', 'string'],
            'photo' => ['required', 'string'],
            'platformId' => ['integer', 'exists:platforms,id'],
            'caseId' => ['integer', 'exists:cases,id'],

            'genres.*' => 'distinct',
            'genres' => ['array', 'exists:genres,id',
                Rule::unique('genre_product', 'genreId')->where(function ($query) {
                    $query->where('productId', $this->product);
                })
            ],
            'date' => ['required', 'date_format:d.m.Y' /*,'before_or_equal:today'*/],
        ];
    }


}




