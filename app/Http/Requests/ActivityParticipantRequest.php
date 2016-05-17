<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ActivityParticipantRequest extends Request
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
            'activity_id' => 'required|exists:activities,id',
            'name' => 'required|min:4',
            'email' => 'required|email',
            'address' => 'required|min:10',
            'place_birth' => 'required|min:5',
            'date_birth' => 'required|before:-17 years',
            'gender' => 'required|in:pria,wanita',
            'campus_name' => 'required|min:10',
            'phone' => 'required|min:12|max:12',
        ];
    }
}
