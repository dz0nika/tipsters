<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PassportController extends Controller
{
   public $successStatus = 200;
   /**
    * login api
    *
    * @return \Illuminate\Http\Response
    */
   public function login() 
   {
       if(Auth::attempt(['email' => request('email'), 'password' => request('password')]))
       {
           $user = Auth::user();
           $success =  $user->createToken('fine-tips')->accessToken;
           return response()->json([
               'success' => true,
               'data' => [
                    'access_token' => $success,
                    'user' => $user
               ],
            ], $this->successStatus);
       }
       else
       {
           return response()->json([
                'status' => 'false',
                'data' => [
                    'message' => 'User login Failed!'
               ], 
        ], 401);
       }
   }
   /**
    * Register api
    *
    * @return \Illuminate\Http\Response
    */
   public function register(Request $request)
   {
       $validator = Validator::make($request->all(), [
           'email' => 'required|email',
           'password' => 'required',
           'c_password' => 'required|same:password',
       ]);

       if ($validator->fails())
       {
        return response()->json([
            'status' => 'false',
            'data' => [
                'message' => 'User login Failed!'
            ], 
        ], 401);           
       }

       $user = User::create([
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'api_token' => Str::random(80),
       ]);
       $success =  $user -> createToken('fine-tips') ->accessToken;
       
       return response()->json([
            'success' => true,
            'data' => [
                'access_token' => $success,
                'user' => $user
            ],
        ], $this->successStatus);
   }
   /**
    * details api
    *
    * @return \Illuminate\Http\Response
    */
   public function getDetails()
   {
       $user = Auth::user();
       return response()->json(['success' => $user], $this->successStatus);
   }
}