<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TransaksiModel;

class customProduk extends Controller
{

    public function save()
    {
        $model = new TransaksiModel();
        $gambar = $this->request->getFile('gambar_design');
        $namagambar = $gambar->getName();
        $data = array(
            'bahan_produk'        => $this->request->getPost('bahan_produk'),
            'warna_produk'       => $this->request->getPost('warna_produk'),
            //'gambar_design' => $this->request->getFiles('gambar_design'),
            'gambar_design' => $namagambar,
            'ukuranS' => $this->request->getPost('ukuranS'),
            'ukuranM' => $this->request->getPost('ukuranM'),
            'ukuranL' => $this->request->getPost('ukuranL'),
            'ukuranXL' => $this->request->getPost('ukuranXL'),
        );
        //$gambar = $data['gambar_design'];
        $gambar->move('img');
        $model->saveCustom($data);
        return redirect()->to('/home/checkout');
    }
}
