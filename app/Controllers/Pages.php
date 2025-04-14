<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function company()
    {
        return view('company');
    }

    public function team()
    {
        return view('team');
    }

    public function careers()
    {
        return view('careers');
    }
}
