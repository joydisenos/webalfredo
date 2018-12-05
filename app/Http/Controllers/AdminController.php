<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Impuesto;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function impuestos()
    {
    	$impuestos = Impuesto::all();
    	return view('admin.impuestos',compact('impuestos'));
    }

    public function crearImpuesto(Request $request)
    {
    	$impuesto = new Impuesto();
    	$impuesto->tipo = $request->tipo;
    	$impuesto->estatus = 1;
    	$impuesto->porcentaje = $request->porcentaje;
    	$impuesto->nombre = $request->nombre;
    	$impuesto->abreviado = $request->abreviado;
    	$impuesto->save();

    	return redirect()->back()->with('status','Impuesto Agregado Correctamente');
    }

    public function modificarImpuesto($id)
    {
    	$impuesto = Impuesto::findOrFail($id);

    	return view('admin.modificarimpuesto',compact('impuesto'));
    }

    public function actualizarImpuesto($id , Request $request)
    {
    	$impuesto = Impuesto::findOrFail($id);
    	$impuesto->tipo = $request->tipo;
    	$impuesto->estatus = $request->estatus;
    	$impuesto->porcentaje = $request->porcentaje;
    	$impuesto->nombre = $request->nombre;
    	$impuesto->abreviado = $request->abreviado;
    	$impuesto->save();

    	return redirect()->back()->with('status','Impuesto Actualizado Correctamente');
    }

    public function eliminarImpuesto($id)
    {
    	$impuesto = Impuesto::findOrFail($id);
    	$impuesto->delete();

    	return redirect()->back()->with('status','Impuesto Eliminado Correctamente');
    }
}
