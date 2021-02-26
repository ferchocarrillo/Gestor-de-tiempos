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
                <h3 aline="center">Editar Gestion de Phoenix</h3>
            </center>



<form name="f1" action="{{ url('/phoenix/'.$phoenixes->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    @csrf
    @method('PATCH')

   <div class="form-row">
   <div class="form-group col-md-6">
        <label for="number">Numero</label>
        <input type="number" class="form-control"
        id="numero"
        placeholder="Numero"
        name="numero"
        value="{{ old('numero', $phoenixes->numero)}}">
   </div>

  <div class="form-group col-md-6">
    <label for="documento">Documento</label>
       <input type="number"
       class="form-control"
       id="documento"
       placeholder="Documento"
       name="documento"
       value="{{ old('documento' , $phoenixes->documento)}}">

  </div>
  <div class="form-group col-md-6">
    <label for="nombres">Nombres</label>
       <input type="text"
       class="form-control"
       id="nombres"
       placeholder="Nombres"
       name="nombres"
       value="{{ old('nombres' , $phoenixes->nombres)}}">

  </div>
  <div class="form-group col-md-6">
    <label for="apellidos">Apellidos</label>
       <input type="text"
       class="form-control"
       id="apellidos"
       placeholder="Apellidos"
       name="apellidos"
       value="{{ old('apellidos' , $phoenixes->apellidos)}}">

  </div>
  <div class="form-group col-md-6">
    <label for="correo">Correo</label>
       <input type="text"
       class="form-control"
       id="correo"
       placeholder="Correo"
       name="correo"
       value="{{ old('correo' , $phoenixes->correo)}}">
  </div>

  <div class="form-group col-md-6">
    <label for="departamento">Departamento</label>
       <input type="text"
       class="form-control"
       id="departamento"
       placeholder="Departamento"
       name="departamento"
       value="{{ old('departamento' , $phoenixes->departamento)}}">
  </div>

  <div class="form-group col-md-6">
    <label for="ciudad">Ciudad</label>
       <input type="text"
       class="form-control"
       id="ciudad"
       placeholder="ciudad"
       name="Ciudad"
       value="{{ old('ciudad' , $phoenixes->ciudad)}}">
  </div>
  <div class="form-group col-md-6">
    <label for="barrio">Barrio</label>
       <input type="text"
       class="form-control"
       id="barrio"
       placeholder="barrio"
       name="Barrio"
       value="{{ old('barrio' , $phoenixes->barrio)}}">
  </div>
  <div class="form-group col-md-6">
    <label for="direccion">Direccion</label>
       <input type="text"
       class="form-control"
       id="direccion"
       placeholder="direccion"
       name="Direccion"
       value="{{ old('direccion' , $phoenixes->direccion)}}">
  </div>
  <div class="form-group col-md-6">
    <label for="nip">Nip</label>
       <input type="number"
       class="form-control"
       id="nip"
       placeholder="Nip"
       name="nip"
       value="{{ old('nip' , $phoenixes->nip)}}">
  </div>
  <div class="form-group col-md-6">
    <label for="tipocliente">Tipo cliente</label>
       <input type="text"
       class="form-control"
       id="tipocliente"
       placeholder="tipo cliente"
       name="tipocliente"
       value="{{ old('tipocliente' , $phoenixes->tipocliente)}}">
  </div>
  <div class="form-group col-md-6">
    <label for="planadquiere">Plan adquiere</label>
       <input type="number"
       class="form-control"
       id="planadquiere"
       placeholder="plan adquiere"
       name="planadquiere"
       value="{{ old('planadquiere' , $phoenixes->planadquiere)}}">
  </div>
  <div class="form-group col-md-6">
    <label for="ncontacto">Numero de contacto</label>
       <input type="number"
       class="form-control"
       id="ncontacto"
       placeholder="numero de contacto"
       name="ncontacto"
       value="{{ old('ncontacto' , $phoenixes->ncontacto)}}">
  </div>
  <div class="form-group col-md-6">
    <label for="imei">Imei</label>
       <input type="number"
       class="form-control"
       id="imei"
       placeholder="Imei"
       name="imei"
       value="{{ old('imei' , $phoenixes->imei)}}">
  </div>

  <div class="form-group col-md-6">
    <label for="imei">Modelo</label>
       <input type="text"
       class="form-control"
       id="modelo"
       placeholder="modelo"
       name="modelo"
       value="{{ old('modelo' , $phoenixes->modelo)}}">
  </div>

  <div class="form-group col-md-6">
    <label for="fvc">FVC</label>
       <input type="date"
       class="form-control"
       id="fvc"
       placeholder="fvc"
       name="fvc"
       value="{{ old('fvc' , $phoenixes->fvc)}}">
  </div>
  <div class="form-group col-md-6">
    <label for="fentrega">Fecha de entrega</label>
       <input type="date"
       class="form-control"
       id="fentrega"
       placeholder="Fecha de entrega"
       name="fentrega"
       value="{{ old('fentrega' , $phoenixes->fentrega)}}">
  </div>
  <div class="form-group col-md-6">
    <label for="fexpedicion">Fecha de expedicion</label>
       <input type="date"
       class="form-control"
       id="fexpedicion"
       placeholder="Fecha de expedicion"
       name="fexpedicion"
       value="{{ old('fexpedicion' , $phoenixes->fexpedicion)}}">
  </div>
  <div class="form-group col-md-6">
    <label for="fnacimiento">Fecha de nacimiento</label>
       <input type="date"
       class="form-control"
       id="fnacimiento"
       placeholder="Fecha de nacimiento"
       name="fnacimiento"
       value="{{ old('fnacimiento' , $phoenixes->fnacimiento)}}">
  </div>
  <div class="form-group col-md-6">
    <label for="origen">Origen de la migracion</label>
       <input type="text"
       class="form-control"
       id="origen"
       placeholder="Origen"
       name="origen"
       value="{{ old('origen' , $phoenixes->origen)}}">
  </div>
  <div class="form-group col-md-6">
    <label for="ngrabacion">Numero de grabacion</label>
       <input type="number"
       class="form-control"
       id="ngrabacion"
       placeholder="Numero de grabacion"
       name="ngrabacion"
       value="{{ old('ngrabacion' , $phoenixes->ngrabacion)}}">
  </div>
  <div class="form-group col-md-12">
    <label for="ngrabacion">Observaciones</label>
    <input type="text"
    class="form-control"
    id ="observaciones"
    name="observaciones"
    placeholder="Observaciones"
    value="{{ old('observaciones' , $phoenixes->observaciones)}}">
   </div>

   <div class="form-group col-md-12">
    <label for="revisados">Revision</label>

     <select name="revisados" id="revisados" class="form-control"  required>
        <option value="">Revisión</option>
        @foreach($revisadoses as $revisados)
            <option value="{{ $revisados->estado}}">{{ $revisados->estado }}</option>
        @endforeach
  </select>
    </div>

    <div class="form-group col-md-12">
     <label for="estadorevisados">Estado de la revision</label>
     <select name="estadorevisado" id="estadorevisado" class="form-control" placeholder="Estado de la revisión" required></select>
 </div>
