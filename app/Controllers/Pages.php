<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'tes' => ['satu', 'dua', 'tiga', 'empat', 'lima']
        ];

        echo view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'about',
            'tes' => ['satu', 'dua', 'tiga', 'empat', 'lima']

        ];

        echo view('pages/about', $data);
    }

    public function kontak()
    {
        $data = [
            'title' => 'about',
            'alamat' => [
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Jl. Basuki Rahmat',
                    'Kota' => 'Bojonegoro'
                ],
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Kolonel Sugiono',
                    'Kota' => 'Bojonegoro Kota'
                ]
            ]

        ];
        return view('pages/Kontak', $data);
    }
}
