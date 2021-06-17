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
        border: #36738c;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        align-content: center;
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
        background-image: linear-gradient(#EAF2F8, #AAB7B8)
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem;
     }
    .card-bodyNew:hover{
        background-image: linear-gradient(#53a7b0, #AAB7B8);
     }
     .card-bodyNew1{
        border: #060707 3px solid;
        border-radius:0.75rem;
        background-image: linear-gradient(#EAF2F8, #AAB7B8)
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
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

                    <div style="margin-left:auto;"><script>
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

            <div class="card-group" >
                {{--  <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                    <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8); height: 90px;">
                        <div class="card-bodyNew1" >
                          <strong><p class="card-text" style="color:rgb(0, 0, 0)">Turno</p></strong>
                          <center><img src="\theme\images\turno.png" alt=""  width="90px" height="110px"></center>

    <p class="card-text"><small class="text-muted2"><b>Ingreso</b>&nbsp;&nbsp; <e> {{ old('ingreso', $ciclosos->ingreso)}} </e></small></p>
    <p class="card-text"><small class="text-muted2"><b>Salida</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<e>{{ old('salida', $ciclosos->salida)}}</e></small></p>
    @if (empty($ciclosos->salida))
    <p class="card-text"><small class="text-muted2"><b>Horas de Conexión: </b><rem>0</rem> </small></p>
    @else
    <p class="card-text"><small class="text-muted2"><b>Horas de Conexión: </b><rem> {{ $total }} </rem></small></p>
    @endif
                  </div>
                  </div>
                </div>  --}}

                <div class="card" style="background-color: transparent; height: 60;" >
                    <div class="card-bodyNew">
                        <form action="{{url('/ciclobreakin/'.$ciclosos->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            {{csrf_field()}}
                            @method('PATCH')
                            <strong><p class="card-text" style="color:rgb(0, 0, 0)">Break</p></strong>

                    <center><img src="\theme\images\cafe.png" alt=""  width="90px" height="110px"></center>
                    <br>
    @if(empty($ciclosos->breakout))
                        <div><input type="hidden" id="hoy" name"hoy" value="{{ $hoy }}"> </div>
                        <div><input type="hidden" id="hora" name"hora" value="{{ $hora }}"> </div>
                        <div><input type="hidden" id= "nombre" name="nombre" value=" {{$user_nombre}}"></div>
                        <div><input type="hidden" id= "cedula" name="cedula" value=" {{$user_cedula}}"></div>
                        <div><input type="hidden" name= "breakin" id="breakin" value="{{ $hora }}"></div>
    <input type='submit' class="botones" value='Inicio'>
    @else
    <input type='submit' class="botones" value='Inicio' disabled>
   @endif
   <br>

           </form>

           <form action="{{url('/ciclobreakout/'.$ciclosos->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            @method('PATCH')
          <div><input type="hidden" id="hoy" name"hoy" value="{{ $hoy }}"> </div>
          <div><input type="hidden" id="hora" name"hora" value="{{ $hora }}"> </div>
          <div><input type="hidden" id= "nombre" name="nombre" value=" {{$user_nombre}}"></div>
          <div><input type="hidden" id= "cedula" name="cedula" value=" {{$user_cedula}}"></div>
          <div><input type="hidden" name= "breakout" id="breakout" value="{{ $hora }}"></div>
      <div><input type="hidden" name= "timebreak" id="timebreak" value="{{ $timebreak }}"></div>
      <input type='submit' class="botones"  value='Fin'>
<br><br>
      {{--  <p class="card-text"><small class="text-muted2"><b>Inicio:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<e> {{ old('breakin', $ciclosos->breakin)}} </e></small></p>  --}}

    </form>
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
        'UN MERECIDO DESCANSO',
        'EL TIEMPO DE BREAK COMENZARA DANDO CLICK EL EN BOTON INICIO',
        'success'
      )
      </script>
      @stop



