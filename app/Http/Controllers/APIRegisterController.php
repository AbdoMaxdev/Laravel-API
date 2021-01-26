<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Str;
use Validator;
use Response;

class APIRegisterController extends Controller
{
    public function register( Request $request){
        $validator = Validator::make($request -> all(),[
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator ->fails()){
            return response()->json($validator->errors());
        }
        $token = Str::random(100);
        
        users::create([
            'email' => $request->get('email'),
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'imageuser' => $request->get('imageuser'),
            'api_token' => $token
            ]);

        return response()->json($token);
    }
}
