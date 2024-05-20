<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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
        return view('tentangkami', $data);
    }
}
