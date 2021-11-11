<?php

namespace App\Services;

use Illuminate\Http\Request;

class UserService
{

    /**
     * @param $name
     * @return mixed
     */
    public function getName(Request $request){
        return 'My Name is :' .$request->name;
    }
}
