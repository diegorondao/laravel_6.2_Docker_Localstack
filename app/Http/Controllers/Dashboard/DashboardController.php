<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Repository\ML\AccountRepository;


class DashboardController extends Controller
{
    private $account;

    public function __construct(AccountRepository $account)
    {
        $this->account = $account;
    }

    public function index()
    {
    	$userAuthenticated = $this->account->getAccount();
		//dump($userAuthenticated);
		if($userAuthenticated->getId() > 0){
	    	return view('dashboard.index')
	        	->with('userAuthenticated', $userAuthenticated);
		}

		return view('dashboard.index')
	        	->with('error', ['Erro ao logar no Mercado Livre']);
    }   
}
