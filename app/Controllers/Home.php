<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('landingPage');
	}
	//public function dashboard()
	//{
	//	return view('home');
	//}
	//public function home()
	//{
	//	return view('home');
	//}
	public function checkout()
	{
		return view('checkout');
	}
	public function help()
	{
		return view('helpPage');
	}

	public function transaksi()
	{
		return view('transaction');
	}
	//--------------------------------------------------------------------

}
