<?php

namespace App\Controllers;
use App\Models\UsersModel;
use App\Models\ClientsModel;
use CodeIgniter\HTTP\Request;
use Exception;

class LoginController extends BaseController
{
	public function index()
	{
		$message = session('message');
		return view('login', ["message" => $message]);
	}

	public function login(){
		$user = $this->request->getPost('user');
		$pass = $this->request->getPost('pass');
		$User = new UsersModel();
		$dataUser = $User->getUser(['user' => $user]);
		if(count($dataUser) > 0 && password_verify($pass, $dataUser[0]['pass'])){
			$data = [
				'loggedIn' => 'yes',
				'name' => $dataUser[0]['name'],
				'user' => $dataUser[0]['user'],
				'rol' => $dataUser[0]['rol'],
			];
			$session = session();
			$session->set($data);
			return redirect()->to(base_url('/users'));
		}else{
			return redirect()->to(base_url('/'));
		}
	}

	public function users(){
		$User = new UsersModel();
		$session = session();
		$session->set('page_name','users');
		$data['users'] = $User->orderBy('id','ASC')->findAll();
		return view('users',$data);
	}

	public function clients(){
		$Client = new ClientsModel();
		$session = session();
		$session->set('page_name','clients');
		$Client->limit(10,3000);
		$data['clients'] = $Client->orderBy('id','ASC')->findAll();
		return view('clients',$data);
	}

	public function reports(){
		$session = session();
		$session->set('page_name','reports');
		return view('reports');
	}

	public function create(){
		if($this->request->getVar('error') === 'error'){
			$data['error'] = 'Usuario en uso';
			var_dump($data);
			//return view('create',$data);
		}else{
			return view('create');
		}
	}

	public function save(){
		if(session('page_name') === 'users'){
			$validate = $this->validate([
				'name' => 'required|min_length[2]',
				'user' => 'required|min_length[2]',
				'pass' => 'required|min_length[8]'
			]);
			if(!$validate){
				$session = session();
				$session->setFlashdata('message', 'Incorrect Username');
				return redirect()->back()->withInput();
			}else{
				$User = new UsersModel();
				$passhash = password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT);
				$data = [
					'name' => $this->request->getPost('name'),
					'user' => $this->request->getPost('user'),
					'pass' => $passhash,
					'rol' => $this->request->getPost('rol')
				];
				$User->insert($data);
			}
		}else{
			$validate = $this->validate([
				'name' => 'required|min_length[2]',
				'id_document' => 'required|min_length[2]',
				'email' => 'required|valid_email',
				'address' => 'required|min_length[2]'
			]);
			if(!$validate){
				$session = session();
				$session->setFlashdata('message', 'Incorrect Client');
				return redirect()->back()->withInput();
			}else{
				$Client = new ClientsModel();
				$data = [
					'name' => $this->request->getPost('name'),
					'id_document' => $this->request->getPost('id_document'),
					'email' => $this->request->getPost('email'),
					'address' => $this->request->getPost('address')
				];
				$Client->insert($data);
			}
		}
		return redirect()->to(base_url('/'.session('page_name')));
	}

	public function update($id=null){
		if(session('page_name') === 'users'){
			$User = new UsersModel();
			$data['user'] = $User->where('id',$id)->first();
		}else{
			$Client = new ClientsModel();
			$data['client'] = $Client->where('id',$id)->first();
		}
		return view('update',$data);
	}

	public function edit(){
		$id = $this->request->getPost('id');
		if(session('page_name') === 'users'){
			$User = new UsersModel();
			$passhash = password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT);
			$data = [
				'name' => $this->request->getPost('name'),
				'user' => $this->request->getPost('user'),
				'pass' => $passhash,
				'rol' => $this->request->getPost('rol')
			];
			$User->update($id,$data);
		}else{
			$Client = new ClientsModel();
			$data = [
				'name' => $this->request->getPost('name'),
				'id_document' => $this->request->getPost('id_document'),
				'email' => $this->request->getPost('email'),
				'address' => $this->request->getPost('address'),
			];
			$Client->update($id,$data);
		}
		return $this->response->redirect(base_url('/'.session('page_name')));
	}

	public function delete($id=null){
		if(session('page_name') === 'users'){
			$User = new UsersModel();
			$User->where('id',$id)->delete($id);
		}else{
			$Client = new ClientsModel();
			$Client->where('id',$id)->delete($id);
		}
		return $this->response->redirect(base_url('/'.session('page_name')));
	}

	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}
}
