<?php

namespace App\Services;

use App\Models\User;
use App\DTO\Auth\LoginDTO;
use Illuminate\Support\Facades\Hash;

class AuthService
{

    public function login(LoginDTO $dto)
    {

        $user = User::where(function ($query) use ($dto) {
            $query->where('email', $dto->login)
                  ->orWhere('username', $dto->login);
        })->first();

        if (!$user) {
            throw new \Exception('Usuario no encontrado');
        }

        if (str_starts_with($user->password, '$2y$')) {

            /*
            bcrypt password
            */

            if (!Hash::check($dto->password, $user->password)) {
                throw new \Exception('Contraseña incorrecta');
            }

        }else { /* 2️⃣ verificar md5 */
    
            if (md5($dto->password) !== $user->password) {
                throw new \Exception('Contraseña incorrecta');
            }

            /*
            migrar a bcrypt automáticamente
            */
            $user->password = Hash::make($dto->password);
            $user->save();
        }
        /*
        generar token
        */

        $token = $user->createToken('auth_token')->plainTextToken;
        return [
            'user' => $user,
            'token' => $token
        ];

    }

}