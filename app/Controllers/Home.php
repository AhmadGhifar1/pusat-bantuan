<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;
use App\Models\KontakModel;
use App\Models\TentangkamiModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function beranda()
    {
        $data['title'] = 'beranda';
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        $artikel = new ArtikelModel();
        $data ['artikel'] = $artikel->findAll();
        $kategori = new KategoriModel();
        $data ['kategori'] = $kategori->where('id_parent',null)->findAll();
        return view('beranda/beranda',$data);
    }
    public function kategori()
    {
        $data['title'] = 'kategori';
        return view('kategori/kategori',$data);
    }
    public function tiket()
    {
        $data['title'] = 'tiket';
        return view('tiket/tiket',$data);
    }
    public function detailkat()
    {
        $data['title'] = 'detailkat';
        return view('kategori/detailkat',$data);
    }
    public function tentangkami()
    {
        $data['title'] = 'tentangkami';
        return view('tentangkami',$data);
    }
}
