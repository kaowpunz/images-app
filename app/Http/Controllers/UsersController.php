<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
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

    /**
     * get users
     */
    public function index()
    {
        $data = Users::all();

        return response()->json($data);
    }

    /**
     * get user by name
     */
    public function getUserByName($name){

        $data = Users::where('name', $name)
                ->get();

        return response()->json($data);
    }

    /**
     * save users
     */
    public function store(Request $request)
    {
        return 'users.store.controller';
    }
    

    public function login(Request $request)
    {   
        $email = $request->input('email');
        $pwd = $request->input('password');

        $data = Users::where('email', $email)
                    ->where('password', md5($pwd))
                    ->first();

        if(empty($data))
        {
            return response()->json(['error' => 'username/password wrong'], 401);
        }

        return response()->json($data);

    }

}
