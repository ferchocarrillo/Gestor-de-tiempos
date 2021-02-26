@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Registro de Tiempos</h2></div>
                <div class="card-body">
                @can('haveaccess','registro.create')
                    <a href="{{route('registro.create')}}"
                      class="btn btn-primary float-right"
                      >Create
                    </a>
                    <br><br>
                @endcan
                    @include('custom.message')
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">fecha</th>
                            <th scope="col">entrada</th>
                            <th scope="col">usuario</th>
                            <th colspan="3"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($registros as $registro)
                            <tr>
                                <th scope="row">{{ $registro->id}}</th>
                                <td>{{ $registro->fecha}}</td>
                                <td>{{ $registro->entrada}}</td>
                                <td>{{ $registro->usuario}}</td>
                                <td>{{ $registro['full-access']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      {{ $registros->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
