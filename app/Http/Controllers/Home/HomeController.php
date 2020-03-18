<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

// use App\Repository\ML\AccountRepository;

class HomeController extends Controller
{
    private $account;

    // public function __construct(AccountRepository $account)
    // {
    //     $this->account = $account;
    // }

    public function index()
    {
        $client = new \GuzzleHttp\Client(['base_uri' => 'http://localstack:8080']);
        $response = $client->get('health',  ['http_errors' => true]);
    	
        return view('home.index')
        	->with('statusResponse', json_decode($response->getBody()));
    }   
}
