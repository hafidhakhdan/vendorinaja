<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class Home extends BaseController
{
	public function index()
	{
		return view('Home');
	}

	public function home()
	{
		return view('Home');
	}

	public function checkout()
	{

		$model = new TransaksiModel();
		// $data['product']  = $model->getProduct()->getResult();
		$data['custom_produk'] = $model->getDataCheckout()->getResult();
		//echo view('product_view', $data);

		return view('checkout', $data);
	}
	public function help()
	{
		return view('helpPage');
	}

	public function transaksi()
	{
		$model = new TransaksiModel();
		$data['transaksi'] = $model->getDataCheckout()->getResult();
		$data['checkout'] = $model->getDataCheckout()->getResult();
		return view('transaction', $data);
	}
	public function custom()
	{
		return view('customProduct');
	}
	public function pricing()
	{
		return view('pricing');
	}
	public function admin()
	{
		return view('admin');
	}




	//--------------------------------------------------------------------

}
