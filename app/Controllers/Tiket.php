<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TiketModel;
use CodeIgniter\HTTP\ResponseInterface;

class Tiket extends BaseController
{
    public function index()
    {
        //
    }

    public function tiket()
    {
        $tiket = new TiketModel();
        $data['tiket'] = $tiket->findAll();
        return view('tiket', $data);
    }


    public function store()
    {
        $tiket = new TiketModel();

        $data = [
            'nama_kontak' => $this->request->getPost('nama_kontak'),
            'email' => $this->request->getPost('email'),
            'subjek' => $this->request->getPost('subjek'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            // 'email' => $this->request->getPost('status'),
        ];

        $tiket->save($data);

        return redirect()->to('/tiket');
    }
}
