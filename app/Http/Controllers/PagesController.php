<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
    //gestor de middlewares:
    public function __construct()
    {
      $this->middleware('example', ['except'=>['home']]);
    }

    //home:
    public function home()
    {
      return view('home');
    }

    //contactos:
    public function contactos()
    {
      return view('contactos');
    }

    //mensajes:
    public function mensajes(CreateMessageRequest $request)
    {
      //validación de los campos que se envían a través del formulario:
      return $request->all();
    }

    //saludos:
    public function saludos($nombre = "Magufo")
    {
      $html = "<h2>Contenido html</h2>";
      $consolas = ["Play", "XBOX", "Nintendo"];
      //$consolas =[];

      return view('saludo', compact('nombre', 'html', 'consolas'));
    }
}
