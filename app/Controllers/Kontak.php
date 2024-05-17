<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KontakModel;
use CodeIgniter\HTTP\ResponseInterface;

class Kontak extends BaseController
{
    public function index()
    {
        //
    }

    public function kontak()
    {
        $kontak = new KontakModel;
        $data ['kontak'] = $kontak->findAll();
        return view('beranda',$data);
    }
}
