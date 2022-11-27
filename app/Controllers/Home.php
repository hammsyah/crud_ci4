<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('layout/template', $data);
    }

    public function coba()
    {
        echo 'ini kontroler home method coba';
    }
}
