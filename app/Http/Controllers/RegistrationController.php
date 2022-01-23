<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Player;


class RegistrationController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register(Request $request)
    {

         $player = Player::create([
             'first_name' => $request->input('first_name'),		
             'last_name' => $request->input('last_name'),		
             'email' => $request->input('email'), 	
             'password' => $request->input('password'),	
             'phone' => $request->input('phone'),		
             'contact_preference' => $request->input('contact_preference'),	
             'available_days' => $request->input('available_days'),		
             'available_times' => $request->input('available_times'),	
             'available_division' => $request->input('available_division'),		
             'available_position' => $request->input('available_position'),	
             'team_id' => $request->input('team_id'), 	
             'is_online' => true	
         ]);

         $result = true;

        return response()->json([
            'result' => $result,
        ]);
    }
    
}
