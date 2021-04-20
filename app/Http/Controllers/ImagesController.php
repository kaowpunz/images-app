<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function store(Request $request)
    {
        return $request->file;
        // $fileName = time() . '.' . $request->file->getClientOriginalExtension();
        // $request->file->move(public_path('img'), $fileName);

        // return response()->json(['file' => $fileName]);


    }
}