<?php

namespace App\Http\Controllers\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Auth\LoginRequest;
use App\Http\Requests\V1\Auth\LogoutRequest;
use App\Traits\V1\ApiResponserTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponserTrait;
    public function login(LoginRequest $loginRequest)
    {
        if (!Auth::attempt($loginRequest->all())) {
            return $this->response(0, [], 'Login yoki parol noto\'g\'ri', 401, 200);
        }
        $user = auth()->user();
        $token = $user->createToken(
            'token-name',
            ['*'],
            now()->addWeek()
        )->plainTextToken;
        return $this->response(1, [
            'access_token' => $token,
        ], 'success', 200, 200);
    }

    public function logout(LogoutRequest $logoutRequest)
    {
        $logoutRequest->user()->currentAccessToken()->delete();
        return $this->response(1, [], 'Logout successful', 200, 200);
    }

    public function me(){
        $user = auth()->user();
        return $this->response(1, $user, 'success', 200, 200);
    }
}
