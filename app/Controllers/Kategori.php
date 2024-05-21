<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
use App\Models\KategoriModel;
use App\Models\KontakModel;
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
        $kontak = new KontakModel();
        $data ['kontak'] = $kontak->findAll();
        return view('kategori',$data);
    }

    // public function subkategori($id_kategori) 
    // {
    //     $KategoriModel = new KategoriModel();
    //     $artikelModel = new ArtikelModel();

    //     $data['subkategori'] = $KategoriModel->where('id_parent', $id_kategori)->findAll();

    //     $data['subkategori_has_articles'] = false;
    //     $data['subkategori_articles'] = [];
    //     foreach ($data['subkategori'] as $sub) {
    //         $articles = $artikelModel->where('id_kategori',$sub['id'])->findAll();
    //         $data['subkategori_articles'][$sub['id']] = count($articles) > 0;
    //         if (count($articles) > 0) {
    //             $data['subkategori_has_articles'] = true;
    //         }
    //     }
    //     return view('/kategori/subkategori', $data);
    // }
    
}
