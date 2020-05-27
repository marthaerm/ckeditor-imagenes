@extends('templates.app')
@extends('templates.modal')
@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Modal</h1>
        <p class="lead">Ejemplo de envio de información con un modal</p>
        <hr class="my-4">
    </div>

    <div class="row">
        <div class="col-md-6 float-left">
            <h3>Enviar datos con get</h3>
            <input type="text" value="" name="data" id="data">
            <button type="button" onclick="send()" class="btn btn-primary">Enviar</button>
        </div>

        <div class="col-md-6 float-left">
            <h3>Envíar datos con form en modal</h3>
            
            <button type="button" onclick="sendForm()" class="btn btn-primary">Enviar</button>
        </div>
    </div>


    <script type="text/javascript">
        function  send(){
            var data = $("#data").val();
            $("#modal").modal().find('.modal-title').text('Enviar informacion');
            $("#modal").modal().find('.message-text').empty();
            $("#modal").modal().find('.message-text').append('¿Estás seguro de enviar la siguiente informacion:' + data + '?');
            $("#modal").modal().find('#url').attr("href", "{{url('modal-data')}}" + "/" + data);

        }

        function  sendForm(){
            $("#form-modal").modal().find('.modal-title').text('Enviar informacion');
            $("#form-modal").modal().find('.message-text').append('Ingresa el texto que deseas enviar');

        }
    </script>
@endsection

