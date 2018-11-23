<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Impuesto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function perfil()
    {
        return view('perfil');
    }

    public function codigos()
    {
        return view('codigos');
    }

    public function pagos()
    {
        $authTipo = Auth::user()->tipo;
        $impuestos = Impuesto::where('estatus',1)
                            ->where('tipo',$authTipo)
                            ->get();
        return view('pago',compact('impuestos'));
    }
}
