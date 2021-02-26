@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<div class="container">
    <div class="pull-right">
        <div class="col-md-12">
            <div class="card">
                <br>
                <div class="col-md-4"   >
                <form action="/searchprepost" method="GET">
                <div class="input-group">
        <input type="searchprepost" name="searchprepost" class="form-control">
        <span class="input-group-prepend">
            <button type="submit" class="btn btn-primary">Buscar</button>
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
        <th scope="col">Nombres</th>
        <th scope="col">Documento</th>
        <th scope="col">Plan venta</th>
        <th scope="col">Observaciones</th>
        <th scope="col">Agente</th>
        <th scope="col">Fecha venta</th>
        <th scope="col">Revision</th>



        <th colspan="3">Acciones</th>
       </tr>
    </thead>
  <tbody>
    @foreach ($prepost as $prepost)
<tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$prepost->numero}}</td>
        <td>{{$prepost->nombres}}</td>
        <td>{{$prepost->documento}}</td>
        <td>{{$prepost->planventa}}</td>
        <td>{{$prepost->observaciones}}</td>
        <td>{{$prepost->agente}}</td>
        <td>{{$prepost->created_at}}</td>
        <td>{{$prepost->revisado}}</td>

        <td>
            <form action="{{url('/prepost/'.$prepost->id)}}" method="post">
                @csrf
                @method('DELETE')
                <a href="{{url('/prepost/'.$prepost->id.'/edit')}}" class="btn btn-warning btn-sm" role="button" aria-pressed="true">Editar</a>

                <button class="btn btn-danger btn-sm" onclick="return confirm('Borrar?');" type="submit"aria-pressed="true">Borrar</button>
              </form>
        </td>
     </tr>
@endforeach
</tbody>
</table>
        </div>
    </form>
    <p>
        clic <a href="{{route('prepost.excel')}}">Aqui</a>
        para descargar en Excel la base de Prepost
        </p>
    <script src="{{asset('js/app.js')}}"></script>
</body>
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
Swal.fire(
'PRE POST',
'Lista de registros',
'success'
)
</script>
@stop
@endsection

