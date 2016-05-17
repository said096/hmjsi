<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MemberRequest extends Request
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
            $rules['photo'] = 'required|image|mimes:jpeg|max:1024';
        } else {
            $rules['photo'] = 'image|mimes:jpeg|max:1024';
        }
        $rules['NRK'] = 'required|unique:members,NRK';
        $rules['name'] = 'required|min:4';
        $rules['address'] = 'min:10';
        $rules['generation'] = 'required|numeric|min:4|max:4';
        $rules['phone'] = 'min:12|max:12';
        return $rules;
    }
}
