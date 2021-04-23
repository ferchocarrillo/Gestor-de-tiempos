 @extends('adminlte::page')

@section('content')
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

}
.botones:hover{
    background-color: #36738c;
    color:#ebf2f3;
    border: #51abba;

}
.botonesinactivos{
    border-radius: 0.75rem;
    width: 7rem;
    background-color: #51abba;
    border: #36738c;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

.botonpeque{

        border-radius: 0.75rem;
        width: 3.5rem;
        background-color: #51abba;
        border: #36738c;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
.card-boton{

    background-color: transparent;

}



</style>


        {{--  <form action="{{ url('/panel')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">  --}}
            {{csrf_field()}}
            <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <img src="\theme\images\isotipo-slogan.png" float="left" height="40" width="140">
            <h1 style="font-weight: bold; text-aline:center;">Registro Tiempos Laborales</h1>
            <h3 style="font-family: Georgia, Verdana, sans-serif; font-weight: bold; text-transform: uppercase;">BIENVENIDO {{ Auth::user()->name }}</h3>
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
            <div><input type="hidden" id="hoy" name"hoy" value="{{ $hoy }}"> </div>
            <div><input type="hidden" id="hora" name"hora" value="{{ $hora }}"> </div>
    </body>


    <form action="{{ url('/panel')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        {{csrf_field()}}
        <center>

            <div class="card-group" >
                <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

                  <div class="card-body" style="border: #060707 3px solid; border-radius:0.75rem; background-image: linear-gradient(#53a7b0, #AAB7B8);)">


                    <strong><p class="card-text" >Turno</p></strong>



                    <center><img src="\theme\images\turno.png" alt=""  width="170px" height="170px"></center>
<br>

                    {{-- <p class="card-text"><small class="text-muted">Ultimo registro  {{ $ago }} </small></p> --}}
                    <input type='submit' class="botones" id= "turnoin" name='turnoin' value='INGRESO'  >
                    <br>
                    <br>
                    <input type='submit' class="botones" name='turnoout' value='SALIDA' disabled >



                </div>
                </div>


                <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

                    <div class="card-body" style="border: #060707 3px solid; border-radius:0.75rem; background-image: linear-gradient(#EAF2F8, #AAB7B8);)">

                      <strong><p class="card-text">Break</p></strong>

                      <br>
                    <center><img src="\theme\images\cafe.png" alt=""  width="140px" height="140px"></center>
                    <br>
                      {{-- <p class="card-text"><small class="text-muted">Ultimo registro  {{ $ago }} </small></p> --}}
                      <input type='submit' class="botonesinactivos" name='breakin' value='IN' style="width: 7rem;"disabled >
                      <br>
                      <br>
                      <input type='submit' class="botonesinactivos" name='breakout' value='OUT' style="width: 7rem;" disabled>



                  </div>
                  </div>

                <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);" >

                    <div class="card-body" style="border: #060707 3px solid; border-radius:0.75rem; background-image: linear-gradient(#EAF2F8, #AAB7B8);)">

                      <strong><p class="card-text">Almuerzo</p></strong>
                      <br>
                      <center><img src="\theme\images\cubiertos.png" alt=""  width="170px" height="140px"></center>

                      <br>
                      <input type='submit' class="botonesinactivos" name='lunchin' value='IN' style="width: 7rem;"disabled >
                      <br>
                      <br>
                      <input type='submit' class="botonesinactivos" name='lunchout' value='OUT' style="width: 7rem;" disabled>



                  </div>
                  </div>
                  <div class="card"  style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

                    <div class="card-body" style="border: #060707 3px solid; border-radius:0.75rem; background-image: linear-gradient(#EAF2F8, #AAB7B8);)">


                      <strong><p class="card-text">Capacitación</p></strong>
                      <br>
                      {{-- <p class="card-text"><small class="text-muted">Ultimo registro  {{ $ago }} </small></p> --}}
                      <center><img src="\theme\images\capacitacion.png" alt=""  width="70px" height="80px"></center>

<div class="card-boton">
    <div class="row">
        <input type='submit' class="botonpeque" value='Inicio' style="width: 6.5rem; border-radius:0.75rem;" disabled >
        &nbsp;&nbsp;
        <input type='submit' class="botonpeque" value='Fin' style="width: 6.5rem; border-radius:0.75rem;" disabled >
    </div>
</div>
    {{-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <center>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </center> --}}


                  </div>
                  <div class="card-body" style="border: #060707 3px solid; border-radius:0.75rem; background-image: linear-gradient(#EAF2F8, #AAB7B8);)">


                    <strong><p class="card-text">Pausas Activas</p></strong>
                    <br>
                    <center><img src="\theme\images\pausas.png" alt=""  width="70px" height="80px"></center>
                    <div class="card-boton">
                        <div class="row">
                            <input type='submit' class="botonpeque" value='Inicio' style="width: 6.5rem; border-radius:0.75rem;" disabled >
                            &nbsp;&nbsp;
                            <input type='submit' class="botonpeque" value='Fin' style="width: 6.5rem; border-radius:0.75rem;" disabled >
                        </div>
                    </div>
                </div>
                  </div>
                  <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

                    <div class="card-body" style="border: #060707 3px solid; border-radius:0.75rem; background-image: linear-gradient(#EAF2F8, #AAB7B8);)">


                        <strong><p class="card-text">Equipo Dañado</p></strong>
<br>
                        <center><img src="\theme\images\dañado.png" alt=""  width="70px" height="80px" ></center>

                        <div class="card-boton">
                            <div class="row">
                                <input type='submit' class="botonpeque" value='Inicio' style="width: 6.5rem; border-radius:0.75rem;" disabled >
                                &nbsp;&nbsp;
                                <input type='submit' class="botonpeque" value='Fin' style="width: 6.5rem; border-radius:0.75rem;" disabled >
                            </div>
                        </div>
                    </div>
                  <div class="card-body" style="border: #060707 3px solid; border-radius:0.75rem; background-image: linear-gradient(#EAF2F8, #AAB7B8);)">




                        <strong><p class="card-text">Evaluación</p></strong>
                        <br>

                        <center><img src="\theme\images\evalluaciones.png" alt=""  width="70px" height="80px" margin></center>
                        <div class="card-boton">
                            <div class="row">
                                <input type='submit' class="botonpeque" value='Inicio' style="width: 6.5rem; border-radius:0.75rem;" disabled >
                                &nbsp;&nbsp;
                                <input type='submit' class="botonpeque" value='Fin' style="width: 6.5rem; border-radius:0.75rem;" disabled >
                            </div>
                        </div>
                    </div>


                  </div>
                  <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">

                    <div class="card-body" style="border: #060707 3px solid; border-radius:0.75rem; background-image: linear-gradient(#EAF2F8, #AAB7B8);)">


                        <strong><p class="card-text">Retroalimentación</p></strong>
                        <br>
                        <center><img src="\theme\images\retroa.png" alt=""  width="70px" height="80px" margin></center>
                        <div class="card-boton">
                            <div class="row">
                                <input type='submit' class="botonpeque" value='Inicio' style="width: 6.5rem; border-radius:0.75rem;" disabled >
                                &nbsp;&nbsp;
                                <input type='submit' class="botonpeque" value='Fin' style="width: 6.5rem; border-radius:0.75rem;" disabled >
                            </div>
                        </div>
                    </div>
                  <div class="card-body" style="border: #060707 3px solid; border-radius:0.75rem; background-image: linear-gradient(#EAF2F8, #AAB7B8);)">




                        <strong><p class="card-text">Reunión</p></strong>
                        <br>
                        <center><img src="\theme\images\REUNION.png" alt=""  width="70px" height="80px" margin></center>
                        <div class="card-boton">
                            <div class="row">
                                <input type='submit' class="botonpeque" value='Inicio' style="width: 6.5rem; border-radius:0.75rem;" disabled >
                                &nbsp;&nbsp;
                                <input type='submit' class="botonpeque" value='Fin' style="width: 6.5rem; border-radius:0.75rem;" disabled >
                            </div>
                        </div>
                    </div>


                  </div>




            </div>
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


