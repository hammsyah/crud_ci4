<?php

namespace App\Controllers;

class Komik extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('komik/index', $data);
    }
}
