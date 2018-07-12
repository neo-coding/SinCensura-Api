<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Evento;
use App\Events\NewEvent;
class EventosController extends Controller
{
    //
    public function index(){
        $eventos = Evento::all();
        return view('eventos.index')->with(['eventos'=>$eventos]);
    }
    public function create(){
        return view('eventos.create');
    }
    public function store(Request $id){
        $evento = new Evento;
        $evento->nombre = $id->nombre;
        $evento->fecha = $id->fecha;
        $evento->lugar = $id->lugar;
        $evento->precio = $id->precio;
        $evento->imagen = Storage::url($id->file('imagen')->store('public/eventos'));
        $evento->save();
        // event(new NewEvent($evento));
        return redirect()->route('eventos')->with('messaje', 'Nuevo propietario creado');
    }
    
    public function delete(Evento $id){
        $id->delete();
        return redirect()->route('eventos');
    }
}
