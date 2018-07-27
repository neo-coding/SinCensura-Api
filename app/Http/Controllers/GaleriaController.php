<?php

namespace App\Http\Controllers;
use Vinkla\Instagram\Instagram;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function index(){
        $instagram = new Instagram('1120810680.1677ed0.693d439d7cf94e8a8dcc720c1895a9b9');
        return response()->json($instagram->media());
    }
}
