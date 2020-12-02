<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProdukModel;

class Produk extends Controller
{
    public function index()
    {
        $model = new ProdukModel();
        $data['produk']  = $model->getProduk()->getResult();
        $data['detail_produk'] = $model->getDetailProduk()->getResult();
        echo view('dummyProduk', $data);
    }
}
