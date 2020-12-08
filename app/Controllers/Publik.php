<?php

namespace App\Controllers;

class Publik extends BaseController
{
	public function index()
	{
		return view('landingPage');
	}

	public function pricing()
	{
		return view('pricing');
	}
	//public function dashboard()
	//{
	//	return view('home');
	//}


	//--------------------------------------------------------------------

}
