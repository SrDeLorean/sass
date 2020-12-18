<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Envio;

class EnvioController extends Controller
{

  public function index() {

    $envios = Envio::latest()->get();      

    return view('envios.index', [
      'envios' => $envios,
    ]);
  }

  public function show($id) {
    
    $envio = Envio::findOrFail($id);

    return view('envios.show', ['envio' => $envio]);
  }

  public function create() {
    return view('envios.create');
  }

  public function store() {

    $envio = new Envio();

    $envio->rutEmisor = request('rutEmisor');
    $envio->nombreEmisor = request('nombreEmisor');
    $envio->rutDestinatario = request('rutDestinatario');
    $envio->nombreDestinatario = request('nombreDestinatario');
    $envio->region = request('region');
    $envio->direccion = request('direccion');
    $envio->descripcion = request('descripcion');
    $envio->peso = request('peso');
    $envio->tamanoL = request('tamanoL');
    $envio->tamanoA = request('tamanoA');
    $envio->tamanoH = request('tamanoH');
    $envio->valor = $envio->tamanoL*$envio->tamanoA*$envio->tamanoH*$envio->peso;
    $envio->save();

    return redirect('/')->with('mssg', 'Orden creada con exito');

  }

  public function destroy($id) {

    $envio = Envio::findOrFail($id);
    $envio->delete();

    return redirect('/envios');

  }

}
