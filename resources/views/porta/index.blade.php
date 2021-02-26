@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<div class="container">
    <div class="pull-right">
        <div class="col-md-12">
            <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
                <h6>Cantidad de Registros:  {{ $portas->total() }}</h6>
                <br>
                <div class="col-md-4"   >
                <form action="/search" method="GET">
                <div class="input-group">
        <input type="search" name="search" class="form-control">
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
            @foreach ($portas as $porta)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$porta->numero}}</td>
        <td>{{$porta->documento}}</td>
        <td>{{$porta->nombres}} {{$porta->apellidos}}</td>
        <td>{{$porta->tipocliente}}</td>
        <td>{{$porta->planadquiere}}</td>
        <td>{{$porta->fvc}}</td>
        <td>{{$porta->ncontacto}}</td>
        <td>{{$porta->revisados}}</td>
         <td>{{$porta->estadorevisado}}</td>
        <td>{{$porta->agente}}</td>

        <td>
            <form action="{{url('/porta/'.$porta->id)}}" method="post" style='display:inline'>
                @csrf
                @method('DELETE')

        <a href="{{url('/porta/'.$porta->id.'/edit')}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
        <button class="btn btn-warning btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>
       </form>
    </td>
</tr>
@endforeach
</tbody>
</table>

{{ $portas->links() }}
</div>

<p>
clic <a href="{{route('porta.excel')}}">Aqui</a>
para descargar en Excel la base de portablilidad
</p>

<script src="{{asset('js/app.js')}}"></script>
</body>
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
Swal.fire(
'PORTABILIDAD',
'Lista de registros',
'success'
)
</script>
@stop






@endsection

