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

    public function impuesto()
    {
    	$impuestos = Impuesto::all();
    	return view('admin.impuestos',compact('impuestos'));
    }
}
