<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Player;

class LoginController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(Request $request) 
    {
        
       $pw = $request->input('password');
       $email = $request->input('email');
       
       $player = Player::where('email', $email)->get();
       info($player[0]->password);
       
    //    if ($player->password === $pw) {
    //     return response()->json([
    //         'data' => $request,
    //     ]);
    //    } else {
    //     return response()->json([
    //         'data' => 'fail',
    //     ]);
    //    }

        
    }

}
