<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
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
        return view('beranda',$data);
    }
}
