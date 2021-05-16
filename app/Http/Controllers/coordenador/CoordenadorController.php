<?php

namespace App\Http\Controllers\coordenador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoordenadorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:coordenador');
		
    }
	
	public function index()
	{
		return view('coordenador');
	}
}
