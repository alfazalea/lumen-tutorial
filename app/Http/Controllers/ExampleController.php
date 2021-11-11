<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return response(['message' => 'Hello Word'], 200);
    }


    /**
     * @param Request $request
     * @return string
     * @throws \Exception
     */
    public function getRandomCode(Request $request)
    {
        return 'Your name is : ' . $request->name . ' and your code : ' . random_int(100000, 999999);
    }

    /**
     * @param Request $request
     * @return string
     * @throws \Exception
     */
    public function getUserById($id, Request $request)
    {
        return 'ID :' . $id . ' Your name is : ' . $request->name . ' and your age : ' . $request->age;
    }

    /**
     * @param Request $request
     * @return string
     * @throws \Exception
     */
    public function calculate(Request $request)
    {
        $total = $request->qty * $request->price;

        return 'Total amount = ' . $total;
    }

}

