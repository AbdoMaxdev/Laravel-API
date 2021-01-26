<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\users;
use Illuminate\Support\Facades\DB;
use Validator;


class APILoginController extends Controller
{
    public function login( Request $request){
        $validator = Validator::make($request -> all(),[
            'email' => 'required|string|email|max:255',
            'password' => 'required'
        ]);

        if ($validator ->fails()){
            return response()->json(['The email must be a valid email address.']);
        }

        
        if (users::where('email', $request['email'])->first()){
                if (users::where('password', $request['password'])->first()){
                    $api_token = DB::table('users')->select('api_token')->where('email',$request['email'])->get();
                    return response()->json($api_token);
                }
                
            }
        
        
        return response()->json(['invalid username and password']);
    }
}
