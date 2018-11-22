<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    public function index(){
    	$clientes=Cliente::all();
    	return view("cliente.index", array('clientes' => $clientes));
    }

    public function guardar(Request $request){
    	$c= new Cliente;
    	$c->nif=$request->input('nif');
    	$c->nombre=$request->input('nombre');
    	$c->apellido=$request->input('apellido');
    	$c->telefono=$request->input('telefono');
    	$c->save();
    	return view("enunciado");

    }
    public function reservas($id){
    	$cliente=Cliente::find($id);
    	return view("reserva.list", array('cliente' => $cliente));
    }
}
