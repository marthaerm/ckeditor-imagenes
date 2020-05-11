@extends('templates.app')
@section('content')
        <div class="jumbotron">
            <h1 class="display-3">Ajax</h1>
            <p class="lead">Ejemplo de envio de datos con ajax</p>
            <hr class="my-4">
        </div>

        <div class="row">
            <div class="col-md-6 float-left">
                <h3>Envíar datos con un botón</h3>
                <p>
                    Al dar click al botón, se generará un numero aleatorio que se enviará por el ajax request y la fucion del controller regresara el mensaje de la mascota que se ha elegido
                </p>
                <button type="button" class="btn btn-primary" id="pet">Elige una mascota al azar</button>

            </div>

            <div class="col-md-6 form-group float-left">
                <h3>Envíar datos con un select</h3>
                <p>
                    Al seleccionar una opcion del select, se enviará el numero correspondiente a la mascota elegida y la fucion del controller regresara el mensaje de la mascota que se ha elegido
                </p>
                <select class="custom-select" id="selectPet">
                    <option selected="">Selecciona una mascota</option>
                    <option value="0">Perro</option>
                    <option value="1">Gato</option>
                    <option value="2">Hamster</option>
                </select>
            </div>
        </div>

        <div class="mb-4"></div>
        <div class="row">
            <div class="col-md-6">

                <h3>Mostrar respuesta en elemento html</h3>
                <p>
                    Al seleccionar una opcion del select, se enviará el numero correspondiente a la mascota elegida y la fucion del controller regresara el mensaje de la mascota que se ha elegido
                </p>
                <select class="custom-select" id="insertPet">
                    <option selected="">Selecciona una mascota</option>
                    <option value="0">Perro</option>
                    <option value="1">Gato</option>
                    <option value="2">Hamster</option>
                </select>

                <div class="mb-4"></div>
                <div class="card border-primary mb-3" style="max-width: 20rem;">

                    <div class="card-body">
                        <h4 class="card-title">Mascota</h4>
                        <p class="card-text" id="petText">Aquí aparecera la mascota que elegiste.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">

                <h3>Enviar contenido de input y operar en controller</h3>
                <p>
                    Al seleccionar una opcion del select, se enviará el numero correspondiente a la mascota elegida y la fucion del controller regresara el mensaje de la mascota que se ha elegido
                </p>

                <div class="form-group">
                    <input type="number" class="form-control" id="num1">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="num2">
                </div>

                <button type="button" class="btn btn-primary" id="addition">Sumar</button>
                <div class="mb-4"></div>
                <div class="card border-primary mb-3" style="max-width: 20rem;">
                    <div class="card-body">
                        <h4 class="card-title">Resultado</h4>
                        <p class="card-text" id="additionRes"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4"></div>
        <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
            <div class="card-header">Extra</div>
            <div class="card-body">
                <h4 class="card-title">Retos</h4>
                <p class="card-text">Crear una única funcion que permita realizar cualquier petición ajax.</p>
            </div>
        </div>

@endsection