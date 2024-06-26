<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KontakModel;
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
        $kontak = new KontakModel();
        $data['kontak'] = $kontak->findAll();
        return view('tiket', $data);
    }


    public function store()
    {
        $tiket = new TiketModel();
        $validation = \Config\Services::validation();
        $rules = [
            'nama_kontak' => 'required',
            'email' => 'required|valid_email',
            'subjek' => 'required',
            'deskripsi' => 'required',
        ];

        if ($this->validate($rules)) {
            $tiket->save([
                'nama_kontak' => $this->request->getPost('nama_kontak'),
                'email' => $this->request->getPost('email'),
                'subjek' => $this->request->getPost('subjek'),
                'deskripsi' => $this->request->getPost('deskripsi'),
            ]);

            session()->setFlashdata('sweetalert', "
                <script>
                    Swal.fire({
                        title: 'Berhasil',
                        text: 'Anda Mengirimkan',
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    });
                </script>
            ");
            return redirect()->to('/tiket');
        } else {
            $errors = $validation->getErrors();
            $errorMessages = '';
            foreach ($errors as $field => $error) {
                $errorMessages .= $field . ': ' . $error . '\n';
            }

            session()->setFlashdata('sweetalert', "
                <script>
                    Swal.fire({
                        title: 'Gagal',
                        text: `Form  ini harus di isi:\n${errorMessages}`,
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                </script>
            ");
            return redirect()->back()->withInput()->with('validation', $validation);
        }
    }

        // {
    //     $tiket = new TiketModel();
    //     $validation = \config\Services::validation();
    //     $rulse = [
    //         'nama_kontak' => 'required',
    //         'email' => 'required',
    //         'subjek' => 'required',
    //         'deskripsi' => 'required',
    //     ];
    //     if ($this->validate($rulse)) {
    //         $tiket->save([
    //             'nama_kontak' => $this->request->getPost('nama_kontak'),
    //             'email' => $this->request->getPost('email'),
    //             'subjek' => $this->request->getPost('subjek'),
    //             'deskripsi' => $this->request->getPost('deskripsi'),
    //         ]);
    //         // $tiket->save($data);

    //         session()->setFlashdata('sweetalert', "
    //     <script>
    //         Swal.fire({
    //             title: 'Berhasil',
    //             text: 'Anda Mengirimkan',
    //             icon: 'success',
    //             confirmButtonText: 'Ok'
    //         });
    //     </script>    
    //     ");
    //     return redirect()->back()->to('/tiket');
    //     } else {
    //         session()->setFlashdata('sweetalert', "
    //     <script>
    //         Swal.fire({
    //             title: 'Gagal',
    //             text: 'Form Harus Di isi',
    //             icon: 'error',
    //             confirmButtonText: 'Ok'
    //         });
    //     </script>
    //     ");
    //     return redirect()->back()->to('/tiket');
    //     }
    // }
}
