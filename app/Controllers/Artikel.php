<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
use App\Models\KontakModel;
use CodeIgniter\HTTP\ResponseInterface;

class Artikel extends BaseController
{
    public function index()
    {
        //
    }

    public function artikel()
    {
        $artikel = new ArtikelModel();
        $data ['artikel'] = $artikel->findAll();
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        
        return view('beranda',$data);
    }
}
