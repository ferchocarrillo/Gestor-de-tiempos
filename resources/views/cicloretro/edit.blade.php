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
    background-color: #d8e3e6;
    border: #36738c;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

.botonpeque{

    border-radius: 0.75rem;
    width: 7rem;
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
        width: 6.5rem;
        background-color: #d8e3e6;
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
  .input-small{
width: 30px;
background-color: transparent;
border: none;
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
</style>


            <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <img src="\theme\images\isotipo-slogan.png" float="left" height="40" width="140">
            <h3 style="font-family: Georgia, Verdana, sans-serif; font-weight: bold; text-transform: uppercase;">{{ Auth::user()->name }}</h3>
            <h1 style="font-weight: bold; text-aline:center;">RETRO-ALIMENTACION</h1>

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
    </body>
        <div id="cuenta"></div>
        <center>
            <div class="card-group" >
                <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                  <div class="card-bodyNew1">
                    <strong><p class="card-text" >Turno</p></strong>
                    <center><img src="\theme\images\turno.png" alt=""  width="170px" height="170px"></center>
                    <br>
                    <p class="card-text"><small class="text-muted2">Hora Entrada  {{ old('ingreso', $ciclosos->ingreso)}} </small></p>

                    <br>
                    <br>
                    <p class="card-text"><small class="text-muted2">Hora Salida  {{ old('salida', $ciclosos->salida)}} </small></p>

                </div>
                </div>
                <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                    <div class="card-bodyNew1">


                      <strong><p class="card-text">Break</p></strong>
                      <br>
                    <center><img src="\theme\images\cafe.png" alt=""  width="140px" height="140px"></center>
                    <br>
                    <br>
                    <br>


                    </form>

                      <br>
                      <br>


                      <div><input type="hidden" name="breakout" id="breakout" value="{{ $hora }}"></div>


                      <p class="card-text"><small class="text-muted2"><b>Tiempo de Break</b>  {{ old('timebreak', $ciclosos->timebreak)}} minutos</small></p>



                    </div>
                  </div>

                <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);" >

                    <div class="card-bodyNew1">

                      <strong><p class="card-text">Almuerzo</p></strong>
                      <br>
                      <center><img src="\theme\images\cubiertos.png" alt=""  width="170px" height="140px"></center>

                      <p class="card-text"><small class="text-muted2"><b>Tiempo de almuerzo</b> {{ old('timelunch', $ciclosos->timelunch)}} </small></p>
                </div>
                  </div>

                  <div class="card"  style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

                    <div class="card-bodyNew1">


                      <strong><p class="card-text">Capacitación</p></strong>
                      <br>

                      <center><img src="\theme\images\capacitacion.png" alt=""  width="85px" height="80px"></center>

<div class="card-boton">
           <br><br>
        <p class="card-text"><small class="text-muted2"><b>Tiempo de Capacitación</b> {{ old('timecap', $ciclosos->timecap)}} </small></p>

</div>


                  </div>
                  <div class="card-bodyNew1">


                    <strong><p class="card-text">Pausas Activas</p></strong>
                    <br>
                    <center><img src="\theme\images\pausas.png" alt=""  width="70px" height="80px"></center>
                    <div class="card-boton">
                        <div class="row">



                            <p class="card-text"><small class="text-muted2"><b>Tiempo de Pausas Activas</b>  {{ old('timepau', $ciclosos->timepau)}} </small></p>
                        </div>
                    </div>
                </div>
                  </div>
                  <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

                    <div class="card-bodyNew1">


                        <strong><p class="card-text">Equipo Dañado</p></strong>
<br>
                        <center><img src="\theme\images\dañado.png" alt=""  width="70px" height="80px" ></center>

                        <div class="card-boton">

                                <br><br>
                                <p class="card-text"><small class="text-muted2"><b>Tiempo de Daño de Equipo</b> {{ old('timedaño', $ciclosos->timedaño)}} </small></p>

                        </div>
                    </div>
                  <div class="card-bodyNew1">




                        <strong><p class="card-text">Evaluación</p></strong>
                        <br>

                        <center><img src="\theme\images\evalluaciones.png" alt=""  width="85px" height="80px" margin></center>
                        <div class="card-boton">
                            <div class="row">


                                <p class="card-text"><small class="text-muted2"><b>Tiempo de evaluacion</b>  {{ old('timeeva', $ciclosos->timeeva)}} </small></p>
                            </div>
                        </div>
                    </div>


                  </div>
                  <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

                    <div class="card-bodyNew">


                        <strong><p class="card-text">Retroalimentación</p></strong>
                        <br>
                        <center><img src="\theme\images\retroa.png" alt=""  width="85px" height="80px" margin></center>
                        <div class="card-boton">
                            <div class="row">
                                <form action="{{url('/cicloretro/'.$ciclosos->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    {{csrf_field()}}
                                    @method('PATCH')
                                    <div><input type="hidden" id="hoy" name"hoy" value="{{ $hoy }}"> </div>
                                    <div><input type="hidden" id="hora" name"hora" value="{{ $hora }}"> </div>
                                   <div><input type="hidden" id= "nombre" name="nombre" value=" {{$user_nombre}}"></div>
                                    <div><input type="hidden" id= "cedula" name="cedula" value=" {{$user_cedula}}"></div>
                                    <div><input type="hidden" id= "retro" name="retro" value=" {{$hora}}"></div>
                                <input type='submit' class="botones" value='Inicio'>
                            </form>

                                <p class="card-text"><small class="text-muted2"><b>Tiempo de Retroalimentacion</b>  {{ old('timeretro', $ciclosos->timeretro)}} </small></p>

                            </div>
                        </div>
                    </div>
                  <div class="card-bodyNew1">




                        <strong><p class="card-text">Reunión</p></strong>
                        <br>
                        <center><img src="\theme\images\REUNION.png" alt=""  width="70px" height="80px" margin></center>
                        <div class="card-boton">
                            <div class="row">



                                <p class="card-text"><small class="text-muted2"><b>Tiempo de Reunion</b>  {{ old('timereunion', $ciclosos->timereunion)}} </small></p>
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
        'TOMALO COMO UNA OPORTUNIDAD DE MEJORA',
        'REGISTRA EL TIEMPO DE RETROALIMENTACIÓN',
        'success'
      )
      </script>
      @stop



