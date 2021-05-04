@extends('adminlte::page')
@section('content')
<div class="pull-right">
    <div class="col-md-12">
        <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        </body>

        <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="320">
            <h1 align="center">Registrar Tiempos</h1>
            <h3 align="center">  BIENVENIDO {{ Auth::user()->name }}</h3>
            {{csrf_field()}}
                <script type="text/javascript">
                    function HoraActual(hora, minuto, segundo){
                        segundo = segundo + 1;
                        if(segundo == 60) {
                            minuto = minuto + 1;
                            segundo = 0;
                            if(minuto == 60) {
                                minuto = 0;
                                hora = hora + 1;
                                if(hora == 24) {
                                    hora = 0;
                                }
                            }
                        }
                        if(hora < 10) hora = '0' + hora;
                        if(minuto < 10) minuto = '0' + minuto;
                        if(segundo < 10) segundo = '0' + segundo;
                        HoraCompleta= hora + ":" + minuto + ":" + segundo;
                        document.getElementById('contenedor_reloj').innerHTML = HoraCompleta;
                        setTimeout("HoraActual("+hora+", "+minuto+", "+segundo+")", 1000);
                }
                </script>
                <script>
                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                    var f=new Date();
                    document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                </script>
                <body input type = "time" onload="HoraActual(<?php echo date("H").", ".date("i").", ".date("s"); ?>)">
                <div id="contenedor_reloj"></div>
                <link rel="shortcut icon" href="">

 <style>
.card-boton{

background-color:#73abbb;
width: 20%;
height: 70px;
border-radius: 0.75rem;
border: #1c4c64;
border-style: solid;
border-width: 1px;
margin: 2rem;
box-shadow:5px  10px #1c4c64;
opacity: 0.9;
}

.a.botonIndex {

background-attachment: fixed;
background-color: #cfd0d0;
margin-top: 3rem;
width: 350px;
height: 60px;
border-radius: 0.5rem;
border-style: solid;
border-width: 1px;
box-shadow:5px  10px #1c4c64;
}
.a.botonIndex[type=boton]{
    background-attachment: fixed;
    background-color: #cfd0d0;
    margin-top: 0.7rem;
    width: 350px;
    height: 60px;
    border-radius: 0.5rem;
    border-style: solid;
    border-width: 1px;
    cursor: pointer;
    box-shadow:5px  10px #1c4c64;
}
.botonIndex {

    background-attachment: fixed;
    background-color: #cfd0d0;
    margin-top: 0.7rem;
    width: 200px;
    height: 40px;
    border-radius: 0.5rem;
    border-style: solid;
    border-width: 1px;
    box-shadow:5px  10px #1c4c64;
    }



.botonIndex:hover {
    background-attachment: fixed;
    background-color: #cfd0d0;
    box-shadow:5px  10px #1c4c64;

    margin-top: 0.7rem;
    width: 200px;
    height: 40px;
    border-radius: 1rem;
    color: #1c4c64;
    font-style: normal;

    }
                </style>

                </body>

               @can('haveaccess','ciclo.index')
                <form action="{{ url('/ciclo')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}
               <div class="card-boton">

                 <input type='submit' class="botonIndex" id= "turnoin" name='turnoin' value='INGRESO NUEVO'  >
                 {{--<a href="{{route('ciclo.create')}}"
                  class="botonIndex"
                  >Registrar Nuevo Ingreso
                </a>
                <br><br> --}}
            </div>
        </form>
            @endcan


            <div><input type="hidden" id="fecha" name"fecha" value="{{ $hoy }}"> </div>
            <div><input type="hidden" id="hora" name"hora" value="{{ $hora }}"> </div>
            <div><input type="hidden" id= "nombre" name="nombre" value=" {{$user_nombre}}"></div>
            <div><input type="hidden" id= "cedula" name="cedula" value=" {{$user_cedula}}"></div>
            <div><input type="hidden" name="breakin" id="breakin"></div>
            <div><input type="hidden" name="breakout" id="breakout"></div>
            <div><input type="hidden" name="almuerzoin" id="almuerzoin"></div>
            <div><input type="hidden" name="almuerzoout" id="almuerzoout"></div>
            <div><input type="hidden" name="capacitacion" id="capacitacion"></div>
            <div><input type="hidden" name="pausas" id="pausas"></div>
            <div><input type="hidden" name="daño" id="daño"></div>
            <div><input type="hidden" name="evaluacion"   id="evaluacion"></div>
            <div><input type="hidden" name="retro" id="retro"></div>
            <div><input type="hidden" name="reunion" id="reunion"></div>
            <div><input type="hidden" name="reunion" id="reunion" value="{{ $llave }}"></div>



        <form action="{{ url('/ciclo')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">

           <div class="container">
               <div class="pull-right">
                   <div class="col-md-12">
                       <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

           <table class="table table-ligth table-hover">
            <thead class="thead-dark">
                <tr>
                   <th scope="col">#</th>
                   <th scope="col">Fecha de registro</th>
                   <th scope="col">Nombre</th>
                   <th scope="col">Ingreso</th>
                   <th scope="col">Salida</th>
                   <th scope="col">Tiempo de Conexión</th>
                   <th colspan="3">Acciones</th>
                   </tr>
           </thead>
           <tbody>
           @foreach ($ciclosos as $ciclo)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$ciclo->fecha}}</td>
                    <td>{{$ciclo->nombre}}</td>
                    <td>{{$ciclo->ingreso}}</td>
                    <td>{{$ciclo->salida}}</td>
                    <td>{{$ciclo->total}}</td>
                <td>
                <form action="{{url('/ciclosalida/'.$ciclo->id)}}" method="post">
                        @csrf
                        {{--  @method('DELETE')  --}}
                <a href="{{url('/ciclosalida/'.$ciclo->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Mas</a>
                {{--  <button class="btn btn-warning btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>  --}}
                </form>
                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                         </table>

</div>
</div>
</div>
</div>


@endsection





@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
Swal.fire(
  'Cada Mininuto Cuenta',
  'Registra todos los tiempos de tu jornada',
  'success'
)
</script>
@stop

