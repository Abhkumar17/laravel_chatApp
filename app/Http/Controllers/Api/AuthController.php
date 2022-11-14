<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
   
    public function register(Request $request){
       
        $fields = $request->validate([
            'name' =>'required|string',
            'email'=>'required|string|email|unique:users,email',
            'password' =>'required|confirmed'
        ]);

        $user = User::create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>Hash::make($fields['password']),
        ]);

        //create token
        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'status'=>true,
            'message'=>'registered successfully!',
            'data' =>[
                'user'=>$user,
                'token'=>$token
            ]
        ];
        return response($response,201);
    }

    public function login(Request $request){
        $fields = $request->validate([
            'email'=>'required|string|email',
            'password' =>'required'
        ]);
        //check email
        $user = User::where('email',$fields['email'])->first();
        //check password
        if(!$user || !Hash::check($fields['password'],$user->password)){
            return response(['status'=>false,'message'=>'invalid email or password'],401);
        }

        //create token
        $token = $user->createToken('userlogin')->plainTextToken;

        $response = [
            'status'=>true,
            'message'=>'Login successful!',
            'data' =>[
                'user'=>$user,
                'token'=>$token
            ]
        ];
        return response($response,201);
    }


    public function logout(Request $request){
        auth()->user()->currentAccessToken()->delete();
        $response = [
            'status'=>true,
            'message'=>'Logout successfully',
        ];
        return response($response,201);
    }


    public function userIfno(Request $request){
       // return "hello";
       $user = User::first();
        return response()->json([
        'status' => true,
        'user'=>$user,
        'message' => 'User found',
        'data' => auth('api')->user()
    ], 200);
}

public function useragent(Request $request)
{
   
    $users = User::where('type', '=','admin')->get();
    //$users = DB::table('users')->where('type', '=', 'agent')->get();
    return response()->json([
    'status' => 200,
    'user'=>$users,
    'message' => 'Agent found',
], 200);
    
}
    
}
