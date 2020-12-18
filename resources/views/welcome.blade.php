  
@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <img src="/img/54_envios.jpg" alt="pizza house logo">
        <div class="title m-b-md">
            Centro de envios
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="/envios/create">Crear Orden De Envío</a>
    </div>
</div>
@endsection