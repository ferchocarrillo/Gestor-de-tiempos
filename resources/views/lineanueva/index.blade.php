@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<div class="container">
    <div class="pull-right">
        <div class="col-md-12">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <h6>Cantidad de Registros:  {{ $lineanuevas->total() }}</h6>
                <br>
                <div class="col-md-4"   >
                <form action="/searchlineanueva" method="GET">
                <div class="input-group">
        <input type="searchlineanueva" name="searchlineanueva" class="form-control">
        <span class="input-group-prepend">
            <button type="submit" class="btn btn-primary">Buscar por Numero</button>
            </span>
        </div>
    </form>
</div>
<br>

                <table class="table table-ligth table-hover">
    <thead class="thead-dark ">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Numero</th>
        <th scope="col">Documento</th>
        <th scope="col">Nombres y Apellidos</th>
        <th scope="col">Tipo de cliente</th>
        <th scope="col">Plan adquiere</th>
        <th scope="col">Fecha de venta</th>
        <th scope="col">Numero de contacto</th>
        <th scope="col">Revision</th>
        <th scope="col">Causal</th>
        <th scope="col">Asesor</th>
        <th colspan="3">Acciones</th>
        </tr>
</thead>

<tbody>
            @foreach ($lineanuevas as $lineanueva)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$lineanueva->numero}}</td>
        <td>{{$lineanueva->documento}}</td>
        <td>{{$lineanueva->nombres}} {{$lineanueva->apellidos}}</td>
        <td>{{$lineanueva->tipocliente}}</td>
        <td>{{$lineanueva->planadquiere}}</td>
        <td>{{$lineanueva->fvc}}</td>
        <td>{{$lineanueva->ncontacto}}</td>
        <td>{{$lineanueva->revisados}}</td>
        <td>{{$lineanueva->estadorevisado}}</td>
        <td>{{$lineanueva->agente}}</td>

        <td>
            <div class="row">
            <form action="{{url('/lineanueva/'.$lineanueva->id)}}" method="post" style='display:inline'>
                @csrf
                @method('DELETE')
    <div class="">
        <a href="{{url('/lineanueva/'.$lineanueva->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
    </div>
    <div>
        <button class="btn btn-warning btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>
       </form>
    </div>
    </div>
    </td>
</tr>
@endforeach
</tbody>
</table>

{{ $lineanuevas->links() }}
</div>

<p>
clic <a href="{{route('lineanueva.excel')}}">Aqui</a>
para descargar en Excel la base de lineas nuevas
</p>

<script src="{{asset('js/app.js')}}"></script>
</body>
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
Swal.fire(
'PORTABILIDAD DIGITAL',
'Lista de registros',
'success'
)
</script>
@stop






@endsection

