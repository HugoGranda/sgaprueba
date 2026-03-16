<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\AuthResource;
use App\Services\AuthService;
use App\Http\Controllers\Api\BaseController;


class AuthController extends BaseController
{
    protected $authService;
    public function __construct(AuthService $authService){
        $this->authService = $authService;
    }
    
    public function login(LoginRequest $request){

        try {
        
            $dto = $request->toDTO();

            $authData = $this->authService->loginApi($dto);

            return $this->sendResponse(
                new AuthResource($authData),
                'Login successful'
            );
        } catch (\Exception $e) {
            return $this->sendError(
                $e->getMessage(),
                [],
                401
            );
        }

    }
}
