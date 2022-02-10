<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Player;


class PlayerController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register(RegisterRequest $request)
    {
         $player = Player::create([
             'first_name' => $request->input('first_name'),		
             'last_name' => $request->input('last_name'),		
             'email' => $request->input('email'), 	
             'password' => $request->input('password'),	
             'phone' => $request->input('phone'),		
             'team_id' => $request->input('team_id'), 	
             'is_online' => true	
         ]);

         $player->save();

        info($player);

        return response()->json([
            'result' => 'true',
            'id' => $player->id,
        ]);
    }
    
    public function update(Request $request)
    {
        $player = Player::find($request->input('id'));

        $player->contact_preference = $request->input('contact_preference');		
        $player->available_days = $request->input('available_days');		
        $player->available_times = $request->input('available_times');		
        $player->available_position = ($request->input('available_position'));		
        $player->available_division  = $request->input('available_division');
        
        $player->save();

        return response()->json([
            'result' => $player,
        ]);
    }
    public function search(Request $request)
    {
        $day = '["' . $request->input('day') . '"]';
        $position = '["' . $request->input('position') . '"]';
        $division = $request->input('division');
        $time = $request->input('time');

        $players = Player::where('available_position', $position)
            ->where('available_days', $day)
            ->where('available_division', $division)
            ->where('available_times', $time)
            ->get();
        

        return response()->json([
            'result' => $players,
        ]);
    }

    public function get(Request $request, $id)
    {
        $player = Player::find($id);
        return response()->json([
            'result' => $player,
        ]);
    }
}
