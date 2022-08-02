<?php


namespace App\Services;



use App\Exceptions\LoginInvalidException;
use App\Exceptions\ResetPasswordTokenInvalidException;
use App\Exceptions\UserHasBeenTakenException;
use App\Exceptions\VerifyEmailTokenInvalidException;
use App\Models\User;
use Illuminate\Support\Str;

class AuthService
{
    /**
     * @param string $email
     * @param string $password
     * @return array
     * @throws LoginInvalidException
     */
    public function login(string $email, string $password)
    {
        $login = [
            'email'    => $email,
            'password' => $password,
        ];

        if (!$token = auth()->attempt($login)) {
            throw new LoginInvalidException();
        }

        return [
            'access_token' => $token,
            'token_type'   => 'Bearer',
        ];
    }

    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $password
     * @return mixed
     * @throws UserHasBeenTakenException
     */
    public function register(string $firstName, string $lastName, string $email, string $password)
    {
    }

    /**
     * @param string $token
     * @return mixed
     * @throws VerifyEmailTokenInvalidException
     */
    public function verifyEmail(string $token)
    {
    }

    /**
     * @param string $email
     * @return string
     */
    public function forgotPassword(string $email)
    {
    }

    /**
     * @param string $email
     * @param string $password
     * @param string $token
     * @return string
     * @throws ResetPasswordTokenInvalidException
     */
    public function resetPassword(string $email, string $password, string $token)
    {
    }
}
