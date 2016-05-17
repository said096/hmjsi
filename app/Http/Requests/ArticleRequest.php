<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request
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
            $rules['image'] = 'required|image|mimes:jpeg,png|max:2048';
        } else {
            $rules['image'] = 'image|mimes:jpeg,png|max:2048';
        }
        $rules['title'] = 'required|unique:articles,title|min:10';
        $rules['description'] = 'required|min:20';
        return $rules;
    }
}
