<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'brand_name' => 'required|min:3|max:30',
            'contact_person' => 'required|min:3|max:30',
            'contact_no' => 'required|max:13',
            'address' => 'required',
            'status' => 'required',
        ];
    }
}
