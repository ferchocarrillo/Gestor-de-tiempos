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
                <h3 aline="center">Editar Gestion Fija DIGITAL</h3>
            </center>



<form name="f1" action="{{ url('/fijadigital/'.$fijas->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    @csrf
    @method('PATCH')

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nombres">Nombres</label>
               <input type="text"
               class="form-control"
               id="nombres"
               placeholder="Nombres"
               name="nombres"
               value="{{ old('nombres' , $fijas->nombres)}}">

          </div>
          <div class="form-group col-md-6">
            <label for="documento">Documento</label>
               <input type="number"
               class="form-control"
               id="documento"
               placeholder="Documento"
               name="documento"
               value="{{ old('documento' , $fijas->documento)}}">

          </div>
          <div class="form-group col-md-6">
            <label for="fexpedicion">Fecha de expedicion</label>
               <input type="date"
               class="form-control"
               id="fexpedicion"
               placeholder="Fecha de expedicion"
               name="fexpedicion"
               value="{{ old('fexpedicion' , $fijas->fexpedicion)}}">
          </div>
          <div class="form-group col-md-6">
            <label for="correo">Correo Electronico</label>
               <input type="text"
               class="form-control"
               id="correo"
               placeholder="Correo"
               name="correo"
               value="{{ old('correo' , $fijas->correo)}}">
          </div>


          <div class="form-group col-md-6">
            <label for="departamento">Departamento</label>
               <input type="text"
               class="form-control"
               id="departamento"
               placeholder="Departamento"
               name="departamento"
               value="{{ old('departamento' , $fijas->departamento)}}">
          </div>

          <div class="form-group col-md-6">
            <label for="ciudad">Ciudad</label>
               <input type="text"
               class="form-control"
               id="ciudad"
               placeholder="ciudad"
               name="Ciudad"
               value="{{ old('ciudad' , $fijas->ciudad)}}">
          </div>
          <div class="form-group col-md-6">
            <label for="barrio">Barrio</label>
               <input type="text"
               class="form-control"
               id="barrio"
               placeholder="barrio"
               name="Barrio"
               value="{{ old('barrio' , $fijas->barrio)}}">
          </div>
          <div class="form-group col-md-6">
            <label for="direccion">Direccion</label>
               <input type="text"
               class="form-control"
               id="direccion"
               placeholder="direccion"
               name="Direccion"
               value="{{ old('direccion' , $fijas->direccion)}}">
          </div>
          <div class="form-group col-md-6">
               <label for="estrato">Estrato</label>
               <input type="number" class="form-control"
               id="estrato"
               placeholder="Estrato"
               name="estrato"
               value="{{ old('estrato', $fijas->estrato)}}">
          </div>

          <div class="form-group col-md-6">
            <label for="ngrabacion">Numero de grabacion</label>
            <input type="number" class="form-control"
            id="ngrabacion"
            placeholder="Numero de grabacion"
            name="ngrabacion"
            value="{{ old('ngrabacion', $fijas->ngrabacion)}}">
       </div>
       <div class="form-group col-md-6">
        <label for="ncontacto">Numero de contacto</label>
        <input type="number" class="form-control"
        id="ncontacto"
        placeholder="Numero de contacto"
        name="ncontacto"
        value="{{ old('ncontacto', $fijas->ncontacto)}}">
       </div>

       <div class="form-group col-md-6">
        <label for="producto">Producto</label>
        <input type="text" class="form-control"
        id="producto"
        placeholder="Producto"
        name="producto"
        value="{{ old('producto', $fijas->producto)}}">
       </div>
       <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-1">
            <label for="fox">Fox</label>
            <input type="text" class="form-control"
            id="fox"
            placeholder="0"
            name="fox"
            value="{{ old('fox', $fijas->FOX)}}">
         </div>

         <div class="col col-lg-1">
            <label for="hbo">Hbo</label>
        <input type="text" class="form-control"
        id="hbo"
        placeholder="0"
        name="hbo"
        value="{{ old('hbo', $fijas->HBO)}}">
          </div>
          <div class="col col-lg-2">
            <label for="cds_movil">Cds movil</label>
        <input type="text" class="form-control"
        id="cds_movil"
        placeholder="0"
        name="cds_movil"
        value="{{ old('cds_movil', $fijas->cds_movil)}}">
          </div>
          <div class="col col-lg-2">
            <label for="cds_fija">Cds fija</label>
        <input type="text" class="form-control"
        id="cds_fija"
        placeholder="0"
        name="cds_fija"
        value="{{ old('cds_fija', $fijas->cds_fija)}}">
          </div>
          <div class="col col-lg-2">
            <label for="Paquete_Adultos">P adultos</label>
            <input type="text" class="form-control"
            id="Paquete_Adultos"
            placeholder="0"
            name="Paquete_Adultos"
            value="{{ old('deco', $fijas->Paquete_Adultos)}}">
          </div>
          <div class="col col-lg-2">
            <label for="Decodificador">Deco</label>
        <input type="text" class="form-control"
        id="Decodificador"
        placeholder="0"
        name="Decodificador"
        value="{{ old('Decodificador', $fijas->Decodificador)}}">
          </div>

          <div class="col col-lg-2">
            <label for="svas_lineas">Svas_lineas</label>
            <input type="text" class="form-control"
            id="svas_lineas"
            placeholder="0"
            name="svas_lineas"
            value="{{ old('svas_lineas', $fijas->Svas_lineas)}}">
          </div>
        </div>
    </div>

<div class="form-group col-lg-3">
    <label for="velocidad">Velocidad</label>
    <input type="text" class="form-control"
    id="velocidad"
    placeholder="Velocidad"
    name="velocidad"
    value="{{ old('velocidad', $fijas->velocidad)}}">
   </div>

   <div class="form-group col-lg-3">
    <label for="tecnologia">Tecnologia</label>
    <input type="text" class="form-control"
    id="tecnologia"
    placeholder="Tecnologia"
    name="tecnologia"
    value="{{ old('tecnologia', $fijas->tecnologia)}}">
   </div>



       <div class="form-group col-md-6">
        <label for="observacion">Observacion</label>
        <input type="text" class="form-control"
        id="observacion"
        placeholder="observacion"
        name="observacion"
        value="{{ old('observacion', $fijas->observacion)}}">
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

</div>

    <input class="btn btn-lg btn-primary" type="submit" value="EDITAR">


    <a href="{{route('fijadigital.index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">VOLVER</a>

    </div>

    </form>



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
      'FIJA DIGITAL',
      'Aqui podras editar los datos ya registrados',
      'success'
    )
    </script>
    @stop

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



