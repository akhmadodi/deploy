<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{
    public $successStatus = 200;

    public function login(){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            return response()->json([
                'data' => array_merge(
                    User::where('id', $user->id)->with(['role'])->first()->toArray(),
                    ['auth_token' => $user->createToken('juslynApp')->accessToken]
                )
            ], $this->successStatus);
        } 
        else{
            return response()->json(['error' => array(
                'message' => 'Email atau password salah'
            )], 401);
        }
    }

    public function register(Request $request) 
    {
        $validator = Validator::make($request->all(), [ 
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'role_id' => 'required',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => array(
                'message' => $validator->errors()
            )], 401);
        }
        $input = $request->all(); 
        $input['uid'] = uniqid();
        $input['password'] = bcrypt($input['password']); 
        $q = User::where('email', $input['email'])->orWhere('phone', $input['phone']);
        if ($q->count() > 0) {
            return response()->json(['error' => array(
                'message' => 'Email atau nomor handphone sudah terdaftar'
            )], 401);
        }
        $user = User::create($input); 
        return response()->json([
            'data' => User::where('id', $user->id)->with(['role'])->first()
        ], $this->successStatus);
    }
}
