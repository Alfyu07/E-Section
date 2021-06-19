<?php 

class C_User extends Controller{
    
    public function index(){
		// var_dump($_SESSION);
		$this->view('templates/nav');
		$this->view('menu_user/menu_utama');
		$this->view('templates/footer');
	}

    public function list_konten(){
        // var_dump($_SESSION);
		$_SESSION['jum']= $this->model("M_User")->count_conten($_SESSION['id_role']);
		$_SESSION['isi']=$this->model("M_User")->get_conten($_SESSION['id_role']);
        
        if($_SESSION['id_role']==2){
            $this->view('templates/nav');
            $this->view('menu_user/konten', $_SESSION['id_role']);
            $this->view('templates/footer');
        }
        else if($_SESSION['id_role']==3){
            $this->view('templates/nav');
            $this->view('menu_user/konten', $_SESSION['id_role']);
            $this->view('templates/footer');
        }
        else if($_SESSION['id_role']==4){
            $this->view('templates/nav');
            $this->view('menu_user/konten', $_SESSION['id_role']);
            $this->view('templates/footer');
        }
        
	}

    public function profil(){
		$hasil = $this->model("M_User")->get_profil($_SESSION['uname']);
        // var_dump(mysqli_fetch_assoc($hasil));
        $this->view('templates/nav');
        $this->view('home/profile', $hasil);
        $this->view('templates/footer');
	}

    public function edit_profile($email, $uname, $gambar){
		$this->view('templates/nav');
        $data['email']=$email;
        $data['uname']=$uname;
        $data['gambar']=$gambar;
        // var_dump($dara);
        $this->view('home/edit_profile', $data);
        $this->view('templates/footer');

    }

    public function mengedit($email, $uname){
        $profil = $this->model("M_User")->get_profil($uname);
        $result = mysqli_fetch_all($profil);
        if($_POST['passlam']==$result[0][3] && $_POST['passbar']==$_POST['confirm']){
            if($this->model("M_User")->edit_profile($uname, $_POST)){
                header('location: '.BASEURL.'/C_User/profil.');
            }
        }
        else{
            header('location: '.BASEURL.'/C_User/edit_profile/'.$email.'/'.$uname);
        }
    }

    public function save_profile($uname){
        $email="a";
		$target_dir = "C:/xampp/htdocs/E-Section/public/img/upload/";
		$target_file = $target_dir . basename($_FILES["upload"]["name"]);
		//$_POST['gambar']=$_FILES["upload"]["name"];
		// var_dump($_POST);
		if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["upload"]["tmp_name"]);
		// var_dump($check);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
					// echo "The file ". htmlspecialchars( basename( $_FILES["upload"]["name"])). " has been uploaded.";
					//$_POST['id_uname']=$uname;
					if($this->model("M_User")->save_profile($uname,$_FILES["upload"]["name"])){
						header('location: '.BASEURL.'/C_User/profil/');
					}
					else {
						header('location: '.BASEURL.'/C_Admin/edit_profile/'.$email.'/'.$uname.'/'.$_FILES["upload"]["name"]);
					}
				} else {
					// echo "Sorry, there was an error uploading your file.";
					header('location: '.BASEURL.'/C_Admin/edit_profile/'.$email.'/'.$uname.'/'.$_FILES["upload"]["name"]);
				}
			}
		}
	}

    public function logout(){
        session_destroy();
        header("location: ".BASEURL);
    }    

}

?>