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
		$target_dir = "C:/xampp/htdocs/E-Section/public/img/";
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
					if($this->model("M_Admin")->create($_POST)){
						header('location: '.BASEURL.'/C_Admin/list_konten'.$role);
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


}

?>