<div class="form-group col-md-12">
    <textarea class="form-control"  id ="obs2" name="obs2" rows="3" placeholder="Observaciones BackOficce"></textarea>
    </div>



<input class="btn btn-lg btn-primary" type="submit" value="EDITAR">


<a href="{{route('phoenix.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">VOLVER</a>

</div>

</form>











  {{--  <script>
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
   	//tomo el valor del select del revisados elegido
   	var revisados
   	revisados = document.f1.revisados[document.f1.revisados.selectedIndex].value
   	//miro a ver si el revisados está definido
   	if (revisados != 0) {
      	//si estaba definido, entonces coloco las opciones de la estadorevisado correspondiente.
      	//selecciono el array de estadorevisado adecuado
      	mis_estadorevisados=todasestadorevisados[revisados]
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
</script>  --}}


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
  'PORTABILIDAD DIGITAL',
  'Aqui podras editar los datos ya registrados',
  'success'
)
</script>
@stop
<!-- Bootstrap CSS-->
    <link href="{{ asset('theme/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
<!-- Bootstrap JS-->
    <script src="{{asset('theme/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('theme/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!--<script src="{{asset('js/Portabilidad.js')}}"></script>-->

<script>
   $(document).ready(function() {
        $('#id_dep').on('change', function(e) {
            var id = $('#id_dep').val();
            $.ajax({

                url: "{{ route('Ciudad')}}",
                data: "id="+id+"&_token={{ csrf_token()}}",
                dataType: "json",
                method: "POST",
                success: function(result)
                {

                    $('#id_ciudad').empty();
                    $('#id_ciudad').append("<option value=''>Ingrese Ciudad o Municipio</option>");
                    $.each(result, function(index,value){

                        $('#id_ciudad').append("<option value='"+value.Id_ciudad+"'>"+value.Municipio+"</option>");
                    });
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
         $('#revisados').on('change', function(e) {
             var id = $('#revisados').val();
             $.ajax({

                 url: "{{ route('Revisado')}}",
                 data: "id="+id+"&_token={{ csrf_token()}}",
                 dataType: "json",
                 method: "POST",
                 success: function(result)
                 {

                     $('#estadorevisado').empty();
                     $('#estadorevisado').append("<option value=''>Escoja una Opcion</option>");
                     $.each(result, function(index,value){

                         $('#estadorevisado').append("<option value='"+value.estado+"'>"+value.estado+"</option>");
                     });
                 }
             });
         });
     });
 </script>
@endsection

