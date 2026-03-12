<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Api\BaseController;
use App\Services\AuthService;
use App\Http\Resources\AuthResource;

class AuthController extends BaseController
{
    protected $authService;
    public function __construct(AuthService $authService){
        $this->authService = $authService;
    }
    
    public function login(LoginRequest $request){

        $dto = $request->toDTO();

        $authData = $this->authService->login($dto);

        return $this->sendResponse(
            new AuthResource($authData),
            'Login successful'
        );

    }
}
