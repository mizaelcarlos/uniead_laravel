<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class CoordenadorLoginController extends Controller
{
    public function __construct()
	{
		$this->middleware('guest:coordenador')->except('logout');
	}
	
	public function showLoginForm()
    {
        return view('auth.coordenador-login');
    }
	
	public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
    
        if (Auth::guard('coordenador')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
    
            return redirect()->intended(route('coordenador.dashboard'));
        }
        return back()->withInput($request->only('email', 'remember'));
    }
	public function logout(Request $request)
    {
   
		Auth::guard('coordenador')->logout();
		
		
		return redirect('coordenador/login');
            
		
	}
		
		
	
	
}
