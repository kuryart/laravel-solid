<?php

namespace App\User\Services;

use App\Http\User\Services\IUserRegisterService;
use App\Http\User\UserRepository;

class UserRegisterService {
    protected $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->$userRepository = $userRepository;
    }    

    public function register(array $attributes) {
        $userRepository->create($attributes);
    }
}