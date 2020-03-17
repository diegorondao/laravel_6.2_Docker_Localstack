<?php

namespace App\Repository\ML;

use Dsc\MercadoLivre\Meli;
use Dsc\MercadoLivre\Resources\Authorization\AuthorizationService;

class AutorizationRespository
{
	protected $meli;

	protected function getMeli()
	{
		return $this->meli;
	}
	
	public function __construct()
    {
    	$this->meli = new Meli($_ENV['ML_APP_ID'], $_ENV['ML_SECRET_KEY']);
    	$this->tokenValidation();       
    }

    public function tokenValidation()
    {
    	$authService = new AuthorizationService($this->meli);
	    //$response =  $authService->authorize($_ENV['ML_ACCESS_CODE'], $_ENV['ML_HOST_REDIRECT']);
    }
}
	