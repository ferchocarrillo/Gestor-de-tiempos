@extends('adminlte::page')

@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<div class="container">
    <div class="pull-right">
        <div class="col-md-12">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <h6>Cantidad de Registros:  {{ $upgrades->total() }}</h6>
                <br>
                <div class="col-md-4"   >
                <form action="/searchdigitalupgrade" method="GET">
                <div class="input-group">
        <input type="searchdigitalupgrade" name="searchdigitalupgrade" class="form-control">
        <span class="input-group-prepend">
            <button type="submit" class="btn btn-primary">Buscar por Numero</button>
            </span>
        </div>
    </form>
</div>
<br>

                <table class="table table-ligth table-hover">
                    <thead class="thead-dark">
                    <tr>
        <th scope="col">#</th>
        <th scope="col">Numero</th>
        <th scope="col">Documento</th>
        <th scope="col">Correo</th>
        <th scope="col">Numero</th>
        <th scope="col">Plan venta</th>
        <th scope="col">Fecha de venta</th>
        <th scope="col">Revision</th>
        <th scope="col">Causal</th>
        <th scope="col">Agente</th>
        <th colspan="3">Acciones</th>
        </tr>
</thead>
<tbody>
@foreach ($upgrades as $upgrade)
     <tr>

        <td>{{$loop->iteration}}</td>
        <td>{{$upgrade->numero}}</td>
        <td>{{$upgrade->documento}}</td>
        <td>{{$upgrade->correo}}</td>
        <td>{{$upgrade->numero}}</td>
        <td>{{$upgrade->planventa}}</td>
        <td>{{$upgrade->fventa}}</td>
        <td>{{$upgrade->revisados}}</td>
        <td>{{$upgrade->estadorevisado}}</td>
        <td>{{$upgrade->agente}}</td>
        <td>
        <a href="{{url('/upgradedigital/'.$upgrade->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>

        <form action="{{url('/upgradedigital/'.$upgrade->id)}}" method="post">

        @csrf

        @method('DELETE')




        <button class="btn btn-warning btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>




</form>




        </td>

    </tr>
@endforeach
</tbody>
</table>

{{ $upgrades->links()  }}
    </div>


    <p>
        clic <a href="{{route('upgradeDigital.excel')}}">Aqui</a>
        para descargar en Excel la base de upgrade digital

        </p>








    <script src="{{asset('js/app.js')}}"></script>
</body>
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
Swal.fire(
'UPGRADE DIGITAL',
'Lista de registros',
'success'
)
</script>
@stop






@endsection

