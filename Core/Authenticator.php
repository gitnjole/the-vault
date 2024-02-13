<?php

namespace Core;

class Authenticator
{
    public function attempt(array $credentials): bool
    {
        $user = Application::resolve(Database::class)->query(
            'SELECT * FROM users WHERE username = :username', 
            [
                'username'=> $credentials['username'],
            ]
        )->one();
        
        if ($user) {
            if (password_verify($credentials['password'], $user['password'])) {
                $this->login([
                    'username' => $credentials['username'],
                    'user_id' => $user['user_id']
                ]);

                return true;
            }
        }
        
        return false;
    }

    public function login(array $user): void
    {
        $_SESSION['user'] = [
            'username' => $user['username'],
            'user_id' => $user['user_id']
        ];

        session_regenerate_id();
    }

    function logout(): void
    {
        Session::destory();
    }
}