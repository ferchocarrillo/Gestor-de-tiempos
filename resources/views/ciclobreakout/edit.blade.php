@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="css/simplyCountdown.theme.default.css"/>
<script src="\js\simplyCountdown.min.js"></script>
<script src="\js\countdown.js"></script>
<div class="pull-right">
    <div class="col-md-12">
        <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        </body>

<style>

    .botones{
        border-radius: 0.75rem;
        width: 7rem;
        background-color: #51abba;
        border: #36738c;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-weight: bold;
        margin-bottom: 2rem;


}
.botones:hover{
    background-color: #36738c;
    color:#ebf2f3;
    border: #51abba;
    margin-bottom: 1rem;


}
.botonesinactivos{
    border-radius: 0.75rem;
    width: 7rem;
    background-color: #51abba;
    border: #36738c;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

.botonpeque{


    border-radius:0.75rem
    width: 6.5rem;
    background-color: #51abba;
    border: #36738c;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight: bold;
    }

.botonpeque:hover{
        background-color: #36738c;
        color:#ebf2f3;
        border: #51abba;

    }

    .botonpequeinactivo{

        border-radius:0.75rem;
        width: 6.5rem;
        background-color: #51abba;
        border: #36738c;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
.card-boton{

    background-color: transparent;

}
.card-bodyNew{
    border: #060707 3px solid;
    border-radius:0.75rem;
    background-image: linear-gradient(#EAF2F8, #AAB7B8)
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
 }
.card-bodyNew:hover{
    background-image: linear-gradient(#53a7b0, #AAB7B8);
 }
 .card-bodyNew1{
    border: #060707 3px solid;
    border-radius:0.75rem;
    background-image: linear-gradient(#596164, #154762)
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
 }
img:hover {
    transform: scaleX(-1);
  }
.imglogo{
    float: center;
    height: 40;
    width: 140;
  }
  a{
      font-size: 18px;
      color: #2965fd;
      -webkit-text-stroke: 0.7px rgb(0, 0, 0);

  }
  p{
      text-align: left;
  }
  .datos{
      text-align: right;
  }
e{
    text-align: right;
    margin-top: 2em;
    margin-left: 5em;
}
b{
    text-align: left;
    align-content: left;
}
</style>



            <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <img src="\theme\images\isotipo-slogan.png" float="left" height="40" width="140">
            <h3 style="font-family: Georgia, Verdana, sans-serif; font-weight: bold; text-transform: uppercase;">{{ Auth::user()->name }}</h3>
            <h1 style="font-weight: bold; text-aline:center;">ESTAS EN BREAK</h1>

        </center>
        <div class="row">
        <div class="card" style="background-color: transparent; width:100%" >
                <center>  <body input type ="time" style="font-size: 20px;  border-radius:0.75rem;" onload="HoraActual(<?php echo date("H").", ".date("i").", ".date("s"); ?>)" >
                  <div id="contenedor_reloj" style="width: 400px; font-size:30px; font-family: Lucida Console, Courier New , monospace; text-align:center; margin-left:0;"></div>
                    <link rel="shortcut icon" href="">
            <div style=" margin-left:0;">
                <script>
                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                    var f=new Date();
                    document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                </script>
            </div>

                </body>
            </div>
            </div>


            {{--  @foreach ($ciclosos as $ciclosos)
            <div><input type="text" id= "ingreso" name="ingreso" value=" {{$ciclosos->ingreso}}"></div>

            @endforeach  --}}
            <div><input type="hidden" name= "ingreso" id="ingreso" value="{{ old('ingreso', $ciclosos->ingreso)}}"></div>

            <div><input type="hidden" name="llave" id="llave" value="{{ $llave }}"></div>



    </body>




        <div id="cuenta"></div>
        <center>

            <div class="card-group" >
                <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                    <div class="card-bodyNew1">
                      <strong><p class="card-text" >Turno</p></strong>
                      <center><img src="\theme\images\turno.png" alt=""  width="170px" height="170px"></center>
                      <br><br>
                      <p class="card-text"><small class="text-muted2"><b>Entrada:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<e> {{ old('ingreso', $ciclosos->ingreso)}} </e></small></p>
                      <p class="card-text"><small class="text-muted2"><b>Salida:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<e>{{ old('salida', $ciclosos->salida)}}</e> </small></p>
                      <p class="card-text"><small class="text-muted2"><b>Horas de conexion: </b>  {{ $ciclosos->total }} </small></p>
                  </div>
                  </div>



                <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                    <div class="card-bodyNew">


                        <form action="{{url('/ciclobreakout/'.$ciclosos->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            {{csrf_field()}}
                            @method('PATCH')



                        <strong><p class="card-text">Break</p></strong>
                        <br>
                      <center><img src="\theme\images\cafe.png" alt=""  width="140px" height="140px"></center>
                      <br><br>
                          <div><input type="hidden" id="hoy" name"hoy" value="{{ $hoy }}"> </div>
                          <div><input type="hidden" id="hora" name"hora" value="{{ $hora }}"> </div>
                          <div><input type="hidden" id= "nombre" name="nombre" value=" {{$user_nombre}}"></div>
                          <div><input type="hidden" id= "cedula" name="cedula" value=" {{$user_cedula}}"></div>
                      <div><input type="hidden" name= "breakin" id="breakin" value="{{ old('breakin', $ciclosos->breakin)}}"></div>
                      <div><input type="hidden" name= "breakout" id="breakout" value="{{ $hora }}"></div>

                      <input type='submit' class="botones"  value='Fin'>
                      <br>
                      <p class="card-text"><small class="text-muted2"><b>Inicio:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<e> {{ old('breakin', $ciclosos->breakin)}} </e></small></p>
                      <p class="card-text"><small class="text-muted2"><b>Tiempo de Break</b>  {{ $ciclosos->timebreak }}<b> minutos</b></small></p>

                    </form>
                    </div>
                  </div>

                <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);" >

                    <div class="card-bodyNew1">

                      <strong><p class="card-text">Almuerzo</p></strong>
                      <br>
                      <center><img src="\theme\images\cubiertos.png" alt=""  width="190px" height="160px"></center>
<br>
                      <p class="card-text"><small class="text-muted2"><b>Hora Entrada:</b><e> {{ old('almuerzo', $ciclosos->almuerzo)}} </e></small></p>
                      <p class="card-text"><small class="text-muted2"><b>Hora Salida: </b><e>&nbsp;&nbsp;&nbsp; {{ old('almuerzoout', $ciclosos->almuerzoout)}} </e></small></p>
                      <p class="card-text"><small class="text-muted2">Tiempo de Almuerzo {{ old('timelunch', $ciclosos->timelunch)}} minutos</small></p>
                </div>
                  </div>
                  <div class="card"  style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

                    <div class="card-bodyNew1">


                      <strong><p class="card-text">Capacitación</p></strong>
                      <br>

                      <center><img src="\theme\images\capacitacion.png" alt=""  width="100px" height="110px" ></center>

<div class="card-boton">
    <div class="row">

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


        <p class="card-text"><small class="text-muted2">Tiempo de Capacitación {{ old('timecap', $ciclosos->timecap)}} </small></p>
    </div>
</div>

                  </div>
                  <div class="card-bodyNew1">


                    <strong><p class="card-text">Pausas Activas</p></strong>
                    <br>
                    <center><img src="\theme\images\pausas.png" alt=""  width="100px" height="110px" ></center>
                    <div class="card-boton">
                        <div class="row">

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <p class="card-text"><small class="text-muted2">Tiempo de Pausas Activas  {{ old('timepau', $ciclosos->timepau)}} </small></p>
                        </div>
                    </div>
                </div>
                  </div>
                  <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

                    <div class="card-bodyNew1">


                        <strong><p class="card-text">Equipo Dañado</p></strong>
<br>
                        <center><img src="\theme\images\dañado.png" alt=""  width="100px" height="110px"  ></center>

                        <div class="card-boton">
                            <div class="row">

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <p class="card-text"><small class="text-muted2">Tiempo de Daño de Equipo {{ old('timedaño', $ciclosos->timedaño)}} </small></p>
                            </div>
                        </div>
                    </div>
                  <div class="card-bodyNew1">




                        <strong><p class="card-text">Evaluación</p></strong>
                        <br>

                        <center><img src="\theme\images\evalluaciones.png" alt=""  width="100px" height="110px"  margin></center>
                        <div class="card-boton">
                            <div class="row">

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <p class="card-text"><small class="text-muted2">Tiempo de evaluacion  {{ old('timeeva', $ciclosos->timeeva)}} </small></p>
                            </div>
                        </div>
                    </div>


                  </div>
                  <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

                    <div class="card-bodyNew1">


                        <strong><p class="card-text">Retroalimentación</p></strong>
                        <br>
                        <center><img src="\theme\images\retroa.png" alt=""  width="100px" height="110px"  margin></center>
                        <div class="card-boton">
                            <div class="row">

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <p class="card-text"><small class="text-muted2">Tiempo de Retroalimentacion  {{ old('timeretro', $ciclosos->timeretro)}} </small></p>
                            </div>
                        </div>
                    </div>
                  <div class="card-bodyNew1">




                        <strong><p class="card-text">Reunión</p></strong>
                        <br>
                        <center><img src="\theme\images\REUNION.png" alt=""  width="100px" height="110px"  margin></center>
                        <div class="card-boton">
                            <div class="row">

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <p class="card-text"><small class="text-muted2">Tiempo de Reunion  {{ old('timereunion', $ciclosos->timereunion)}} </small></p>
                            </div>
                        </div>
                    </div>


                  </div>




            </div>
            <br>
            <p style="text-align: center; aline-contents: center;"><i class="fa fa-copyright" aria-hidden="true">Todos los Derechos Reservados, Elaborado para Mentius S.A. Colombia 2021</i></p>
        </div>
        </div>
        @endsection

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
<script src="{{asset('js/app.js')}}"></script>
              </body>
              @section('css')
              <link rel="stylesheet" href="/css/admin_custom.css">
              @stop
              @section('js')
      <script>
      Swal.fire(
        'TERMINAR BREAK',
        'Actualiza los datos de los postulados',
        'success'
      )
      </script>
      @stop



