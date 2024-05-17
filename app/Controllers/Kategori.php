<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;
use CodeIgniter\HTTP\ResponseInterface;

class Kategori extends BaseController
{
    public function index()
    {
        //
    }

    public function kategori()
    {
        $kategori = new KategoriModel();
        $data ['kategori'] = $kategori->findAll();
        return view('beranda',$data);
    }
}
