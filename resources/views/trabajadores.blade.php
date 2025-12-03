@extends('layouts.app')

@section('content')
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">CURP</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col">Direccion</th>
            <th scope="col">Puesto</th>
            <th scope="col">Salario</th>


    </thead>
    <tbody>
        @foreach($trabajadores as $trabajadores)
        <tr>
            <td>{{$trabajadores->id}}</td>
            <td>{{$trabajadores->nombre}}</td>
            <td>{{$trabajadores->apellido}}</td>
            <td>{{$trabajadores->curp}}</td>
            <td>{{$trabajadores->telefono}}</td>
            <td>{{$trabajadores->email}}</td>
            <td>{{$trabajadores->fecha_nacimiento}}</td>
            <td>{{$trabajadores->direccion}}</td>
            <td>{{$trabajadores->puesto}}</td>
            <td>{{$trabajadores->salario}}</td>
        </tr>
         @endforeach
   
  </tbody>
</table>


@endsection