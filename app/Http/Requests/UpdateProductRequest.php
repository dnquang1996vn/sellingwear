<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name'     => 'required|max:255',
            'label'     => 'required|max:255',
            'price'     => 'required',
            'description'     => 'required|max:255',
            'information'    => 'required',
            'feature_image_input'   => 'image|mimes:jpeg,jpg'
        ];
    }
}
