<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function login(Request $request){
        $date = $request->get("init_data_unsafe");

        if(!$data){
            abort(400);
        }

        $userData = $data['user'];

        $user = \App\Models\User::query()->where("telegram_id", $userData['id'])->first();

        if($user){
            $user->update([
                "telegram_id" => $userData['id'] ?? $user->id,
                "name" => $userData['name'] ?? null,
                "last_name" => $userData['last_name'] ?? null,
                "nick_name" => $userData['username'] ?? null,
                "telegram_premium" => $userData['is_premium'] ?? false,
                "photo_url" => $userData['photo_url'] ?? null,
            ]);
        } else {
            $user = \App\Models\User::query()->create([
                "telegram_id" => $userData['id'] ?? null,
                "name" => $userData['name'] ?? null,
                "last_name" => $userData['last_name'] ?? null,
                "nick_name" => $userData['username'] ?? null,
                "telegram_premium" => $userData['is_premium'] ?? false,
                "photo_url" => $userData['photo_url'] ?? null,
            ]);

        }

        if(!$user){
            return response()->json(["message" => "Failed", "status" => 400], 400);
        }


        Auth::login($user);

        return response()->json(["message" => "Success", 'user' => \auth()->user(), 'status' => 200], 200);
    }
}
