<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AboutRequest extends Request
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
        if ($this->method() == 'POST') {
            $rules['logo'] = 'required|image|mimes:jpeg,png|max:1024';
        } else {
            $rules['logo'] = 'image|mimes:jpeg,png|max:1024';
        }
        $rules['vision'] = 'required|min:10';
        $rules['mission'] = 'required|min:10';
        $rules['history'] = 'required|min:10';
        $rules['phone'] = 'required|min:12|max:12';
        $rules['email'] = 'required|email';
        $rules['address'] = 'required|min:10';
        $rules['facebook'] = 'required';
        $rules['twitter'] = 'required';
        $rules['instagram'] = 'required';
        $rules['latitude'] = 'required';
        $rules['longitude'] = 'required';
        return $rules;
    }
}
