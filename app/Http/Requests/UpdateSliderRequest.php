<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSliderRequest extends FormRequest
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
            "image_file" => "mimes:jpeg,jpg,png",
            "first_text" => "required_with:first_text_color",
            "first_text_color" => "required_with:first_text",
            "second_text" => "required_with:second_text_color",
            "second_text_color" => "required_with:second_text",
            "button_text" => "required_with:button_link",
            "button_link" => "required_with:button_text",
        ];
    }
}
