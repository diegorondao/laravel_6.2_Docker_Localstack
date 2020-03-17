<?php

namespace App\Repository\ML;

use Dsc\MercadoLivre\Meli;
use App\Repository\ML\AutorizationRespository;
use Dsc\MercadoLivre\Resources\User\UserService;

class AccountRepository extends AutorizationRespository
{
    public function getAccount()
    {
        $account = new UserService($this->getMeli());
        return $account->getInformationAuthenticatedUser();
    }
}
