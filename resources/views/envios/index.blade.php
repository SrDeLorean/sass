  
@extends('layouts.layout')

@section('content')
<div class="wrapper envio-index">
  <h1>envio Orders</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Emisor</th>
        <th scope="col">Destinatario</th>
        <th scope="col">Región</th>
        <th scope="col">Descripción</th>
        <th scope="col">Detalle</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Emisor</th>
        <th scope="col">Destinatario</th>
        <th scope="col">Región</th>
        <th scope="col">Descripción</th>
        <th scope="col">Detalle</th>
      </tr>
    </tfoot>
    <tbody>
      @foreach($envios as $envio)
      <tr>
        <th scope="row">{{$envio->id}}</th>
        <td>{{$envio->rutEmisor}}</td>
        <td>{{$envio->rutDestinatario}}</td>
        <td>{{$envio->region}}</td>
        <td>{{$envio->descripcion}}</td>
        <th scope="col"><a href="/envios/{{$envio->id}}">x<a></th>
      </tr>
      @endforeach
    </tbody>
  </table>


</div>

@endsection