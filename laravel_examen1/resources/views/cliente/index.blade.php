@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Clientes</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>NIF</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Telefono</th>
    </tr>
    @foreach ($clientes as $c)
    <tr>
      <td>{{$c->id}}</td>
      <td>{{$c->nif}}</td>
      <td>{{$c->nombre}}</td>
      <td>{{$c->apellido}}</td>
      <td>{{$c->telefono}}</td>
    </tr>
    @endforeach

  </table>

@endsection
