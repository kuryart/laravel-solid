<?php

namespace App\Services\User;

use App\Http\User\UserRepository;

class UserRegisterService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(Request $request)
    {
        $this->userRepository->create($request);
    }
}