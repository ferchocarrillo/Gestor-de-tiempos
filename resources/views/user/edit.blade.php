@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Editar Usuario</h2></div>

                <div class="card-body">
                   @include('custom.message')



                    <form action="{{ route('user.update', $user->id)}}" method="POST">
                     @csrf
                     @method('PUT')

                     <div class="container">

                        <h3>Datos Requeridos</h3>

                         <div class="form-group">
                            <input type="text" class="form-control"
                            id="name"
                            placeholder="Nombre"
                            name="name"
                            value="{{ old('name', $user->name)}}"
                            >
                          </div>
                          <div class="form-group">
                            <input type="number"
                            class="form-control"
                            id="cedula"
                            placeholder="cedula"
                            name="cedula"
                            value="{{ old('cedula' , $user->cedula)}}"
                            >
                          </div>
                          <div class="form-group">
                            <input type="text"
                            class="form-control"
                            id="email"
                            placeholder="Correo Electronico"
                            name="email"
                            value="{{ old('email' , $user->email)}}"
                            >
                          </div>

                          <div class="form-group">
                            <select  class="form-control"  name="roles" id="roles">
                              @foreach($roles as $role)
                                <option value="{{ $role->id }}"
                                  @isset($user->roles[0]->name)
                                    @if($role->name ==  $user->roles[0]->name)
                                      selected
                                    @endif
                                  @endisset


                                >{{ $role->name }}</option>
                              @endforeach
                            </select>
                          </div>
                          <hr>
                          <input class="btn btn-primary" type="submit" value="Guardar">
                     </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
