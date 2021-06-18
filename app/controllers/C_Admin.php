<?php 

class C_Admin extends Controller{

    public function index(){
		// var_dump($_SESSION);
		$this->view('templates/nav');
		$this->view('admin/menu_utama');
		$this->view('templates/footer');
	}

	public function list_konten($id){
		// var_dump($id);
		$data['id_role']=$id;
		$data['jum']= $this->model("M_Admin")->count_conten($id);
		$data['isi']=$this->model("M_Admin")->get_conten($id);
		$this->view('templates/nav');
		$this->view('admin/konten', $data);
		$this->view('templates/footer');
	}

	public function add_konten($id){
		$this->view('templates/nav');
		$this->view('admin/tambah_konten', $id);
		$this->view('templates/footer');
	}

	public function save_konten($role){
		$target_dir = "C:/xampp/htdocs/E-Section/public/img/upload/";
		$target_file = $target_dir . basename($_FILES["upload"]["name"]);
		$_POST['gambar']=$_FILES["upload"]["name"];
		// var_dump($_POST);
		if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["upload"]["tmp_name"]);
		// var_dump($check);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
					// echo "The file ". htmlspecialchars( basename( $_FILES["upload"]["name"])). " has been uploaded.";
					$_POST['id_role']=$role;
					if($this->model("M_Admin")->create_konten($_POST)){
						header('location: '.BASEURL.'/C_Admin/list_konten/'.$role);
					}
					else {
						header('location: '.BASEURL.'/C_Admin/add_konten/'.$role);
					}
				} else {
					// echo "Sorry, there was an error uploading your file.";
					header('location: '.BASEURL.'/C_Admin/add_konten/'.$role);
				}
			}
		}
	}

	public function update_konten($id, $role){
		$data['id_konten']=$id;
		$data['id_role'] = $role;
		$data['isi']=$this->model("M_Admin")->get_conten_byId($id);
		$this->view('templates/nav');
		$this->view('admin/edit_konten', $data);
		$this->view('templates/footer');
	}

	public function update_foto($id){
		$target_dir = "C:/xampp/htdocs/E-Section/public/img/upload/";
		// var_dump($_FILES);
		$target_file = $target_dir . basename($_FILES["upload"]["name"]);
		$data['gambar']=$_FILES["upload"]["name"];
		if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["upload"]["tmp_name"]);
			if($check !== false) {
				if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
					$data['id_konten']=$id;
					if($this->model("M_Admin")->up_foto($data)){
						header('location: '.BASEURL.'/C_Admin/update_konten/'.$id);
					}
					else {
						header('location: '.BASEURL.'/C_Admin/update_konten/'.$id);
					}
				} else {
					header('location: '.BASEURL.'/C_Admin/update_konten/'.$id);
				}
			}
		}
	}
	
	public function edit($id, $role){
		$data['id'] = $id;
		$data['isi'] = $_POST;
		$_POST['id_konten']=$id;
		if($this->model("M_Admin")->update($_POST)){
			header('location: '.BASEURL.'/C_Admin/list_konten/'.$role);
		}
		else{
			header('location: '.BASEURL.'/C_Admin/update_konten/'.$id);
		}
	}

	public function delete_konten($id, $role){
		if($this->model("M_Admin")->delete($id)){
			header('location: '.BASEURL.'/C_Admin/list_konten/'.$role);
		}
	}

	public function list_test($id){
		$data['id_role']=$id;
		$data['jum']= $this->model("M_Admin")->count_test($id);
		$ket = $this->model("M_Admin")->get_judul_byRole($data['id_role']);
		$data['isi'] = $ket;
		$this->view('templates/nav');
		$this->view('admin/menu_test', $data);
		$this->view('templates/footer');
	}

	public function add_test($id){
		$data['id_role']=$id;
		$this->view('templates/nav');
		$this->view('admin/tambah_test', $data);
		$this->view('templates/footer');
	}

	public function input_test($id){
		// var_dump($_POST);
		if($this->model("M_Admin")->input_test($_POST, $id)){
			$data['id_judul'] = $this->model("M_Admin")->get_id_byJudul($_POST['judul']);
			$data['id'] = $id;
			$data['judul'] = $_POST['judul'];
			$data['desc'] = $_POST['desc'];
			$data['soal'] = $this->model("M_Admin")->get_soal_byId($data['id_judul']);
			$this->view('templates/nav');
			$this->view('admin/tambah_soal', $data);
			$this->view('templates/footer');
		}		
		else{
			header('location: '.BASEURL.'/C_Admin/add_test/'.$id);
		}
	}  

	public function hapus_soal($soal){
		$hasil = $this->model("M_Admin")->get_id_bySoal($soal);
		$result = mysqli_fetch_all($hasil);
		$data['id_judul'] = $result[0][1];
		$data['id_soal'] = $result[0][0];
		$ket = $this->model("M_Admin")->get_judul_byId($data['id_judul']);
		$keterangan = mysqli_fetch_all($ket);
		$data['judul'] = $keterangan[0][0];
		$data['desc'] = $keterangan[0][1];
		if($this->model("M_Admin")->delete_soal($data['id_soal'])){
			$data['soal'] = $this->model("M_Admin")->get_soal_byId($data['id_judul']);
			$this->view('templates/nav');
			$this->view('admin/tambah_soal', $data);
			$this->view('templates/footer');
		}
	}

	public function tambah_soal($id_judul){
		if(isset($_POST["add"])){
			if($this->model("M_Admin")->tambah_soal($_POST, $id_judul)){
				$hasil = $this->model("M_Admin")->get_judul_byId($id_judul);
				$result = mysqli_fetch_all($hasil);
				$data['id_judul'] = $id_judul;
				$data['judul'] = $result[0][0];
				$data['desc'] = $result[0][1];
				$data['soal'] = $this->model("M_Admin")->get_soal_byId($id_judul);
				$this->view('templates/nav');
				$this->view('admin/tambah_soal', $data);
				$this->view('templates/footer');
			}
		}
		if(isset($_POST["update"])){
			if($this->model("M_Admin")->update_test($_POST, $id_judul)){
				$hasil = $this->model("M_Admin")->get_judul_byId($id_judul);
				$result = mysqli_fetch_all($hasil);
				$data['id_judul'] = $id_judul;
				$data['judul'] = $result[0][0];
				$data['desc'] = $result[0][1];
				$data['soal'] = $this->model("M_Admin")->get_soal_byId($id_judul);
				$this->view('templates/nav');
				$this->view('admin/tambah_soal', $data);
				$this->view('templates/footer');
			}
		}

	}

	public function list_artikel($id){
		// var_dump($id);
		$data['id_role']=$id;
		$data['jum']= $this->model("M_Admin")->count_artikel($id);
		$data['isi']=$this->model("M_Admin")->get_artikel($id);
		$this->view('templates/nav');
		$this->view('admin/artikel', $data);
		$this->view('templates/footer');
	}

	public function add_artikel($id){
		$this->view('templates/nav');
		$this->view('admin/tambah_artikel', $id);
		$this->view('templates/footer');
	}

	public function save_artikel($role){
		$target_dir = "C:/xampp/htdocs/E-Section/public/img/upload/";
		$target_file = $target_dir . basename($_FILES["upload"]["name"]);
		$_POST['gambar']=$_FILES["upload"]["name"];
		// var_dump($_POST);
		if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["upload"]["tmp_name"]);
		// var_dump($check);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
					// echo "The file ". htmlspecialchars( basename( $_FILES["upload"]["name"])). " has been uploaded.";
					$_POST['id_role']=$role;
					if($this->model("M_Admin")->create_artikel($_POST)){
						header('location: '.BASEURL.'/C_Admin/list_artikel/'.$role);
					}
					else {
						header('location: '.BASEURL.'/C_Admin/add_artikel/'.$role);
					}
				} else {
					// echo "Sorry, there was an error uploading your file.";
					header('location: '.BASEURL.'/C_Admin/add_artikel/'.$role);
				}
			}
		}
	}

	public function update_artikel($id, $role){
		$data['id_artikel']=$id;
		$data['id_role'] = $role;
		$data['isi']=$this->model("M_Admin")->get_artikel_byId($id);
		$this->view('templates/nav');
		$this->view('admin/edit_artikel', $data);
		$this->view('templates/footer');
	}

	public function update_fotoA($id){
		$target_dir = "C:/xampp/htdocs/E-Section/public/img/upload/";
		// var_dump($_FILES);
		$target_file = $target_dir . basename($_FILES["upload"]["name"]);
		$data['gambar']=$_FILES["upload"]["name"];
		if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["upload"]["tmp_name"]);
			if($check !== false) {
				if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
					$data['id_konten']=$id;
					if($this->model("M_Admin")->up_foto($data)){
						header('location: '.BASEURL.'/C_Admin/update_konten/'.$id);
					}
					else {
						header('location: '.BASEURL.'/C_Admin/update_konten/'.$id);
					}
				} else {
					header('location: '.BASEURL.'/C_Admin/update_konten/'.$id);
				}
			}
		}
	}
	
	public function editArtikel($id, $role){
		$data['id'] = $id;
		$data['isi'] = $_POST;
		$_POST['id_artikel']=$id;
		if($this->model("M_Admin")->updateArtikel($_POST)){
			header('location: '.BASEURL.'/C_Admin/list_artikel/'.$role);
		}
		else{
			header('location: '.BASEURL.'/C_Admin/update_artikel/'.$id);
		}
	}

	public function delete_artikel($id, $role){
		if($this->model("M_Admin")->delete($id)){
			header('location: '.BASEURL.'/C_Admin/list_konten/'.$role);
		}
	}

	public function list_sc($id){
		$data['id_role']=$id;
		// $data['jum']= $this->model("M_Admin")->count_sc($id);
		$data['isi1']=$this->model("M_Admin")->get_scArtikel($id);
		$data['isi2']=$this->model("M_Admin")->get_scVideo($id);
		// var_dump($data);
		$this->view('templates/nav');
		$this->view('admin/source', $data);
		$this->view('templates/footer');
	}

	public function VideoPage($sc){
		$this->view('templates/nav');
		$this->view('admin/video', $sc);
		$this->view('templates/footer');
	}
	
}

?>