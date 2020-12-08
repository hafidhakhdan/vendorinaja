<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TransaksiModel;

class Transaksi extends Controller
{

    public function save()
    {
        $model = new TransaksiModel();
        $data = array(
            'jasa_pengiriman'        => $this->request->getPost('jasa_pengiriman'),
            'status_pembayaran'       => $this->request->getPost('status_pembayaran'),
            'id_user' => session()->get('id_user')
        );
        $model->saveTransaksi($data);
        return redirect()->to('/home/transaksi');
    }
}
