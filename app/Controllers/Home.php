<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;
use App\Models\KontakModel;
use App\Models\PrivacyModel;
use App\Models\TentangkamiModel;
use App\Models\TermsModel;
use App\Models\TiketModel;

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
        // $terms = new TermsModel();
        // $data ['terms'] = $terms->findAll();
        // $privacy = new PrivacyModel();
        // $data ['privacy'] = $privacy->findAll();
        return view('beranda/beranda',$data);
    }
    public function kategori()
    {
        $data['title'] = 'kategori';
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        return view('kategori/kategori',$data);
    }
    public function tiket()
    {
        $data['title'] = 'tiket';
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        return view('tiket/tiket',$data);
    }
    public function subkategori()
    {
        $data['title'] = 'subkategori';
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        return view('kategori/subkategori',$data);
    }
    public function tentangkami()
    {
        $data['title'] = 'tentangkami';
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        return view('tentangkami',$data);
    }
    public function privacypolicy()
    {
        $data['title'] = 'privacypolicy';
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        return view('footer/privacypolicy',$data);
    }
    public function termscondition()
    {
        $data['title'] = 'termscondition';
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        return view('footer/termscondition',$data);
    }

    // public function results()
    // {
    //     $keyword = $this->request->getGet('keyword');

    //     // Dapatkan instance database
    //     $db = \Config\Database::connect();
    //     $builder = $db->table('items');

    //     // Lakukan pencarian
    //     $builder->like('name', $keyword)
    //             ->orLike('description', $keyword);
    //     $query = $builder->get();

    //     $data['items'] = $query->getResultArray();

    //     return view('search_results', $data);
    // }
    
}
