<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KontakModel;
use App\Models\TentangkamiModel;
use CodeIgniter\HTTP\ResponseInterface;

class Tentangkami extends BaseController
{
    public function index()
    {
        //
    }

    public function tentangkami()
    {
        $tentangkami = new TentangkamiModel();
        $data['tentangkami'] = $tentangkami->findAll();
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        return view('tentangkami', $data);
    }
}
