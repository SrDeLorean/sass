@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
  <h1>Crear Orden De Envio</h1>
  <form action="/envios" method="POST">
    @csrf
    <label for="name">Rut Emisor:</label>
    <input type="text" name="rutEmisor" id="rutEmisor" required>

    <label for="name">Nombre Emisor:</label>
    <input type="text" name="nombreEmisor" id="nombreEmisor" required>

    <label for="name">Rut Destinatario:</label>
    <input type="text" name="rutDestinatario" id="rutDestinatario" required>

    <label for="name">Nombre Destinatario:</label>
    <input type="text" name="nombreDestinatario" id="nombreDestinatario" required>

    <label for="type">Región:</label>
    <select name="region" id="region">
      <option value="Arica y Parinacota y Tarapaca">Arica y Parinacota y Tarapaca</option>
      <option value="	Antofagasta">Antofagasta</option>
      <option value="Atacama y Coquimbo">Atacama y Coquimbo</option>
      <option value="Valparaíso">Valparaíso</option>
      <option value="Metropolitana de Santiago">Metropolitana de Santiago</option>
      <option value="O'Higgins">O'Higgins</option>
      <option value="Maule">Maule</option>
      <option value="Ñuble, Biobío y La Araucanía (norte)">Ñuble, Biobío y La Araucanía (norte)</option>
      <option value="La Araucanía (sur)">La Araucanía (sur)</option>
      <option value="Los Ríos y Los Lagos (norte)">Los Ríos y Los Lagos (norte)</option>
      <option value="Los Lagos (sur) y Aysén">Los Lagos (sur) y Aysén</option>
      <option value="Magallanes">Magallanes</option>
    </select>

    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" required>

    <label for="descripcion">Descripción:</label>
    <input type="text" name="descripcion" id="descripcion" required>


    <label for="peso">Peso:</label>
    <input type="number" name="peso" id="peso" required>

    <label for="tamano">Tamaño:</label>
    <input type="number" placeholder="Largo" name="tamanoL" id="tamanoL" required> X <input type="number" name="tamanoA" id="tamanoA" placeholder="Ancho" required> X <input type="number" placeholder="Alto" name="tamanoH" id="tamanoH" required>

    <label></label>
    <input type="submit" value="Enviar paquete">
  </form>
</div>

@endsection
