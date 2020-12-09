<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TransaksiModel;

class Pembayaran extends Controller
{

    public function save()
    {

        $model = new TransaksiModel();

        $bukti_gambar = $this->request->getFile('bukti_pembayaran');
        $namagambar = $bukti_gambar->getName();
        $data = array(
            'bukti_pembayaran' => $namagambar,
            'bukti_pembayaran' => $this->request->getFile("bukti_pembayaran"),
            'id_user' => session()->get('id_user')
            // 'id_custom' => $this->request->getVar($item)
        );


        $bukti_gambar->move('img');
        $model->savePembayaran($data);

        return redirect()->to('/home/transaksi');
    }
}
