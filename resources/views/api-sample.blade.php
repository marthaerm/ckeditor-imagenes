@extends('templates.app')
@section('content')

<div class="jumbotron">
    <h1 class="display-3">APIs</h1>
    <p class="lead">Ejemplo de</p>
    <hr class="my-4">

</div>

<div class="row">
    <div class="col-md-6 float-left">
        <h3>API Laravel</h3>
        <button type="button" class="btn btn-primary" id="api">Solicitar</button>
        <div class="card border-primary mb-3" style="max-width: 20rem;">
            <div class="card-body">
                <h4 class="card-title">Respuesta</h4>
                <p class="card-text" id="res"></p>
            </div>
        </div>
    </div>

    <div class="col-md-6 float-left">
        <h3>Yandex API</h3>
        <button type="button" class="btn btn-primary" id="api2">Solicitar</button>
        <br>
        <div class="card border-primary mb-3" style="max-width: 20rem;">
            <div class="card-body">
                <h4 class="card-title">Respuesta</h4>
                <p class="card-text" id="res2"></p>
            </div>
        </div>
    </div>


</div>

<script type="text/javascript">

    $("#api").click(function(event){

        $.ajax({
            url:'api/api-request',
            type:'post',
            success: function (response) {
                $( "#res" ).text( response['id'] );
            },
            statusCode: {
                // Muestra una alerta de acuerdo al error especificado
                404: function() {
                    alert('web not found');
                }
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            error:function(x,xs,xt){
                // Muestra una alerta con el mensaje de error si es que hay alguno
                alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
            }
        });
    });

    $("#api2").click(function(event){

        $.ajax({
            url:'https://dictionary.yandex.net/api/v1/dicservice.json/getLangs?key=dict.1.1.20200527T142713Z.20b6d2709e8bebfd.f7036b322fe9e0a03b103f1a6d906a7c000a51b2',
            type:'get',
            success: function (response) {
                $( "#res2" ).text( response );
            },
            statusCode: {
                // Muestra una alerta de acuerdo al error especificado
                404: function() {
                    alert('web not found');
                }
            },
            error:function(x,xs,xt){
                // Muestra una alerta con el mensaje de error si es que hay alguno
                alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
            }
        });
    });

</script>
@endsection

