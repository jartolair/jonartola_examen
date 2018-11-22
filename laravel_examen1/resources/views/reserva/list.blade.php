@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Reserva</h2>

  <h3>Cliente: {{$cliente->nombre}} {{$cliente->apellido}}</h3>
  <h3>NIF: {{$cliente->nif}} </h3>

  <h3>Ha realizado las siguientes reservas:</h3>

  <table>
    <tr>
      <th>Hotel</th>
      <th>Fecha</th>
      <th>Numero de habitaciones</th>
    </tr>
    @foreach ($cliente->hoteles as $h)
    <tr>
      <td>{{$h->nombre}}</td>
      <td>{{explode(" ", $h->pivot->fecha)[0]}}</td>
      <td>{{$h->pivot->numHabitaciones}}</td>
    </tr>
    @endforeach

  </table>
@endsection
