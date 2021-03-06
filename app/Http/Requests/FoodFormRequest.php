<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodFormRequest extends FormRequest
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
            'name'=>'required|string',
            'price'=>'required|numeric',
            'image' => 'mimetypes:image/jpeg,image/png',
            'description'=>'nullable|min: 3',
            'visibility'=>'required|boolean',
            'kind_of_food'=>'string|min:3',
        ];
    }
}
