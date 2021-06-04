@extends('adminlte::page')
@section('content')

<div class="pull-right">
    <div class="col-md-12">
        <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        </body>
        <style>
            .logo{
               float: center;

            }

           .historico{

               align-content: left;
               border-radius: 0.75em;
               width: 35%;
               align-self: left;
               float: left;
               color: #e7ecee;
               background-color: #73abbb;
               height: 50px;
               font-size: 12px;
               box-shadow:15px 16px 30px -2px #73abbb ;
           }
           .historico:hover{
               background-color: #1c4c64;
               color: #73abbb;
               box-shadow:15px 16px 30px -2px #b2c3c7 ;


           }

       .title{
           font-size: 20px;
           text-align: left;
           font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

       }

           .card{
               background-image: linear-gradient(#EAF2F8, #AAB7B8);
               border: #1c4c64;
           }
       .card-boton{

       background-color:#73abbb;
       width: 150px;
       height: 50px;
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
       width: 250px;
       height: 40px;
       border-radius: 0.5rem;
       border-style: solid;
       border-width: 1px;
       box-shadow:5px  10px #1c4c64;
       }
       .a.botonIndex[type=boton]{
           background-attachment: fixed;
           background-color: #cfd0d0;
           margin-top: 2rem;
           width: 250px;
           height: 40px;
           border-radius: 0.5rem;
           border-style: solid;
           border-width: 1px;
           cursor: pointer;
           box-shadow:5px  10px #1c4c64;
       }
       .botonIndex {

           background-attachment: fixed;
           background-color: #cfd0d0;
           margin-top: 0.3rem;
           width: 120px;
           font-size: 10px;
           margin-bottom: 2rem;
           height: 30px;
           border-radius: 0.5rem;
           border-style: solid;
           border-width: 1px;
           box-shadow:5px  10px #1c4c64;

           }
       .botonIndex:hover {
           background-attachment: fixed;
           background-color: #cfd0d0;
           box-shadow:5px  10px #1c4c64;

           margin-top: 0.3rem;
           width: 120px;
           font-size: 10px;
           margin-bottom: 2rem;
           height: 30px;
           border-radius: 1rem;
           color: #1c4c64;
           font-style: normal;

           }
                       </style>
        <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
         <div class="col-md-12">
            <center><h3 align="center">  </h3></center>
        </div>
        <div class="card-group">
            <div class="card">
              <img class="card-img-top" src="..." alt="">
              <div class="card-body">
                <p><h2 style="text-transform: capitalize" class="title">BIENVENIDO {{ Auth::user()->name }}</h2></p>
                <br>
                <div><button class="historico"><a href="{{url('/historico')}}" style="color: #EAF2F8">Ver Registros Anteriores</a></button></div>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="\theme\images\isotipo-slogan.png" alt="Card image cap">
              <div class="card-body">
                <p><body input type = "time" onload="HoraActual(<?php echo date("H").", ".date("i").", ".date("s"); ?>)"></p>
                    <p><e><div style="font-size: 50px" id="contenedor_reloj"></div></e></p>
                    <p><link rel="shortcut icon" href="" ></p>
                    <script>
                        var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                        var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                        var f=new Date();
                        document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                    </script>
              </div>
            </div>
                        <div class="card">
              <img class="card-img-top" src="..." alt="">
              <div class="card-body">
                <p><h2 style="text-transform: capitalize" class="title"></h2></p>
                <br>
                <div></div>

              </div>
            </div>
            {{csrf_field()}}
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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


                </body>
            </div>

            <center>






            @if (empty($llave))

            <input type='submit' class="botonIndex" id= "turnoin" name='turnoin' value='INGRESO YA REGISTRADO' disabled >
            @else

            @can('haveaccess','ciclo.index')
            <form name="myBtn" id="myBtn" action="{{ url('/ciclo')}}" method="POST" enctype="multipart/form-data" class="form-horizontal" >
                {{csrf_field()}}
           <div class="card-boton">
            <input type='submit' class="botonIndex" id= "turnoin" name='turnoin' value='INICIO DE TURNO'>
        </div>
    </form>
            @endcan
            @endif
        </center>
            <div><input type="hidden" id="hora" name"hora" value="{{ $hora }}"> </div>
            <div><input type="hidden" id= "nombre" name="nombre" value=" {{$user_nombre}}"></div>
            <div><input type="hidden" id= "cedula" name="cedula" value=" {{$user_cedula}}"></div>
            <div><input type="hidden" name="llave" id="llave" value="{{ $llave }}"></div>
        <form   action="{{ url('/ciclo')}}" method="POST" enctype="multipart/form-data" class="form-horizontal" >
            <div><input type="hidden" id="fecha" name"fecha" value="{{ $hoy }}"> </div>
           <div class="container">
               <div class="pull-right">
                   <div class="col-md-12">
                       <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
           <table class="table table-ligth table-hover">
            <thead class="thead-dark">
                <tr>
                   <th scope="col">#</th>
                   <th scope="col">Fecha de Registro</th>
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
<br>
<p style="text-align: center; aline-contents: center;"><i class="fa fa-copyright" aria-hidden="true">Todos los Derechos Reservados, Elaborado para Mentius S.A. Colombia 2021</i></p>
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
  'REGISTRA TU ENTRADA CON EL BOTON NUEVO INGRESO',
  'success'
)
</script>
@stop


