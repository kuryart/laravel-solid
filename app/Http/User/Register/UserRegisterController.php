<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\User\Register\UserRegisterService;

class UserRegisterController extends Controller {
    protected $userRegisterService;

    public function __construct(UserRegisterService $userRegisterService) {
        $this->$userRegisterService = $userRegisterService;
    }  

    public function register(Request $request) {
        $userRegisterService->register($request->all());

        return view('user.register');
    }
}
