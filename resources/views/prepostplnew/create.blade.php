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
                <h3 aline="center">NUEVO PLAN PREPOST</h3>
            </center>
                <form action="{{ url('/prepostplnew')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                {{csrf_field()}}
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nuevo">Numero de plan nuevo</label>
                <input type="text" id ="nuevo" name="nuevo" class="form-control" placeholder="plan nuevo" required>

            </div>
        </div>



                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm">
                      <i class="fa fa-dot-circle-o"></i> Enviar
                  </button>
                  <a href="{{route('prepostplnew.index')}}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">VOLVER</a>
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
              'PLAN NUEVO PREPOST',
              'Aqui registraras los nuevos planes de prepost',
              'success'
            )
            </script>
            @stop




@endsection
