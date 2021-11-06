<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class UserRegisterRequest extends FormRequest
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
            'username'      => 'required|string|max:20|unique:users',
            'name'          => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'phone'         => 'required',
            'password'      => ['required', 'confirmed', Rules\Password::defaults()],
            'district'      => 'required|exists:districts,id',
            'village'       => 'required|exists:villages,id',
            'position'      => 'required|exists:positions,id',
        ];
    }
}
