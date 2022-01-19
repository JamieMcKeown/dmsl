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

        // verify if this is an existing user
        // Retrieve the user by the attributes, or create it if it doesn't exist...
        // $user = User::create([
        //     'first_name' => 'John',
        //     'last_name' => 'Johnson',
        //     'email' => 'John@john.com',
        //     'password' => 'test',
        //     'team_id' => 1
        // ]);
        return response()->json([
            'data' => 'banana',
        ]);
    }

    public function register(Request $request)
    {
        
    }
    
}
