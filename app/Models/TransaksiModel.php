<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{


    public function getDataTransaksi()
    {
        $builder = $this->db->table('Transaksi');
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

    // public function saveCheckout($dataDua)
    // {
    //    $query = $this->db->table('checkout')->insert($dataDua);
    //   return $query;
    //}

    public function saveTransaksi($data)
    {
        helper('date');
        $query = $this->db->table('transaksi')->insert($data);
        return $query;
    }
}
