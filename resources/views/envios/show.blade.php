@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
  <h1>Orden numero: {{ $envio->id }}</h1>


  <p class="type">Rut Emisor: {{ $envio->rutEmisor }}</p>
  <p class="base">Nombre Emisor: {{ $envio->nombreEmisor }}</p>
  <p class="type">Rut Destinatario: {{ $envio->rutDestinatario }}</p>
  <p class="base">Nombre Destinatario: {{ $envio->nombreDestinatario }}</p>
  <p class="type">Region: {{ $envio->region }}</p>
  <p class="base">Dirección: {{ $envio->direccion }}</p>
  <p class="type">Descripción: {{ $envio->descripcion }}</p>
  <p class="base">Peso: {{ $envio->peso }}</p>
  <p class="type">Tamaño: {{$envio->tamanoL}}x{{$envio->tamanoA}}x{{$envio->tamanoH}}</p>
  <p class="base">Valor: {{ $envio->valor }} pesos</p>

  <form action="/envios/{{ $envio->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Cancelar envio</button>
  </form>
</div>
<a href="/envios" class="back">Volver</a>
@endsection