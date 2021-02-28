<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        // var_dump($credentials); die;

        try {
            if(!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['errors' => 'failed'], 'failed');
            }
            // return $this->sendResponse(compact('token'), 200);
            return response()->json(['message' => 'success' , 'token' => $token, 'code' => 200], 200);
    
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Email or Password Incorrect']);
        }    
    }

    public function register(Request $request) {

        try {
        $user = User::create([
            'name' => $request->get('username'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);
    
    } catch (Exception $e) {
            if($e instanceof \Illuminate\Database\QueryException) {
                $errorCode = $e->errorInfo[1];
                if($errorCode == '1048'){
                    $error = [
                        
                        'message' => 'duplicated data',
                        'code' => 401,

                    ];

                    return response()->json($error,401);
                } else {
                    $error = [
                        
                        'message' => 'duplicated data',
                        'code' => 401,

                    ];

                    return response()->json($error);
                }
            } else {
                return response()->json('erros');
            }
        }
        
    }

    //
}
