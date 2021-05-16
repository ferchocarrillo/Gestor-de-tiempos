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
        width: 16rem;
        height: 2rem;
        background-color: #51abba;
        border: #36738c;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-weight: bold;
        align-content: center;


}
.botones:hover{
    background-color: #36738c;
    color:#ebf2f3;
    border: #51abba;

}
.botonesinactivos{
    border-radius: 0.75rem;
    width: 16rem;
    height: 2rem;
    background-color: #073841;
    border: #36738c;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color: #EAF2F8;
    font-size: 14px;
}

.botonpeque{

    border-radius: 0.75rem;
    width: 3.5rem;
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

        border-radius: 0.75rem;
        width: 3.5rem;
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
img:hover {
    transform: scaleX(-1);
  }
.imglogo{
    float: center;
    height: 40;
    width: 140;
  }
  .input-small{
width: 30px;
background-color: transparent;
border: none;
  }
  a{
      font-size: 18px;
      color: #29a8fd;
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
rem{
  color: rgb(0, 0, 0);
  background-color: papayawhip;
  font-size:20px;
  align-self: center;
  width: 70px;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-weight: bold;
  border-radius: 0.45em;
  align-self: center;
}
rem2{
  color: rgb(255, 255, 255);
  background-color: rgb(233, 29, 11);
  font-size:20px;
  align-self: center;
  width: 70px;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-weight: bold;
  border-radius: 0.45em;
  align-self: center;
}




</style>


           <form action="{{url('/ciclosalida/'.$ciclosos->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
           {{csrf_field()}}
           <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
           <img src="\theme\images\isotipo-slogan.png" float="left" height="40" width="140">
           <br><br>
           <h3 style="font-family: Georgia, Verdana, sans-serif; font-weight: bold; text-transform: uppercase;">BIENVENIDO {{ Auth::user()->name }}</h3>
           <h1 style="font-weight: bold; text-aline:center;">PANEL DE REGISTRO DE TIEMPOS</h1>
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
            <div><input type="hidden" name= "ingreso" id="ingreso" value="{{ old('ingreso', $ciclosos->ingreso)}}"></div>

            <div><input type="hidden" name="llave" id="llave" value="{{ $llave }}"></div>
    </body>
        <div id="cuenta"></div>
        <center>
            <div class="card-group" >
                <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

                  <div class="card-bodyNew">
                    <strong><p class="card-text" >Turno</p></strong>
                    <br><br>
                    <center><img src="\theme\images\turno.png" alt=""  width="170px" height="170px"></center>
                    <br>
                <form action="{{ url('/ciclosalida/'.$ciclosos->id, 'edit')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                      {{csrf_field()}}
                      @method('PATCH')
                    <div><input type="hidden" id="fecha" name"fecha" value="{{ $hoy }}"> </div>
                    <div><input type="hidden" id="hora" name"hora" value="{{ $hora }}"> </div>
                    <div><input type="hidden" id= "nombre" name="nombre" value=" {{$user_nombre}}"></div>
                    <div><input type="hidden" id= "cedula" name="cedula" value=" {{$user_cedula}}"></div>
                    <div><input type="hidden" name="salida" id="salida" value="{{ $hora }}"></div>
                <br>
                @if(empty($ciclosos->salida))
                <input type='submit' class="botones" value='Registrar Salida'>
                    @else
                    <input type='submit' class="botonesinactivos"  value=' SALIDA DE TURNO REGISTRADA'  disabled>
                   @endif

                <br><br>
                    <p class="card-text"><small class="text-muted2">Ingreso&nbsp;&nbsp; <e> {{ old('ingreso', $ciclosos->ingreso)}} </e></small></p>
                    <p class="card-text"><small class="text-muted2">Salida&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<e>{{ old('salida', $ciclosos->salida)}}</e> </small></p>
                    @if (empty($ciclosos->salida))
                    <p class="card-text"><small class="text-muted2"><b>Horas de Conexión: </b><rem>0</rem> </small></p>
                    @else
                    <p class="card-text"><small class="text-muted2"><b>Horas de Conexión: </b><rem> {{ $total }} </rem></small></p>
                    @endif
                    <input type="hidden" name="total" id="total" value="{{$total}}">
                </form>
            </div>
        </div>
                 <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                    <div class="card-bodyNew">



                    <strong><p class="card-text">Break</p></strong>
                    <br><br>
                    <center><img src="\theme\images\cafe.png" alt=""  width="140px" height="140px"></center>
                    <br>    <br><br>

                    @if(empty($ciclosos->breakout))
                    <button class="botones"><a href="{{url('/ciclobreakin/'.$ciclosos->id.'/edit')}}">Registrar break</a></button>
                    @else
                    <input type='submit' class="botonesinactivos"  value='BREAK YA REGISTRADO'  disabled>
                    @endif
                     <br> <br>
                    <p class="card-text"><small class="text-muted2">Inicio&nbsp;&nbsp;&nbsp;<e> {{ old('breakin', $ciclosos->breakin)}} </e></small></p>
                    <p class="card-text"><small class="text-muted2">Fin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<e>{{ old('breakout', $ciclosos->breakout)}}</e> </small></p>

                   @if ($timebreak > 20)
                   <p class="card-text"><small class="text-muted2"><b>Tiempo de Break</b>&nbsp;&nbsp;<rem2>&nbsp;&nbsp; {{ $timebreak }}&nbsp;&nbsp;</rem2>&nbsp;&nbsp;<b> minutos</b></small></p>
                   @else
                   <p class="card-text"><small class="text-muted2"><b>Tiempo de Break</b>&nbsp;&nbsp;<rem> &nbsp;&nbsp;{{ $timebreak }}&nbsp;&nbsp;</rem>&nbsp;&nbsp;<b> minutos</b></small></p>
                   @endif

                    </div>
                  </div>



                <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);" >

                    <div class="card-bodyNew">

                      <strong><p class="card-text">Almuerzo</p></strong>
                      <br><br>
                      <center><img src="\theme\images\cubiertos.png" alt=""  width="170px" height="140px"></center>

                      <br>
                    <br>
                    <br>
                    @if(empty($ciclosos->almuerzo))
                   <button class="botones"><a href="{{url('/ciclolunch/'.$ciclosos->id.'/edit')}}">Registrar Lunch</a></button>
                    @else
                   <input type='submit' class="botonesinactivos"  value='ALMUERZO YA REGISTRADO'  disabled>
                    @endif
                   <br><br>
                    <p class="card-text"><small class="text-muted2">Inicio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <e> {{ old('almuerzo', $ciclosos->almuerzo)}} </e></small></p>
                    <p class="card-text"><small class="text-muted2">Fin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<e>{{ old('almuerzoout', $ciclosos->almuerzoout)}}</e> </small></p>
                    @if ($timelunch > 60)
                   <p class="card-text"><small class="text-muted2"><b>Tiempo de Almuerzo</b>&nbsp;&nbsp;<rem2>&nbsp;&nbsp; {{ $timelunch }}&nbsp;&nbsp;</rem2>&nbsp;&nbsp;<b> minutos</b></small></p>
                    @else
                    <p class="card-text"><small class="text-muted2"><b>Tiempo de Almuerzo</b>&nbsp;&nbsp;<rem> &nbsp;&nbsp;{{ $timelunch }}&nbsp;&nbsp;</rem>&nbsp;&nbsp;<b> minutos</b></small></p>
                    @endif
                </div>
                  </div>
                  <div class="card"  style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

                    <div class="card-bodyNew">


                      <strong><p class="card-text">Capacitación</p></strong>
                      <br>

                      <center><img src="\theme\images\capacitacion.png" alt="" width="100px" height="110px" ></center>

<div class="card-boton">
    <div class="row">


        @if(empty($ciclosos->capout))
        <button class="botones"><a href="{{url('/ciclocapa/'.$ciclosos->id.'/edit')}}">Registrar Capacitación</a></button>
        @else
        <input type='submit' class="botonesinactivos"  value='CAPACITACION YA REGISTRADA'  disabled>
        @endif
        <br>
        <br>
        @if (empty($ciclosos->capout))
        <p class="card-text"><small class="text-muted2"><b>Tiempo de Capacitacion: </b><rem>0</rem> </small></p>
        @else
        <p class="card-text"><small class="text-muted2"><b>Tiempo de Capacitación: </b><rem> {{ $timecapa }} </rem></small></p>
        @endif

    </div>
</div>

                  </div>
                  <div class="card-bodyNew">


                    <strong><p class="card-text">Pausas Activas</p></strong>
                    <br>
                    <center><img src="\theme\images\pausas.png" alt=""  width="100px" height="110px"   ></center>
                    <div class="card-boton">
                        <div class="row">

                            @if(empty($ciclosos->pausasout))
                            <button class="botones"><a href="{{url('/ciclopausas/'.$ciclosos->id.'/edit')}}">Registrar Pausas</a></button>
                                @else
                                <input type='submit' class="botonesinactivos"  value='PAUSA REGISTRADA'  disabled>
                               @endif
                            <br>
                            <br>
                            @if (empty($ciclosos->pausasout))
                            <p class="card-text"><small class="text-muted2"><b>Tiempo de Pausas Activas: </b><rem>0</rem> </small></p>
                            @else
                            <p class="card-text"><small class="text-muted2"><b>Tiempo de Pausas Activas: </b><rem>  {{ $timepausas }}</rem> </small></p>
                            @endif

                        </div>
                    </div>
                </div>
                  </div>
                  <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

                    <div class="card-bodyNew">


                        <strong><p class="card-text">Equipo Dañado</p></strong>
<br>
                        <center><img src="\theme\images\dañado.png" alt=""  width="100px" height="110px"    ></center>

                        <div class="card-boton">
                            <div class="row">
                                @if(empty($ciclosos->dañoout))
                                <button class="botones"><a href="{{url('/cicloaveria/'.$ciclosos->id.'/edit')}}">Registrar Daño</a></button>
                                @else
                                <input type='submit' class="botonesinactivos"  value='AVERIA REGISTRADA'  disabled>
                                @endif


                                <br>
                                <br>
                                @if (empty($ciclosos->dañoout))
                            <p class="card-text"><small class="text-muted2"><b>Tiempo de Daño de Equipo: </b><rem> 0 </rem> </small></p>
                            @else
                            <p class="card-text"><small class="text-muted2"><b>Tiempo de Daño de Equipo: </b><rem>  {{ $timedaño }}</rem> </small></p>
                            @endif

                            </div>
                        </div>
                    </div>
                  <div class="card-bodyNew">




                        <strong><p class="card-text">Evaluación</p></strong>
                        <br>

                        <center><img src="\theme\images\evalluaciones.png" alt=""  width="100px" height="110px"  margin></center>
                        <div class="card-boton">
                            <div class="row">

                                @if(empty($ciclosos->evaluacionout))
                                <button class="botones"><a href="{{url('/cicloeva/'.$ciclosos->id.'/edit')}}">Registrar Evaluación</a></button>
                                    @else
                                    <input type='submit' class="botonesinactivos"  value='EVALUACION REGISTRADA'  disabled>
                                   @endif
                                <br>
                                <br>
                                @if (empty($ciclosos->evaluacionout))
                            <p class="card-text"><small class="text-muted2"><b>Tiempo de Evaluación: </b><rem> 0 </rem> </small></p>
                            @else
                            <p class="card-text"><small class="text-muted2"><b>Tiempo de Evaluación: </b><rem>  {{ $timeeva }}</rem> </small></p>
                            @endif

                            </div>
                        </div>
                    </div>


                  </div>
                  <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

                    <div class="card-bodyNew">


                        <strong><p class="card-text">Retroalimentación</p></strong>
                        <br>
                        <center><img src="\theme\images\retroa.png" alt=""  width="100px" height="110px" ></center>
                        <div class="card-boton">
                            <div class="row">
                                @if(empty($ciclosos->retroout))
                                <button class="botones"><a href="{{url('/cicloretro/'.$ciclosos->id.'/edit')}}">Registrar Retro</a></button>
                                    @else
                                    <input type='submit' class="botonesinactivos"  value=' RETROALIMENTACION REGISTRADA'  disabled>
                                   @endif
                                   <br>
                                   <br>
                                   @if (empty($ciclosos->retroout))
                                   <p class="card-text"><small class="text-muted2"><b>Tiempo de Retroalimentacion: </b><rem> 0 </rem> </small></p>
                                   @else
                                   <p class="card-text"><small class="text-muted2"><b>Tiempo de Retroalimentacion: </b><rem>  {{ $timeretro }}</rem> </small></p>
                                   @endif
                            </div>
                        </div>
                    </div>
                  <div class="card-bodyNew">




                        <strong><p class="card-text">Reunión</p></strong>
                        <br>
                        <center><img src="\theme\images\REUNION.png" alt=""  width="100px" height="110px" ></center>
                        <div class="card-boton">
                            <div class="row">

                                @if(empty($ciclosos->reunionout))
                                <button class="botones"><a href="{{url('/cicloreunion/'.$ciclosos->id.'/edit')}}">Registrar Reunión</a></button>
                                    @else
                                    <input type='submit' class="botonesinactivos"  value=' REUNION REGISTRADA'  disabled>
                                   @endif

                                <br>
                                <br>
                                @if (empty($ciclosos->reunionout))
        <p class="card-text"><small class="text-muted2"><b>Tiempo de Reunión: </b><rem>0</rem> </small></p>
        @else
        <p class="card-text"><small class="text-muted2"><b>Tiempo de Reunión: </b><rem> {{ $timereunion }} </rem></small></p>
        @endif

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


