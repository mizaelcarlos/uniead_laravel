<?php

namespace App\Http\Controllers\aluno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:aluno');
		
    }
	
	public function index()
	{
		return view('aluno');
	}
}
