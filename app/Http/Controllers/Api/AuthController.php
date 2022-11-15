<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
   
    public function register(Request $request){
        
        $data = $request->all();
        $validator = Validator::make($request->all(), [ 
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required'
                
            ]);
            if ($validator->fails()) { 
                 return response()->json(['error'=>$validator->errors()], 401);            
            }
        $checkemail = User::select('*')->where('email','=',$data['email'])->get();
        
               
        if(count($checkemail)==0){
            
              
                    $data['password'] = Hash::make($data['password']);
                    $user_id = mt_rand(100000, 999999);
                   
                                $user = new User();
                                $user->user_id = $user_id;
                                $user->name = $data['name'];
                                $user->email = $data['email'];
                                $user->password = $data['password'];
                                $user->save();
                     
                    $token =  $user->createToken('registerapi')->plainTextToken; 
                    $name =  $user->name;
             return response()->json(['token'=>$token, 'name'=>$name], 200);
        }else{
        $message='Already email Exit!';

        $response = [
            'status'=>false,
            'message'=>'Already email Exit!',
        ];
        return response()->json(['status'=>false, 'message'=>$message], 200);
    }
 }
    

    public function login(Request $request){
        

      $validator = Validator::make($request->all(), [ 
                'email' => 'required',
                'password' => 'required',
                
            ]);
       if ($validator->fails()) { 
                 return response()->json(['error'=>$validator->errors()], 401);            
        }else{
      if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $token =  $user->createToken('loginapi')->plainTextToken; 
            $id = $user->id;
            $name = $user->name;
            $email = $user->email;
            return response()->json(['token' => $token, 'id' => $id, 'name' => $name,'email' => $email], 200); 
        } 
        else{ 
            return response()->json(['error'=>'Not register user!'], 401); 
        } 
       }

    }


    public function logout(Request $request) {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'User logout successfully'], 200);
    }

    public function userIfno(Request $request)
    {
        //dd('helo');
       
        $users = User::all();
       // $users = DB::table('users')->where('type', '=', 'agent')->get();
        return response()->json([
        'status' => 200,
        'user'=>$users,
        'message' => 'User found',
        'data' => auth('api')->user()
    ], 200);

   }


   public function useragent(Request $request)
    {
        //$user_id = Auth::user()->id;
        $users = User::where('type', '=','agent')->get();
        //$users = DB::table('users')->where('type', '=', 'agent')->get();
        return response()->json([
        'status' => 200,
        'user'=>$users,
        'message' => 'Agent found',
         'data' => auth('api')->user()
    ], 200);
        
   }

   public function getMassage(Request $request)
    {
        $id = Auth::user()->id;
        
        $users = User::where('id',$id)->where('type', '=','agent')->first();
        $chat_messages = DB::table('chat_messages')->where('id',$id)->get();

        return response()->json([
        'status' => 200,
        'chat_messages'=>$chat_messages,
        // 'data' => auth('api')->user(),
        // 'message' => 'Agent found',
    ], 200);
        
    }
}

