<?php 

class C_Auth extends Controller {

	public function index()
	{
		$data['judul'] = 'Login';
		$this->view('templates/header', $data);
		$this->view('Auth/Login', $data);
		$this->view('templates/footer');
	}

	public function login(){
		$data['judul'] = 'Login';
		$this->view('templates/header', $data);
		$this->view('Auth/Login',$data);
		$this->view('templates/footer');
	}

	public function validasi(){
		$data['judul'] = 'Masuk';
		if ($this->model("M_Auth")->valid($_POST)>0){
			echo "berhasil";
		}else {
			echo "gagal";
		}

		$this->view('templates/header', $data);
		$this->view('home/index');
		$this->view('templates/footer');
	}

	public function register(){
		$data['judul'] = 'Register';

		$this->view('templates/header', $data);
		$this->view('Auth/Register',$data);
		$this->view('templates/footer');
	}

	public function tambah(){
		$data['judul'] = 'Register';

		$this->model("M_Auth")->regist($_POST);

		$this->view('templates/header', $data);
		$this->view('Auth/Login',$data);
		$this->view('templates/footer');
	}

	public function hapus($id){
		$data['judul'] = 'Berhasil';
		$database = new Database;
		$data['data'] = $database->exec("SELECT * FROM `mahasiswa`");
		
		$this->model("Auth")->hapus($id);
		
		$this->view('templates/header', $data);
		$this->view('Auth/Login', $data);
		$this->view('templates/footer');
	}

}