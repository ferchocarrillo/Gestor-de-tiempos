 @extends('adminlte::page')  

@section('content')
<div class="pull-right">
    <div class="col-md-12">
        <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        </body>
        <form action="{{ url('/panel')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <img src="\theme\images\isotipo-slogan.png" float="left" height="40" width="180">
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

    
    <form action="{{ url('/registro')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        {{csrf_field()}}
        <center>

            <div class="card-group" >
                <div class="card" >

                  <div class="card-body" style="border: #060707 3px solid; border-radius:0.75rem; background-image: linear-gradient(#6de00e, #AAB7B8);)">

                    <strong><p class="card-text" >Registre Aqui su hora de llegada</p></strong>
                    <br>
                    {{-- <p class="card-text"><small class="text-muted">Ultimo registro  {{ $ago }} </small></p> --}}
                    <input type='submit' class="btn btn-primary" name='boton1' value='INGRESO' style="width: 6rem;" >



                </div>
                </div>


                <div class="card" >

                    <div class="card-body" style="border: #060707 3px solid; border-radius:0.75rem; background-image: linear-gradient(#EAF2F8, #AAB7B8);)">

                      <strong><p class="card-text">Registre Aqui el ingreso al break</p></strong>
                      <br>
                      {{-- <p class="card-text"><small class="text-muted">Ultimo registro  {{ $ago }} </small></p> --}}
                      <input type='submit' class="btn btn-primary" name='boton1' value='Break In' style="width: 6rem;" disabled>



                  </div>
                  </div>
                  
                <div class="card" >

                    <div class="card-body" style="border: #060707 3px solid; border-radius:0.75rem; background-image: linear-gradient(#EAF2F8, #AAB7B8);)">

                      <strong><p class="card-text">Registre Aqui regreso del break</p></strong>
                      <br>
                      {{-- <p class="card-text"><small class="text-muted">Ultimo registro  {{ $ago }} </small></p> --}}
                      <input type='submit' class="btn btn-primary" name='boton1' value='Break Out' style="width: 6rem;" disabled >



                  </div>
                  </div>
                  <div class="card" >

                    <div class="card-body" style="border: #060707 3px solid; border-radius:0.75rem; background-image: linear-gradient(#EAF2F8, #AAB7B8);)">

                      <strong><p class="card-text">Registre Aqui el ingreso al almuerzo</p></strong>
                      <br>
                      {{-- <p class="card-text"><small class="text-muted">Ultimo registro  {{ $ago }} </small></p> --}}
                      <input type='submit' class="btn btn-primary" name='boton1' value='Almuerzo In' style="width: 8rem;" disabled >



                  </div>
                  </div>
                  <div class="card" >

                    <div class="card-body" style="border: #060707 3px solid; border-radius:0.75rem; background-image: linear-gradient(#EAF2F8, #AAB7B8);)">

                      <strong><p class="card-text">Registre Aqui el regreso del almuerzo</p></strong>
                      <br>
                      {{-- <p class="card-text"><small class="text-muted">Ultimo registro  {{ $ago }} </small></p> --}}
                      <input type='submit' class="btn btn-primary" name='boton1' value='Almuerzo Out' style="width: 8rem;"disabled >



                  </div>
                  </div>
                  <div class="card" >

                    <div class="card-body" style="border: #060707 3px solid; border-radius:0.75rem; background-image: linear-gradient(#EAF2F8, #AAB7B8);)">

                      <strong><p class="card-text">Registre Aqui su salida de turno</p></strong>
                      <br>
                      {{-- <p class="card-text"><small class="text-muted">Ultimo registro  {{ $ago }} </small></p> --}}
                      <input type='submit' class="btn btn-primary" name='boton1' value='SALIDA' style="width: 6rem;" disabled >



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


