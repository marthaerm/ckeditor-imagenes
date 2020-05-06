<!DOCTYPE html>
<!--
Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CKEditor Sample</title>
    <script src="../ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="../ckeditor/samples/css/samples.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body id="main">

<main>
    <div class="adjoined-top">
        <div class="grid-container">
            <div class="content grid-width-100">
                <h1>Ejemplo</h1>
                <p>
                    Carga una imagen y la podrass observar en 'public/uploads'
                </p>
            </div>
        </div>
    </div>
    <form method="POST" action="{{route('save-post')}}" >
        <div class="adjoined-bottom">
            <div class="grid-container">
                <div class="grid-width-100">
                    <textarea name="editor" id="editor">
                        <h1>Hola mundo!</h1>
                        <p>Este es el inicio del texto.</p>
                    </textarea>
                </div>
                @csrf
                <br>
                <input type="submit" value="Enviar">
            </div>
        </div>
    </form>
</main>


<script type="text/javascript">

    var editor = CKEDITOR.replace('editor', {
        // seleccion la ruta que seguirá el navegador para almacenar la imagen
        // la ruta debe llevar a una funcion especifica del controlador que almacenará la imagen
        filebrowserUploadUrl: "{{route('save-img', ['_token' => csrf_token() ])}}",
        // metodo que se utilizará para cargar la imagen
        filebrowserUploadMethod: 'form',
        // incluir plugin "easyimage"
        extraPlugins: 'simage'
    });


</script>
</body>
</html>
