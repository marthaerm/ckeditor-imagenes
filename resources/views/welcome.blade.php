
<!--
<!DOCTYPE html>
<!-
Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
--
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CKEditor Sample</title>
    <script src="../ckeditor/ckeditor.js"></script>
    <script src="../ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="../ckeditor/samples/css/samples.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Try the latest sample of CKEditor 4 and learn more about customizing your WYSIWYG editor with endless possibilities.">
</head>
<body id="main">

<main>
    <div class="adjoined-top">
        <div class="grid-container">
            <div class="content grid-width-100">
                <h1>Ejemplo</h1>
                <p>
                    Ejemplo
                </p>
            </div>
        </div>
    </div>
    <from method="POST" action="{{route('save-post')}}" >

        <div class="adjoined-bottom">
            <div class="grid-container">
                <div class="grid-width-100">
                    <div id="editor">
                        <h1>Hola mundo!</h1>
                        <p>Este es el inicio del texto.</p>
                        @csrf
                    </div>
                </div>
                <input type="submit" value="Enviar">
            </div>
        </div>
    </from>
</main>


<script>
    initSample();
</script>

</body>
</html>-->

<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5 Ckeditor Image Upload Example - ItSolutionStuff.com</title>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
</head>
<body>

<h1>Laravel 5 Ckeditor Image Upload Example - ItSolutionStuff.com</h1>
<textarea name="editor1"></textarea>

<script type="text/javascript">
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('save-post', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

</body>
</html>
