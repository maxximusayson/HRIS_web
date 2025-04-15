<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Resources extends BaseController
{
    public function index()
    {
        return view('resources');
    }
}
