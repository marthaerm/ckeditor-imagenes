@extends('templates.app')
@section('content')
        <div class="jumbotron">
            <h1 class="display-3">Ajax</h1>
            <p class="lead">Ejemplo de envio de datos con ajax</p>
            <hr class="my-4">
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-header">Laravel - Ejemplo</div>
                    <div class="card-body">
                        <h4 class="card-title">Ckeditor</h4>
                        <p class="card-text">Carga de imágenes.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <a href="{{route('ajax-sample')}}">
                    <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                        <div class="card-header">Laravel - Ejemplo</div>
                        <div class="card-body">
                            <h4 class="card-title">Ajax</h4>
                            <p class="card-text">Envío de datos a un controller.</p>
                        </div>
                    </div>
                </a>

            </div>

            <div class="col-md-4">
                <a href="{{route('api-sample')}}">
                    <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                        <div class="card-header">Laravel - Ejemplo</div>
                        <div class="card-body">
                            <h4 class="card-title">APIs</h4>
                            <p class="card-text">Manjeo y desarrollo de una API.</p>
                        </div>
                    </div>
                </a>

            </div>

            <div class="col-md-4">
                <a href="{{route('modal-sample')}}">
                    <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                        <div class="card-header">Laravel - Ejemplo</div>
                        <div class="card-body">
                            <h4 class="card-title">Modal</h4>
                            <p class="card-text">Envío de información por medio de una ventana modal.</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>

@endsection