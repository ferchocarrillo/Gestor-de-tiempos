@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="container">
    <div class="pull-right">
        <div class="col-md-12">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            </body>
            <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <img src="\theme\images\pngegg.png" float="left" height="120" width="300">
                <h3 aline="center">Editor de Gestion Prepost</h3>
            </center>
<form name="f1" action="{{ url('/prepost/'.$prepost->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    @csrf
    @method('PATCH')

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="number">Numero</label>
             <input type="number" class="form-control"
             id="numero"
             placeholder="Numero"
             name="numero"
             value="{{ old('numero', $prepost->numero)}}">

        </div>
        <div class="form-group col-md-6">
            <label for="nombres">Nombres</label>
               <input type="text"
               class="form-control"
               id="nombres"
               placeholder="Nombres"
               name="nombres"
               value="{{ old('nombres' , $prepost->nombres)}}">

          </div>
          <div class="form-group col-md-6">
            <label for="documento">Documento</label>
               <input type="number"
               class="form-control"
               id="documento"
               placeholder="Documento"
               name="documento"
               value="{{ old('documento' , $prepost->documento)}}">

          </div>
          <div class="form-group col-md-6">
            <label for="fexpedicion">Fecha de expedicion</label>
               <input type="date"
               class="form-control"
               id="fexpedicion"
               placeholder="Fecha de expedicion"
               name="fexpedicion"
               value="{{ old('fexpedicion' , $prepost->fexpedicion)}}">
          </div>
          <div class="form-group col-md-6">
            <label for="tipocliente">Tipo cliente</label>
               <input type="text"
               class="form-control"
               id="tipocliente"
               placeholder="tipo cliente"
               name="tipocliente"
               value="{{ old('tipocliente' , $prepost->tipocliente)}}">
          </div>
          <div class="form-group col-md-6">
            <label for="correo">Correo</label>
               <input type="text"
               class="form-control"
               id="correo"
               placeholder="Correo"
               name="correo"
               value="{{ old('correo' , $prepost->correo)}}">
          </div>

          <div class="form-group col-md-6">
            <label for="departamento">Departamento</label>
               <input type="text"
               class="form-control"
               id="departamento"
               placeholder="Departamento"
               name="departamento"
               value="{{ old('departamento' , $prepost->departamento)}}">
          </div>

          <div class="form-group col-md-6">
            <label for="ciudad">Ciudad</label>
               <input type="text"
               class="form-control"
               id="ciudad"
               placeholder="ciudad"
               name="Ciudad"
               value="{{ old('ciudad' , $prepost->ciudad)}}">
          </div>
          <div class="form-group col-md-6">
            <label for="barrio">Barrio</label>
               <input type="text"
               class="form-control"
               id="barrio"
               placeholder="barrio"
               name="Barrio"
               value="{{ old('barrio' , $prepost->barrio)}}">
          </div>
          <div class="form-group col-md-6">
            <label for="direccion">Direccion</label>
               <input type="text"
               class="form-control"
               id="direccion"
               placeholder="direccion"
               name="Direccion"
               value="{{ old('direccion' , $prepost->direccion)}}">
          </div>
          <div class="form-group col-md-6">
               <label for="corte">Corte</label>
               <input type="number" class="form-control"
               id="corte"
               placeholder="Corte"
               name="corte"
               value="{{ old('corte', $prepost->corte)}}">
          </div>
          <div class="form-group col-md-6">
            <label for="planventa">Plan venta</label>
            <input type="number" class="form-control"
            id="planventa"
            placeholder="Plan venta"
            name="planventa"
            value="{{ old('planventa', $prepost->planventa)}}">
           </div>
           <div class="form-group col-md-6">
            <label for="activacion">Activacion</label>
            <input type="text" class="form-control"
            id="activacion"
            placeholder="Activacion"
            name="activacion"
            value="{{ old('activacion', $prepost->activacion)}}">
           </div>
           <div class="form-group col-md-6">
            <label for="token">Token</label>
            <input type="number" class="form-control"
            id="token"
            placeholder="Token"
            name="token"
            value="{{ old('token', $prepost->token)}}">
           </div>
           <div class="form-group col-md-6">
            <label for="observacion">Observacion</label>
            <input type="text" class="form-control"
            id="observaciones"
            placeholder="observaciones"
            name="observaciones"
            value="{{ old('observaciones', $prepost->observaciones)}}">
           </div>




    <div class="form-group col-md-12">
        <label for="revisado">Revision</label>
        <select name=revisado onchange="cambia_estadorevisado()" class="form-control">

    <option value="0" selected>Seleccione...
    <option value="1">Ok
    <option value="2">Recuperar
    <option value="3">Perdida
    </select>
    </div>

    <div class="form-group col-md-12">
    <label for="estadorevisado">Estado de la revision</label>
    <select name=estadorevisado class="form-control">
    <option value="-">-
    </select>
</div>

    <div class="form-group col-md-12">
        <textarea class="form-control"  id ="obs2" name="obs2" rows="3" placeholder="Observaciones BackOficce"></textarea>
        </div>



    <input class="btn btn-lg btn-primary" type="submit" value="EDITAR">


    <a href="{{route('prepost.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">VOLVER</a>

    </div>

    </form>
      <script>
      var estadorevisados_1=new Array("Ok");
      var estadorevisados_2=new Array("Escoja una opcion","Cliente en mora","Error Aplicativo","Recahzo PCO","Cliente no Paso Confronta","Pendiente Ingreso");
      var estadorevisados_3=new Array("Escoja una opcion","Rechazo PCO","Cliente Tiene una Solicitud Abierta");


      var todasestadorevisados = [
        [],
        estadorevisados_1,
        estadorevisados_2,
        estadorevisados_3,

      ];

      function cambia_estadorevisado(){
           //tomo el valor del select del revisado elegido
           var revisado
           revisado = document.f1.revisado[document.f1.revisado.selectedIndex].value
           //miro a ver si el revisado está definido
           if (revisado != 0) {
              //si estaba definido, entonces coloco las opciones de la estadorevisado correspondiente.
              //selecciono el array de estadorevisado adecuado
              mis_estadorevisados=todasestadorevisados[revisado]
              //calculo el numero de estadorevisados
              num_estadorevisados = mis_estadorevisados.length
              //marco el número de estadorevisados en el select
              document.f1.estadorevisado.length = num_estadorevisados
              //para cada estadorevisado del array, la introduzco en el select
              for(i=0;i<num_estadorevisados;i++){
                 document.f1.estadorevisado.options[i].value=mis_estadorevisados[i]
                 document.f1.estadorevisado.options[i].text=mis_estadorevisados[i]
              }
           }else{
              //si no había estadorevisado seleccionada, elimino las estadorevisados del select
              document.f1.estadorevisado.length = 1
              //coloco un guión en la única opción que he dejado
              document.f1.estadorevisado.options[0].value = "-"
              document.f1.estadorevisado.options[0].text = "-"
           }
           //marco como seleccionada la opción primera de estadorevisado
           document.f1.estadorevisado.options[0].selected = true
    }
    </script>


    </div>

    </div>

    </form>



    <script src="{{asset('js/app.js')}}"></script>
            </body>
            @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
            @stop
            @section('js')



    <script>
    Swal.fire(
      'PREPOST',
      'Aqui podras editar los datos ya registrados',
      'success'
    )
    </script>
    @stop



    @endsection


