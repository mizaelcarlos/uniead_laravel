<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class AlunoLoginController extends Controller
{
    public function __construct()
	{
		$this->middleware('guest:aluno')->except('logout');
	}
	
	public function showLoginForm()
    {
        return view('auth.aluno-login');
    }
	
	public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
    
        if (Auth::guard('aluno')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
    
            $request->session()->put('ALUNO_EMAIL', $request->email);
			return redirect()->intended(route('aluno.dashboard'));
        }
        return back()->withInput($request->only('email', 'remember'));
    }
	public function logout(Request $request)
    {
   
		Auth::guard('aluno')->logout();
		
		
		return redirect('aluno/login');
            
		
	}
}
