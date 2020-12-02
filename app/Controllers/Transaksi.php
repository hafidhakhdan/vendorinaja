<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TransaksiModel;

class Transaksi extends Controller
{
    public function index()
    {
        $model = new TransaksiModel();
    }
}
