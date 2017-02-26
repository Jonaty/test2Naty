<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Se importo la clase de la validacion de los datos del formulario

use App\Http\Requests\CreateMessage;

class PaginasController extends Controller
{

 /*   public function __construct()
    {
        $this->middleware('redirect', ['only' => ['home']]);
    }*/

    //Funcion del home!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    public function home()
    {
    	return view('home');
    }

    //Funcion de mensaje!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    public function mensaje(CreateMessage $request)
    {   
        //LA VALIDACION DE LOS DATOS SE FUERON A UN REQUEST (REQUEST->CREATEMESSAGE) PARA SER VALIDADOS

      /*  $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required|max:10',
            ]);*/
        //Para ver que los datos se estan enviando correctamente
        
        //return $request->all();

    // Se pone el nombre de la ruta en la funcion ROUTE!!

        return redirect()->route('contactos')->with('info', 'Tu mensaje fue enviado');
    }

    //Funcion de saludo!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    public function saludo($nombre = "No coloco nombre")
    {

    $lenguajes = ['php', 'javascript', 'python', 'HTML'];

	return view('saludo', compact('nombre', 'lenguajes'));
	//return "Hola me llamo " . $nombre;
    }
}
