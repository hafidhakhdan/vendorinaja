<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{

    public function getDetailProduk()
    {
        $builder = $this->db->table('detail_produk');
        return $builder->get();
    }

    public function getProduk()
    {
        $builder = $this->db->table('produk');
        return $builder->get();
    }

    public function saveProduk($data)
    {
        $query = $this->db->table('detail_produk')->insert($data);
        return $query;
    }
}
