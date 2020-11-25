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
	public function help()
	{
		return view('helpPage');
	}



	//--------------------------------------------------------------------

}
