<?php

namespace App\Http\Controllers;

class ImagesController extends Controller
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
     * get images
     */
    public function index()
    {
        return 'index.controller';
    }
    public function store()
    {
        return 'store.controller';
    }

}
