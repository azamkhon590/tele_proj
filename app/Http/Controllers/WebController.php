<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function login(Request $request){
        return response()->json($request->all());
    }
}
