<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('landingPage');
	}
	public function home()
	{
		return view('home');
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
