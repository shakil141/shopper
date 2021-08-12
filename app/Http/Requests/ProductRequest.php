<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_type' => 'required',
            'product_store' => 'required',
            'product_special_search' => 'required',
            'product_name' => 'required',
            'product_slug' => 'required',
            'product_category' => 'required',
            'product_sub_category' => 'required',
            'product_brand' => 'required',
            'product_purchase_price' => 'required',
            'product_sale_price' => 'required',
            'product_unit' => 'required',
            'product_tag' => 'required',
            'product_status' => 'required',
            'product_description' => 'required',
            'seo_friendly_title' => 'required',
            'seo_friendly_description' => 'required',

        ];
    }
}
