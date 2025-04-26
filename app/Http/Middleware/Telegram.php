<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Telegram
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $initData = $request->input("init_data");
        $initDataUnsafe = $request->input("init_data_unsafe");

        if(!$initData) {
            abort(403);
        }

        $validate = $this->validateInitData($initData);
        // if (!validate){
        //     abort(401);
        // }

        $userData = $this->parseUserData($initData);
        $request->attributes->add(["telegram_user" => $initDataUnsafe]);

        return $next($request);
    }

    public function validateInitData(string $initData){
        parse_str($initData, $data);
        $hash = $data['hash'] ?? null;
        unset($data['hash']);
        ksort($data);
        $checkString = http_build_query($data, '', '\n');
        $botToken = config("app.telegram.bot_token");
        $secretKey = hash('sha256', $botToken, true);

        $generatedHash = hash_hmac('sha256', $checkString, $secretKey);

        return hash_equals($hash, $generatedHash);
    }

    protected function parseUserData(string $initData){
        parse_str($initData, $data);
        $userData = json_decode($data['user'], true);

        return[
            'id'=> $userData['id'],
            'first_name' => $userData['first_name'] ?? null,
            'last_name' => $userData['last_name'] ?? null,
            'user_name' => $userData['user_name'] ?? null,
            'languege_code' => $userData['languege_code'] ?? null,
        ];
    }
}
