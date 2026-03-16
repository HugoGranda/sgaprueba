<?php

namespace App\Services;

use App\Models\User;
use App\DTO\Auth\LoginDTO;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    private function validateUser(LoginDTO $dto): User
    {
        $user = User::where(function ($query) use ($dto) {
            $query->where('email', $dto->login)
                  ->orWhere('username', $dto->login);
        })->first();

        if (!$user) {
            throw new \Exception('Usuario no encontrado');
        }

        if (str_starts_with($user->password, '$2y$')) {

            if (!Hash::check($dto->password, $user->password)) {
                throw new \Exception('Contraseña incorrecta');
            }

        } else {

            if (md5($dto->password) !== $user->password) {
                throw new \Exception('Contraseña incorrecta');
            }

            // migrar automáticamente a bcrypt
            $user->password = Hash::make($dto->password);
            $user->save();
        }

        return $user;
    }

     /*
    Login para FILAMENT (sesión)
    */
    public function loginPanel(LoginDTO $dto): User
    {
        return $this->validateUser($dto);
    }


    /*
    Login para API (token Sanctum)
    */
    public function loginApi(LoginDTO $dto): array
    {
        $user = $this->validateUser($dto);

        $token = $user->createToken('auth_token')->plainTextToken;

        return [
            'user' => $user,
            'token' => $token
        ];
    }

}