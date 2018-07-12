<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;

class ContactoController extends Controller
{
    public function index(){
        return view('contacto.index')->with(['mensajes'=>Contacto::all()]);
    }
    public function store(Request $request){
        $msg = new Contacto;
        $msg->nombre = $request->nombre;
        $msg->email = $request->email;
        $msg->telefono = $request->numero;
        $msg->mensaje = $request->mensaje;
        $msg->save();
        return response()->json($msg);
    }
}
