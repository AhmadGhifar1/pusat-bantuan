<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;
use App\Models\KontakModel;
use App\Models\PrivacyModel;
use App\Models\TentangkamiModel;
use App\Models\TermsModel;
use App\Models\TiketModel;
use CodeIgniter\Commands\Utilities\Publish;

use function PHPUnit\Framework\assertNotNull;

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

        // $artikel = new ArtikelModel();
        // $data ['artikel'] = $artikel->where('status','publish')->findAll();
        $artikel = new ArtikelModel();
        $data['artikel'] = $artikel->getPublishedArticlesWithUser();

        $kategori = new KategoriModel();
        $data ['kategori'] = $kategori->where('id_parent',null)->findAll();
        
        return view('beranda/beranda',$data);
    }
    public function kategori()
    {
        $data['title'] = 'kategori';
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        $kategori = new KategoriModel();
        $data ['kategori'] = $kategori->where('id_parent',2)->findAll();
        return view('kategori/kategori',$data);
    }
    public function tiket()
    {
        $data['title'] = 'tiket';
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        return view('tiket/tiket',$data);
    }
    // public function subkategori()
    // {
    //     $data['title'] = 'subkategori';
    //     $kontak = new KontakModel();
    //     $data ['kontak'] = $kontak->findAll();
    //     return view('kategori/subkategori',$data);
    // }

    public function subkategori($id_kategori)
    {
        $kontak = new KontakModel();
        $data['kontak'] = $kontak->findAll();
        
        $kategori = new KategoriModel();
        $data['kategori'] = $kategori->where('id_parent', $id_kategori)->findAll();
        return view('kategori/kategori', $data);
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
        $policy = new PrivacyModel();
        $data ['policy'] = $policy->findAll();
        return view('footer/privacypolicy',$data);
    }
    public function termscondition()
    {
        $data['title'] = 'termscondition';
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        $terms = new TermsModel();
        $data ['terms'] = $terms->findAll();
        return view('footer/termscondition',$data);
    }
    public function detailartikel1()
    {
        $data['title'] = 'detailartikel1';
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        $artikel1 = new ArtikelModel();
        $data ['artikel1'] = $artikel1->where('id_layout',1)->findAll();
        return view('detailartikel/detailartikel1',$data);
    }
    public function detailartikel2()
    {
        $data['title'] = 'detailartikel2';
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        $artikel2 = new ArtikelModel();
        $data ['artikel2'] = $artikel2->where('id_layout',2)->findAll();
        return view('detailartikel/detailartikel2',$data);
    }
    public function detailartikel3()
    {
        $data['title'] = 'detailartikel3';
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        $artikel3 = new ArtikelModel();
        $data ['artikel3'] = $artikel3->where('id_layout',3)->findAll();
        return view('detailartikel/detailartikel3',$data);
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
