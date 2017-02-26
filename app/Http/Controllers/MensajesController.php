<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Modelo de la tabla mensajes!!!!!!!!!!!!!
use App\Mensaje;

//Request donde se validan los datos!!!!!!!!!!!
use App\Http\Requests\CreateMessage;

class MensajesController extends Controller
{   

    //Para que los usuarios no autentificados puedan entrar a cualquier url del controlador Mensajes!!!!!!!!!!!!!!
    function __construct()
    {
        $this->middleware('auth', ['except' => ['create', 'store']]);
    }

    public function index()
    {

        $mensajes = Mensaje::all();

        return view('mensajes.index', compact('mensajes'));
    }

    public function create()
    {
        return view('mensajes.crear');
    }

    public function store(CreateMessage $request)
    {
        //Guardar
          
    Mensaje::create($request->all());
    
        //Redireccionar

        return redirect()->route('mensajes.create')->with('info', 'El mensaje ha sido enviado');

    }

    public function show($id)
    {
        
       $mensaje = Mensaje::findOrFail($id);

        return view('mensajes.show', compact('mensaje'));
    }


    public function edit($id)
    {

        $mensaje = Mensaje::findOrFail($id);

        return view('mensajes.editar', compact('mensaje'));
    }

    public function update(Request $request, $id)
    {
   
            Mensaje::findOrFail($id)->update($request->all());

        return redirect()->route('mensajes.index')->with('info2', 'Mensaje actualizado');
    }

    public function destroy($id)
    {

        Mensaje::findOrFail($id)->delete();

        return redirect()->route('mensajes.index')->with('info3', 'Mensaje Eliminado');
    }
}
