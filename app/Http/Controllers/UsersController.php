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
     * Register new users
     */
    public function store(Request $request)
    {   
        $name  = $request->input('name');
        $email = $request->input('email');
        $pwd = $request->input('password');
        $md5Pwd = md5($pwd);
        $confirmPwd = $request->input('confirm_password');

        $data = Users::create([
                'name' => $name,
                'email' => $email,
                'password' => $md5Pwd
            ]);

        if(empty($data))
        {
            return response()->json(['error' => 'can not save data'], 401);
        }

        return response()->json($data);

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
