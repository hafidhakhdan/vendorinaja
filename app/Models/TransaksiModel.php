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

    public function getDataCheckout()
    {
        //$builder = $this->db->table('transaksi');
        $builder = $this->db->table('custom_produk');
        return $builder->get();
    }

    public function saveCustom($data)
    {
        $query = $this->db->table('custom_produk')->insert($data);
        return $query;
    }
}
