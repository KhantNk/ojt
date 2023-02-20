<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'  =>  'required',
            'phone01' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'phone02' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' =>  'required|email',
            'gender'  =>  'required|in:m,f,o',
            'address'  =>  'required',
            'join_date'  =>  'required|date',
            'is_left'  =>  'required|in:1,0',
        ];
    }
}
