<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class Sidebar
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function prefix($route_prefix, $index = 0)
    {
        $prefix = explode('/', $this->request->route()->getPrefix());

        if (array_key_exists($index, $prefix) && $prefix[$index] == $route_prefix) {
            return true;
        } else {
            return false;
        }
    }

    public function name($route_name)
    {
        $name = $this->request->route()->getName();

        if ($name == $route_name) {
            return true;
        } else {
            return false;
        }
    }
}
