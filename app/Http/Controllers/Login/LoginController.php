<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Login\FormRequest\LoginFormRequest;
use App\Domains\User\Repository as UserRepository;

class LoginController extends Controller
{
	private $_users;

    public function __construct(UserRepository  $user)
    {
        $this->_users = $user;
    }

    public function index()
    {
    	return view('login.index');
    }
    
    public function reset()
    {
    	return view('login.index');	
    }
    
    public function validateLogin(LoginFormRequest $request)
    {
        $usuario = $this->_users->validateLoginAccess($request);

        if (! $usuario) {
            return redirect()
                ->route('login-index')
                ->with('error', ['E-mail ou senha inválido']);
        }

        return redirect()
            ->route('dashboard-index');
    }
}