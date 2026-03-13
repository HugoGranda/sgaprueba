<?php
    namespace App\DTO\Auth;

    class LoginDTO
    {
        public string $login;
        public string $password;
        public function __construct($login, $password) {
            $this->login = $login;
            $this->password = $password;
        }

    }