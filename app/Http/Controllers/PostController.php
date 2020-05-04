<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function save (Request $request){
        $request->upload->move(public_path('uploads'),
            $request->file('upload')->getClientOriginalName());
        echo json_encode(array('file_name' =>
        $request->file('upload')->getClientOriginalName()));
    }
}
