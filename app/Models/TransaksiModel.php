<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{

    public function getDataPembayaran()
    {
        $builder = $this->db->table('pembayaran');
        return $builder->get();
    }

    public function getDataTransaksi()
    {
        $builder = $this->db->table('transaksi');
        return $builder->get();
    }
}
