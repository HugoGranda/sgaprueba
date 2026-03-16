<?php

namespace App\Filament\Pages;

use Filament\Auth\Pages\Login as FilamentLogin;
use Filament\Auth\Http\Responses\Contracts\LoginResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

use App\Services\AuthService;
use App\DTO\Auth\LoginDTO;

class Login extends FilamentLogin
{
    public function authenticate(): ?LoginResponse
    {
        try {

            $dto = new LoginDTO(
                login: $this->data['email'],
                password: $this->data['password']
            );

            $authService = app(AuthService::class);

            $user = $authService->loginPanel($dto);

            Auth::login($user);

            return app(LoginResponse::class);

        } catch (\Exception $e) {

            //$this->addError('email', $e->getMessage());
            //dd($e->getMessage());
            //$this->throwFailureValidationException();
            /*throw ValidationException::withMessages([
                'email' => $e->getMessage(),
            ]);*/
            $this->addError('data.email', $e->getMessage());

            return Null;
        }
    }

    protected function getEmailFormComponent(): \Filament\Forms\Components\TextInput
    {
        return \Filament\Forms\Components\TextInput::make('email')
        ->label('Usuario o correo')
        ->required()
        ->autofocus();
    }
}