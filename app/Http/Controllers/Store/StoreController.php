<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Repository\ML\AccountRepository;
use App\Repository\ML\AutorizationRespository;

class StoreController extends Controller
{
    public function index()
    {
        return view('master');
    }
}