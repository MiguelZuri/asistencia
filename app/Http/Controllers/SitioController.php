<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function Contacto()
    {
        return view('contacto');
    }

    public function guardarComentario(Request $request)
    {
        //Recibir Datos

        //dd($request->all());

        //Guardar la tabla


        //Redireccionar

        return redirect()->route('contacto');

        //dd('ESTOY EN GUARDAR COMENTARIO');
    }
}
