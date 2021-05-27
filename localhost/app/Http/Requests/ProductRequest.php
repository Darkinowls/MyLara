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

            'id' => ['unique:products'],
            'slug' => ['unique:products', 'required', 'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/i'],
            'price' => ['required', 'integer', 'gt:0'],
            'title' => ['required', 'string', 'unique:products'],
            'description' => ['required', 'string'],
            'photo' => ['required', 'string'],
            'platform_id' => ['integer', 'exists:platforms,id'],
            'genres' => ['array', 'exists:genres,id',
                Rule::unique('genre_product', 'genre_id')->where(function ($query) {
                    return $query->where('product_id', Product::all()->count() + 1);
                })
            ],
            'date' => ['required', 'date_format:d.m.Y' /*,'before_or_equal:today'*/],
        ];
    }



}




