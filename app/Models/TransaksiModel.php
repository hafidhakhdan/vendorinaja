<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{


    public function getDataTransaksi()
    {
        $builder = $this->db->table('custom_produk');
        return $builder->get();
    }

    public function getDataCheckout()
    {
        //$builder = $this->db->table('transaksi');
        $builder = $this->db->table('custom_produk');
        $builder->orderBy('id_custom', 'DESC');
        $builder->limit(1);
        return $builder->get();
    }

    public function saveCustom($data)
    {
        $query = $this->db->table('custom_produk')->insert($data);
        return $query;
    }

    public function saveTransaksi($data)
    {
        $query = $this->db->table('transaksi')->insert($data);
        return $query;
    }

    public function savePembayaran($data)
    {
        $query = $this->db->table('pembayaran')->insert($data);
        return $query;
    }


    // public function saveCheckout($dataDua)
    // {
    //    $query = $this->db->table('checkout')->insert($dataDua);
    //   return $query;
    //}


}
