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
        width: 8rem;
        font-size: 12px;
        height: 2rem;
        background-color: #51abba;
        border: #ffffff;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        align-content: center;
        border-style: solid;
}
.botones:hover{
        background-color: #36738c;
        color:#ebf2f3;
        border: #51abba;
}
.botonessmall{
    border-radius: 0.75rem;
    width: 8rem;
    font-size: 8px;
    height: 1rem;
    background-color: #51abba;
    border: #36738c;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    align-content: center;
}
.botonessmall:hover{
    background-color: #36738c;
    color:#ebf2f3;
    border: #51abba;
}


.botonesinactivos{
    border-radius: 0.75rem;
    width: 8rem;
    font-size: 8px;
    height: 2rem;
    background-color: #073841;
    border: #36738c;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color: #EAF2F8;

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
    background-image: linear-gradient(#EAF2F8, #AAB7B8);

    -ms-flex: 1 1 auto;
        flex: 1 1 auto;
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

    font-size: 10px;

      color: #29a8fd;
      -webkit-text-stroke: 0.7px rgb(0, 0, 0);

  }
  p{
      text-align: left;
      font-size: 16px;
      color: #EAF2F8;
      -webkit-text-stroke: 0.7px rgb(0, 0, 0);

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
  font-size:14px;
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
  font-size:14px;
  align-self: center;
  width: 70px;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-weight: bold;
  border-radius: 0.45em;
  align-self: center;
}
small{

    font-size: 10px;
}
.card-space{
    width: 340px;
    height:230px;

    background-image: linear-gradient(#EAF2F8, #AAB7B8);
}
{{--  .card-space:hover{
    box-sizing:border-box;
    display:block;
    width: 340px;        /*Ancho de la imagen nueva, aunque en este caso son iguales.*/
    height:230px;;       /*Alto de la imagen nueva, aunque en este caso son iguales.*/
    padding-left:340px; /*Padding igual al ancho de la imagen nueva*/
    overflow:hidden;
}  --}}






.container-a{

    background-color: #060707;


}
.container-b{


    margin-left: 38rem;

}

.card-text{
font-size: 12px;

}
iconos{
    width=  70px;
    Height= 70px;

}
</style>

<div class="row">
    <div class="col-sm-6">
   <div class="card" style="background-color: transparent; height: 60;" >
           <form action="{{url('/ciclosalida/'.$ciclosos->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
           {{csrf_field()}}
           <h6 style="font-family: Georgia, Verdana, sans-serif; font-weight: bold; text-transform: uppercase;">BIENVENIDO {{ Auth::user()->name }}</h6>
           <h6 style="font-weight: bold; text-aline:center;">PANEL DE REGISTRO DE TIEMPOS</h6>

    </div>
</div>
<div class="col-sm-6">
    <div class="card" style="background-color: transparent; height: 60;" >
   <body input type ="time" onload="HoraActual(<?php echo date("H").", ".date("i").", ".date("s"); ?>)"  >
                  <div id="contenedor_reloj" style="margin-left:28rem;"></div>
                    <link rel="shortcut icon" href="" >

                <div style="margin-left:20rem;"><script>
                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                    var f=new Date();
                    document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                </script>
            </div>
            </div>
            </body>
            </div>
        </div>
    </div>
            <div><input type="hidden" name= "ingreso" id="ingreso" value="{{ old('ingreso', $ciclosos->ingreso)}}"></div>
            <div><input type="hidden" name="llave" id="llave" value="{{ $llave }}"></div>
    </body>
    <div class="row">
        <div class="col-sm-4">
                    <div class="card-space">
                        <div class="card-bodyNew">
           <strong><p class="card-text" style="color:rgb(0, 0, 0)">Turno</p></strong>
           <div class="row">
            <div class="col-sm-6">
           <img src="\theme\images\turno.png" alt="" style="width: 140px; heigth:120px; margen-left: 23rem;">
        </div>
        <div class="col-sm-6">
       <form action="{{ url('/ciclosalida/'.$ciclosos->id, 'edit')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
             {{csrf_field()}}
             @method('PATCH')
           <div><input type="hidden" id="fecha" name"fecha" value="{{ $hoy }}"> </div>
           <div><input type="hidden" id="hora" name"hora" value="{{ $hora }}"> </div>
           <div><input type="hidden" id= "nombre" name="nombre" value=" {{$user_nombre}}"></div>
           <div><input type="hidden" id= "cedula" name="cedula" value=" {{$user_cedula}}"></div>
           <div><input type="hidden" name="salida" id="salida" value="{{ $hora }}"></div>

           <p class="card-text"><small class="text-muted2">Ingreso&nbsp;&nbsp; <e> {{ old('ingreso', $ciclosos->ingreso)}} </e></small></p>
           <p class="card-text"><small class="text-muted2">Salida&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<e>{{ old('salida', $ciclosos->salida)}}</e> </small></p>
           @if (empty($ciclosos->salida))
           <p class="card-text"><small class="text-muted2"><b>Horas de Conexión: </b><rem>0</rem> </small></p>
           @else
           <p class="card-text"><small class="text-muted2"><b>Horas de Conexión: </b><rem> {{ $total }} </rem></small></p>
           @endif
           @if(empty($ciclosos->salida))
           <input type='submit' class="botones" value='Registrar Salida'>
               @else
               <input type='submit' class="botonesinactivos"  value=' SALIDA DE TURNO REGISTRADA'  disabled>
              @endif
           <input type="hidden" name="total" id="total" value="{{$total}}">
        </div>
        </div>
       </form>
    </div>
</div>
                  </div>
                  <div class="col-sm-4">
                                <div class="card-space">
                                    <div class="card-bodyNew">
                       <strong><p class="card-text" style="color:rgb(0, 0, 0)">Break</p></strong>
                       <div class="row">
                        <div class="col-sm-6">

               <img src="\theme\images\cafe.png" alt="" style="width: 140px; heigth:130px; margen-left: 23rem;">
            </div>
            <div class="col-sm-6">

           <p class="card-text"><small class="text-muted2">Inicio&nbsp;&nbsp;&nbsp;<e> {{ old('breakin', $ciclosos->breakin)}} </e></small></p>
           <p class="card-text"><small class="text-muted2">Fin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<e>{{ old('breakout', $ciclosos->breakout)}}</e> </small></p>
          @if ($timebreak > 20)
          <p class="card-text"><small class="text-muted2"><b>Break</b>&nbsp;<rem2>&nbsp; {{ $timebreak }}&nbsp;</rem2>&nbsp;<b> minutos</b></small></p>
          @else
          <p class="card-text"><small class="text-muted2"><b>Break</b>&nbsp;<rem> &nbsp;{{ $timebreak }}&nbsp;</rem>&nbsp;<b> minutos</b></small></p>
          @endif

          @if(empty($ciclosos->breakout))
          <button class="botones"><a href="{{url('/ciclobreakin/'.$ciclosos->id.'/edit')}}">Registrar break</a></button>
          @else
          <input type='submit' class="botonesinactivos"  value='BREAK YA REGISTRADO'  disabled>
          <br>
          @endif
          &nbsp;
        </div>
    </div>
</div>
</div>
</div>
<div class="col-sm-4">
    <div class="card-space">
        <div class="card-bodyNew">
<strong><p class="card-text" style="color:rgb(0, 0, 0)">Almuerzo</p></strong>
<div class="row">
<div class="col-sm-6">
    <br>
             <img src="\theme\images\cubiertos.png" alt="" style="width: 140px; heigth:130px; margen-left: 23rem;">
            </div>
            <div class="col-sm-6">

           <p class="card-text"><small class="text-muted2">Inicio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <e> {{ old('almuerzo', $ciclosos->almuerzo)}} </e></small></p>
           <p class="card-text"><small class="text-muted2">Fin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<e>{{ old('almuerzoout', $ciclosos->almuerzoout)}}</e> </small></p>
            @if ($timelunch > 1)
           <p class="card-text"><small class="text-muted2"><b>Tiempo</b>&nbsp;&nbsp;<rem2>&nbsp;&nbsp; {{ $timelunch }}&nbsp;&nbsp;</rem2>&nbsp;&nbsp;<b> horas</b></small></p>

            @else
           <p class="card-text"><small class="text-muted2"><b>Tiempo</b>&nbsp;&nbsp;<rem> &nbsp;&nbsp;{{ $timelunch }}&nbsp;&nbsp;</rem>&nbsp;&nbsp;<b> horas</b></small></p>
            @endif
            @if(empty($ciclosos->almuerzo))
           <button class="botones"><a href="{{url('/ciclolunch/'.$ciclosos->id.'/edit')}}">Registrar Lunch</a></button>
            @else
           <input type='submit' class="botonesinactivos"  value='ALMUERZO YA REGISTRADO'  disabled>
            @endif
           &nbsp;&nbsp;&nbsp;&nbsp;
        </div>

    </div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-4">
    <div class="card-space">
        <div class="card-bodyNew">
<strong><p class="card-text" style="color:rgb(0, 0, 0)">Capacitación</p></strong>
<div class="row">
<div class="col-sm-6">
    <br>
    <img src="\theme\images\capacitacion.png" alt="" style="width: 100px; heigth:90px; margen-left: 23rem;">
    <br>
</div>
<div class="col-sm-6">
    <p class="card-text"><small class="text-muted2">Ingreso&nbsp;&nbsp; <e> {{ old('capacitacion', $ciclosos->capacitacion)}} </e></small></p>
    <p class="card-text"><small class="text-muted2">Salida&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<e>{{ old('capout', $ciclosos->capout)}}</e> </small></p>
        @if (empty($ciclosos->capout))
        <p class="card-text"><small ><b>Tiempo: </b><rem>0</rem> </small></p>
        @else
        <p class="card-text"><small ><b>Tiempo: </b><rem> {{ $timecapa }} </rem></small></p>
        @endif
        @if(empty($ciclosos->capout))
        <button class="botones"><a href="{{url('/ciclocapa/'.$ciclosos->id.'/edit')}}">Registrar Capacitación</a></button>
        @else
        <input type='submit' class="botonesinactivos"  value='CAPACITACION YA REGISTRADA'  disabled>
        @endif
    </div>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
    <div class="card-space">
        <div class="card-bodyNew">
<strong><p class="card-text" style="color:rgb(0, 0, 0)">Pausas Activas</p></strong>
<div class="row">
<div class="col-sm-6">
    <br>
                    <img src="\theme\images\pausas.png"  style="width: 100px; heigth:80px; margen-left: 23rem;">
                </div>
                <div class="col-sm-6">
                    <p class="card-text"><small class="text-muted2">Ingreso&nbsp;&nbsp; <e> {{ old('capacitacion', $ciclosos->capacitacion)}} </e></small></p>
                    <p class="card-text"><small class="text-muted2">Salida&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<e>{{ old('capout', $ciclosos->capout)}}</e> </small></p>


                            @if (empty($ciclosos->pausasout))
                            <p class="card-text"><small class="text-muted2"><b>Tiempo: </b><rem>0</rem> </small></p>
                            @else
                            <p class="card-text"><small class="text-muted2"><b>Tiempo: </b><rem>  {{ $timepausas }}</rem> </small></p>
                            @endif

                            @if(empty($ciclosos->pausasout))
                            <button class="botones"><a href="{{url('/ciclopausas/'.$ciclosos->id.'/edit')}}">Registrar Pausas</a></button>
                                @else
                                <input type='submit' class="botonesinactivos"  value='PAUSA REGISTRADA'  disabled>
                               @endif
                               <br>
                            </div>

                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card-space">
                            <div class="card-bodyNew">
                    <strong><p class="card-text" style="color:rgb(0, 0, 0)">Daño Tecnico</p></strong>
                    <div class="row">
                    <div class="col-sm-6">
                        <br>
                        <img src="\theme\images\dañado.png" style="width: 100px; heigth:90px; margen-left: 23rem;">

                    </div>
                    <div class="col-sm-6">
                        <p class="card-text"><small class="text-muted2">Ingreso&nbsp;&nbsp; <e> {{ old('daño', $ciclosos->daño)}} </e></small></p>
                        <p class="card-text"><small class="text-muted2">Salida&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<e>{{ old('dañoout', $ciclosos->dañoout)}}</e> </small></p>



                                @if (empty($ciclosos->dañoout))
                            <p class="card-text"><small class="text-muted2"><b>Tiempo: </b><rem> 0 </rem> </small></p>
                            @else
                            <p class="card-text"><small class="text-muted2"><b>Tiempo: </b><rem>  {{ $timedaño }}</rem> </small></p>
                            @endif
                            @if(empty($ciclosos->dañoout))
                            <button class="botones"><a href="{{url('/cicloaveria/'.$ciclosos->id.'/edit')}}">Registrar Daño</a></button>
                            @else
                            <input type='submit' class="botonesinactivos"  value='AVERIA REGISTRADA'  disabled>
                            @endif
                        </div>

                    </div>
                    </div>
                    </div>
                    </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                        <div class="card">
                            <div class="card-bodyNew">
                    <strong><p class="card-text" style="color:rgb(0, 0, 0)">Evaluación</p></strong>
                        <center><img src="\theme\images\evalluaciones.png" alt="" width="70px" height="70px" ></center>
                        <div class="card-boton">

                                @if(empty($ciclosos->evaluacionout))
                                <button class="botonessmall"><a href="{{url('/cicloeva/'.$ciclosos->id.'/edit')}}">Registrar Evaluación</a></button>
                                    @else
                                    <input type='submit' class="botonesinactivos"  value='EVALUACION REGISTRADA'  disabled>
                                   @endif
                            @if (empty($ciclosos->evaluacionout))
                            <p class="card-text"><small class="text-muted2"><b>Tiempo de Evaluación: </b><rem> 0 </rem> </small></p>
                            @else
                            <p class="card-text"><small class="text-muted2"><b>Tiempo de Evaluación: </b><rem>  {{ $timeeva }}</rem> </small></p>
                            @endif


                        </div>
                    </div>
               </div>
 </div>

                    <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-bodyNew">
                        <strong><p class="card-text" style="color:rgb(0, 0, 0)">Retro</p></strong>
                        <center><img src="\theme\images\retroa.png" alt="" width="70px" height="70px"></center>
                        <div class="card-boton">

                                @if(empty($ciclosos->retroout))
                                <button class="botonessmall"><a href="{{url('/cicloretro/'.$ciclosos->id.'/edit')}}">Registrar Retro</a></button>
                                    @else
                                    <input type='submit' class="botonesinactivos"  value=' RETROALIMENTACION REGISTRADA'  disabled>
                                   @endif
                                    @if (empty($ciclosos->retroout))
                                   <p class="card-text"><small class="text-muted2"><b>Tiempo de Retro: </b><rem> 0 </rem> </small></p>
                                   @else
                                   <p class="card-text"><small class="text-muted2"><b>Tiempo de Retro: </b><rem>  {{ $timeretro }}</rem> </small></p>
                                   @endif
                            </div>
                        </div>
                    </div>
  </div>


                        <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-bodyNew">
                    <strong><p class="card-text" style="color:rgb(0, 0, 0)">Reunión</p></strong>
                    <center><img src="\theme\images\REUNION.png" alt="" width="70px" height="70px"></center>
                    <div class="card-boton">


                        @if(empty($ciclosos->reunionout))
                        <button class="botonessmall"><a href="{{url('/cicloreunion/'.$ciclosos->id.'/edit')}}">Registrar Reunión</a></button>
                            @else
                            <input type='submit' class="botonesinactivos"  value=' REUNION REGISTRADA'  disabled>
                           @endif


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

            <br><br>
            <p style="text-align: center; aline-contents: center; style="color:rgb(0, 0, 0)"; ><i class="fa fa-copyright" aria-hidden="true" ;>Todos los Derechos Reservados, Elaborado para Mentius S.A. Colombia 2021</i></p>


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


