@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Hoteles de 1ª</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Categoria</th>
    </tr>
  @foreach ($hoteles as $h)
  @if($h->completo)
    <tr style="color: red">
  @else
    <tr>
  @endif
      <td>{{$h->id}}</td>
      <td>{{$h->nombre}}</td>
      <td>{{$h->direccion}}</td>
      <td>{{$h->categoria}}</td>
    </tr>
    @endforeach
  </table>

@endsection
