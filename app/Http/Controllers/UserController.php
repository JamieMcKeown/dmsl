<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(Request $request) 
    {
       
        //  verify if this is an existing user
        //  Retrieve the user by the attributes, or create it if it doesn't exist...
           $user = User::create([
            'email' => $request->input->email, 	
            'password' => $request->input->password,
           ]);
        return response()->json([
            'data' => 'banana',
        ]);
    }

    public function register(Request $request)
    {
        

        
       

        
        
         $user = User::create([
             'first_name' => $request->input->first_name,		
             'last_name' => $request->input->last_name,		
             'email' => $request->input->email, 	
             'password' => $request->input->password,		
             'phone' => $request->input->phone,		
             'contact_preference' => $request->input->contact_preference,	
             'available_days' => $request->input->available_days,		
             'available_times' => $request->input->available_times,		
             'available_division' => $request->input->available_division,		
             'available_position' => $request->input->available_position,	
             'team_id' => $request->input->team_id, 	
             'is_online' => true	
         ]);

        return response()->json([
            'data' => $request->input('first_name'),
        ]);
    }
    
}
