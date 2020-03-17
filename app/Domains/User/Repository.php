<?php

namespace App\Domains\User;


class Repository 
{
    public function validateLoginAccess($user)
    {
        if ($user->email === "store@store.com.br" && $user->senha === "store2020")
        {
            return true;
        }

        return false;
    }
    
}
