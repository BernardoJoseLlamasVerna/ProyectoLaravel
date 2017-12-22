<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
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

    //saludos:
    public function saludos($nombre = "Magufo")
    {
      $html = "<h2>Contenido html</h2>";
      $consolas = ["Play", "XBOX", "Nintendo"];
      //$consolas =[];

      return view('saludo', compact('nombre', 'html', 'consolas'));
    }
}
