@extends('adminlte::page')
@section('content')
<div class="pull-right">
    <div class="col-md-12">
        <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        </body>
        <form action="{{ url('/Registro')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
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

                </body>


                <div class="card-group">
                    <div class="card" >

                      <div class="card-body" style="border: #1d4862 3px solid; background-image: linear-gradient(#EAF2F8, #AAB7B8);)">

                        <strong><p class="card-text">Registre Aqui su hora de llegada</p></strong>
                        <br>
                        {{-- <p class="card-text"><small class="text-muted">Ultimo registro  {{ $ago }} </small></p> --}}
                        <input type='submit' class="btn btn-primary" name='boton1' value='INGRESO' style="width: 10rem;" >



                    </div>
                    </div>


                    <div class="card" >

                        <div class="card-body" style="border: #1d4862 3px solid; background-image: linear-gradient(#EAF2F8, #AAB7B8);)">

                          <strong><p class="card-text">Registre Aqui el ingreso al break</p></strong>
                          <br>
                          {{-- <p class="card-text"><small class="text-muted">Ultimo registro  {{ $ago }} </small></p> --}}
                          <input type='submit' class="btn btn-primary" name='boton1' value='BREAK IN' style="width: 10rem;" >



                      </div>
                      </div>
                    <div class="card">
                      <img class="card-img-top" src="..." alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                  <br><br>
                  <div class="card-group">
                    <div class="card">
                      <img class="card-img-top" src="..." alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="..." alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="..." alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>




<div class="container">
    <div class="card-group">
        <div class="card">
          <div class="card-body">
    <form id='registro' action="entrada" name='boton' method="POST" role="form" >
                         <div class="card text-white bg-warning mb-3" style="max-width: 18rem;" >
                         <div class="card-header">Entrada de turno</div>
                         <div class="card-body">
                         @csrf
                         <h5 class="card-title">Registre su Ingreso {{Auth::user()->name}}</h5>
                <p class="card-text"></p>
                <input type='submit' class="btn btn-light" name='boton' value='Entrada' style="width: 10rem;">
                </div>
                </form>
                </div>
    <form id='break_in' action="break_in" name='boton1' method="POST" role="form" >
                         <div class="card text-white bg-info mb-3" style="max-width: 18rem;" >
                         <div class="card-header">Descanso</div>
                         <div class="card-body">
                         @csrf
                         <h5 class="card-title"></h5>
                <p class="card-text">Se registrara el inicio de su descanso</p>
                <input type='submit' class="btn btn-light" name='boton1' value='Descanso' style="width: 10rem;" >
                </div>
                </div>
                </form>

    <form id='break_out' action="break_out" name='boton2' method="POST" role="form">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;" >
                         <div class="card-header">Fin Descanso</div>
                         <div class="card-body">
                         @csrf
                         <h5 class="card-title"></h5>
                <p class="card-text">Se registrara el fin de su descanso</p>
                <input type='submit' class="btn btn-light" name='boton2' value='Fin Descanso' style="width: 10rem;">
                </div>
                </div>
                </form>
            </div>




                <div class="card">
                  <div class="card-body">

    <form id='almuerzo' action="almuerzo" name='boton3' method="POST" role="form" >
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                         <div class="card-header">Almuerzo</div>
                         <div class="card-body">
                         @csrf
                         <h5 class="card-title"></h5>
                <p class="card-text">Se registrara el inicio de almuerzo</p>
                <input type='submit' class="btn btn-light" name='boton3' value='Almuerzo' style="width: 10rem;">
                </div>
                </div>
                </form>

    <form id='almuerzo_out' action="almuerzo_out" name='boton4' method="POST" role="form" >
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                         <div class="card-header">Fin almuerzo</div>
                         <div class="card-body">
                         @csrf
                         <h5 class="card-title"></h5>
                <p class="card-text">Se registrara el final de almuerzo</p>
                <input type='submit' class="btn btn-light" name='boton4' value='Fin Almuerzo' style="width: 10rem;">
                </div>
                </div>
                </form>

    <form id='salida' action="salida" name='boton5' method="POST" role="form" >
        <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header">Salida</div>
                        <div class="card-body">
                        @csrf
                        <h5 class="card-title"></h5>
                <p class="card-text">Se registrara su hora de salida</p>
                <input type='submit' class="btn btn-light" name='boton5' value='Salida' style="width: 10rem;">
                </div>
                </div>
                </form>

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

