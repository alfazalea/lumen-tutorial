<?php

namespace App\Http\Controllers;

use App\Services\UserService;

class UserController
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function getMyName($name){
        return $this->userService->getName($name);
    }
}
