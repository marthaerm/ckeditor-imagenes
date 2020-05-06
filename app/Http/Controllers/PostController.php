<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function save (Request $request){
        // colocar la imagen cargada en una ruta especifica
        $request->upload->move(public_path('uploads'),
            $request->file('upload')->getClientOriginalName());
        // mostrar el nombre del archivo en la ventana emergente al cargar la imagen
        echo json_encode(array('file_name' =>
        $request->file('upload')->getClientOriginalName()));
    }

    public function store (Request $request){
        // imprime el contenido enviado en el formulario del editor
        return $request;
    }
}
