@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<div class="container">
    <div class="pull-right">
        <div class="col-md-12">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            </body>
            <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <img src="\theme\images\pngegg.png" float="left" height="120" width="300">
                <h3 aline="center">PRE POST</h3>
            </center>
                    <form action="{{ url('/prepost')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="form-row">

                        <div class="form-group col-md-6">
                        <input type="number" id ="numero" name="numero" class="form-control" placeholder="Numero Celular" required>
                        </div>
                        <div class="form-group col-md-6">
                        <input type="text" id ="nombres" name="nombres" class="form-control" placeholder="Nombres" required>
                        </div>
                        <div class="form-group col-md-6">
                        <input type="number" id ="documento" name="documento" class="form-control" placeholder="Documento de identidad" required>
                        </div>
                        <div class="col-sm-3 col-form-label">
                        <label for="fexpedicion">Fecha de expedicion</label>
                        </div>
                        <div class="form-group col-md-3">
                        <input type="date" id ="fexpedicion" name="fexpedicion" class="form-control" placeholder="Fecha de venta" required>
                        </div>
                        <div class="form-group col-md-6">
                        <select name="tipocliente" id="tipocliente" class="form-control" required>
                        <option value="0">Tipo de cliente</option>
                        @foreach($tipocliente as $tipoclientes)
                            <option value="{{ $tipoclientes->tipo_cliente}}">{{ $tipoclientes->tipo_cliente }}</option>
                        @endforeach
                        </select>
                        </div>

                        <div class="form-group col-md-6">
                        <input type="mail" id ="correo" name="correo" class="form-control" placeholder="Ingrese correo electronico ejemplo@gmail.com" required>
                        </div>

                        <div class="form-group col-md-6">
                        <select name="departamento" id="departamento" class="form-control"  required>
                        <option value="">Departamento</option>
                        @foreach($depto as $departamento)
                            <option value="{{ $departamento->Id_departamento}}">{{ $departamento->Nombre }}</option>
                        @endforeach
                        </select>
                        </div>

                        <div class="form-group col-md-6">
                        <select name="id_ciudad" id="id_ciudad" class="form-control" placeholder="Ciudad o municipio" required></select>
                        </div>
                        <div class="form-group col-md-6">
                        <input type="text" id ="barrio" name="barrio" class="form-control" placeholder="Barrio" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" id ="direccion" name="direccion" class="form-control" placeholder="Direccion" required>
                          </div>
                        <div class="form-group col-md-6">
                        <select name="corte" id="corte" class="form-control"  required>
                        <option value="0">Corte</option>
                        @foreach($corte as $cortes)
                            <option value="{{ $cortes->corte }}">{{ $cortes->corte }}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="form-group col-md-6">
                        <select name="plan" id="plan" class="form-control"  required>
                        <option value="0">Plan</option>
                        @foreach($plan as $planes)
                            <option value="{{ $planes->planes }}">{{ $planes->planes }}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="form-group col-md-6">
                        <select name="activacion" id="activacion" class="form-control"  required>
                        <option value="0">Activacion</option>
                         @foreach($activacion as $activaciones)
                            <option value="{{ $activaciones->activacion }}">{{ $activaciones->activacion }}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="form-group col-md-6">
                        <input type="number" id ="token" name="token" class="form-control"  placeholder="Token" required>
                        </div>
                        <div class="form-group col-md-12">
                        <textarea  id ="observaciones" name="observaciones" class="form-control" rows="3" placeholder="Observaciones"></textarea>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Enviar
                            </button>
                            <a href=({{ url('prepost.create')}})><button type="reset"  class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> atras
                            </button></a>
                         </div>
                      </form>
                        <script src="{{asset('js/app.js')}}"></script>
                        </body>
                        @section('css')
                        <link rel="stylesheet" href="/css/admin_custom.css">
                        @stop
                        @section('js')
                <script>
                Swal.fire(
                  'PREPOST',
                  'Consigna todos los datos de forma correcta',
                  'success'
                )
                </script>
                @stop

<script>
    $(document).ready(function() {
         $('#departamento').on('change', function(e) {
             var id = $('#departamento').val();
             $.ajax({

                 url: "{{ route('Ciudad')}}",
                 data: "id="+id+"&_token={{ csrf_token()}}",
                 dataType: "json",
                 method: "POST",
                 success: function(result)
                 {

                     $('#id_ciudad').empty();
                     $('#id_ciudad').append("<option value=''>Ingrese Ciudad o Municipio</option>");
                     $.each(result, function(index,value){

                         $('#id_ciudad').append("<option value='"+value.Municipio+"'>"+value.Municipio+"</option>");
                     });
                 }
             });
         });
     });
 </script>
 @endsection

