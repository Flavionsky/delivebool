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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'input_name'=>'required|string',
            'input_price'=>'required|integer',
            'input_description'=>'nullable|min: 3',
            'input_visibility'=>'required|boolean',
            'kind_of_food'=>'string|min:3',
        ];
    }
}
