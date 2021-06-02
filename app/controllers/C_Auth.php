<?php 

class C_Auth extends Controller {

	public function index(){
		$data['judul'] = 'Welcome!';
		$this->view('templates/nav', $data);
		$this->view('home/menu_utama');
		$this->view('templates/footer');
	}

	public function login(){
		$data['judul'] = 'Login';
		$this->view('Auth/Login', $data);
	} 

	public function validasi(){
		if ($this->model("M_Auth")->valid($_POST)>0){
			header("location: ".BASEURL."/C_Auth/home");
		}else {
			echo "<script>alert('Password atau Username Anda Salah')</script>";
			header("location: ".BASEURL."/C_Auth/login");
		}
	}
	
	public function register(){
		$data['judul'] = 'Register';
		$this->view('Auth/Register',$data);
	}

	public function regist(){
		$data['judul'] = 'Register';
		if($this->model("M_Auth")->regist($_POST)){
			header("location: ".BASEURL);
		}
		else{
			header("location: ".BASEURL."/C_Auth/register");
		}
	}

	public function home(){
		$this->view('templates/header');
		$this->view('home/menu_utama');
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