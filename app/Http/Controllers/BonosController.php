<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Bono;
use App\Events\NewBono;
class BonosController extends Controller
{
    //
    public function index(){
        return view('bono-index')->with(['bonos'=> Bono::all()]);;
    }
    public function add(Request $id){
        $this->validate($id, [
            'tienda' => 'required|string',
            'nombre' => 'required|string',
            'valor' => 'required|numeric',
            'tipo' => 'required|string',
            'imagen'=>'required|image'
        ]);
        $bono = new Bono;
        $bono->tienda = $id->tienda;
        $bono->nombre = $id->nombre;
        $bono->valor = $id->valor;
        $bono->tipo = $id->tipo;
        $bono->imagen = Storage::url($id->file('imagen')->store('public/bonos'));
        $bono->save();
        event(new NewBono($bono));
        return redirect()->route('bonos')->with('messaje', 'Nuevo propietario creado');
    }
    public function delete(Bono $bono){
        $bono->delete();
        return redirect()->route('bonos')->with(['messaje', 'Eliminado correctamente']);
        dd($bono);
    }
    public function create(){
        return view('bono-create');
    }
    public function select(Bono $bono){
        return view('bono-edit')->with(['bono'=>$bono]);
    }
    public function edit(Bono $bono, Request $req){
        $this->validate($bono, [
            'tienda' => 'required|string',
            'nombre' => 'required|string',
            'valor' => 'required|numeric',
            'tipo' => 'required|string',
        ]);
        $bono->tienda = $req->tienda;
        $bono->nombre = $req->nombre;
        $bono->valor = $req->valor;
        $bono->imagen = ($bono->imagen == $req->imagen) ? $bono->imagen : Storage::url($id->file('imagen')->store('public/bonos'));
    }
}
