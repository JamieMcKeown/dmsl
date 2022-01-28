<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'max:191',		
            'last_name' => 'max:191',
            'email' => 'required|email|unique:players,email|min:3',
            'password' => 'required',		
            'phone' => 'integer',		
            'contact_preference' => 'max:191',	
            'available_days' => 'max:191',		
            'available_times' => 'max:191',	
            'available_division' => 'max:191',		
            'available_position' => 'max:191',	
            'team_id' => 'integer| max:191',
            'is_online' => 'boolean', 	
            
        ];
    }


    public function failedValidation(Validator $validator)
    {
    throw new HttpResponseException(response()->json([
        'success'   => false,
        'message'   => 'Validation errors',
        'data'      => $validator->errors()
    ]));
    }
}
