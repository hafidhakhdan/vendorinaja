<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{

	public function __construct()
	{
		helper('form');
	}

	public function login()
	{
		$session = session();
		$model = new UserModel();
		$email = $this->request->getVar('email');
		$passwordLogin = $this->request->getVar('passwordLogin');
		$data = $model->where('email', $email)->first();
		if ($data) {
			$pass = $data['password'];

			$verify_pass = password_verify($passwordLogin, $pass);
			if ($verify_pass) {
				$ses_data = [
					'id_user'       => $data['id_user'],
					'email'    		=> $data['email'],
					'level' => $data['level'],
					'logged_in'     => TRUE
				];
				$session->set($ses_data);
				return redirect()->to('/Home');
			} else {
				// $session->setFlashdata('msg', 'Wrong Password');
				return redirect()->to('/');
			}
		} else {
			//$session->setFlashdata('msg', 'Email not Found');
			return redirect()->to('/');
		}
	}

	public function register()
	{
		$data = [];
		//set rules validation form
		$rules = [
			//'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
			'email'         => 'required',
			//'password'      => 'required|min_length[6]|max_length[200]'
			'password'      => 'required'

		];

		if ($this->validate($rules)) {
			$model = new UserModel();
			$data = [
				'email'    => $this->request->getVar('email'),
				'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
				'level' =>  1
			];
			$model->save($data);
			return redirect()->to('/');
		} else {
			$data['validation'] = $this->validator;
			//echo view('register', $data);
			//echo 'dasdasd';
		}
	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to('/');
	}

	//--------------------------------------------------------------------

}
