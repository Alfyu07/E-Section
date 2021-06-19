<?php 

class C_User extends Controller{
    
    public function index(){
		// var_dump($_SESSION);
		$this->view('templates/navv');
		$this->view('menu_user/menu_utama');
		$this->view('templates/footer');
	}

    public function list_konten($id){
		// var_dump($id);
		$data['id_role']=$id;
		$data['jum']= $this->model("M_User")->count_conten($id);
		$data['isi']=$this->model("M_User")->get_conten($id);
		$this->view('templates/navv');
		$this->view('admin/konten', $data);
		$this->view('templates/footer');
	}

    public function list_test($id){
		$data['id_role']=$id;
		$data['jum']= $this->model("M_User")->count_test($id);
		$ket = $this->model("M_User")->get_judul_byRole($data['id_role']);
		$data['isi'] = $ket;
        // var_dump($ket);
		$this->view('templates/navv');
		$this->view('admin/menu_test', $data);
		$this->view('templates/footer');
	}

    public function list_artikel($id){
		// var_dump($id);
		$data['id_role']=$id;
		$data['jum']= $this->model("M_User")->count_artikel($id);
		$data['isi']=$this->model("M_User")->get_artikel($id);
		$this->view('templates/navv');
		$this->view('admin/artikel', $data);
		$this->view('templates/footer');
	}

    public function list_sc($id){
		$data['id_role']=$id;
		// $data['jum']= $this->model("M_Admin")->count_sc($id);
		$data['isi1']=$this->model("M_User")->get_scArtikel($id);
		$data['isi2']=$this->model("M_User")->get_scVideo($id);
		// var_dump($data);
		$this->view('templates/navv');
		$this->view('admin/source', $data);
		$this->view('templates/footer');
	}

    public function profil(){
		$hasil = $this->model("M_User")->get_profil($_SESSION['uname']);
        $tgl =  $this->model("M_User")->get_tgl_tes($_SESSION['uname']);
        $tgl = mysqli_fetch_all($tgl);
        // var_dump($tgl);
        $data['hasil'] =$hasil;
        $data['tgl'] = $tgl[0][0];
        // echo $tgl;
        // var_dump(mysqli_fetch_assoc($hasil));
        $this->view('templates/navv');
        $this->view('home/profile', $data);
        $this->view('templates/footer');
	}

    public function edit_profile($email, $uname, $gambar){
		$this->view('templates/navv');
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

    public function mengtes($test,$id){
        
        $data['judul'] = $test;
        $data['id_judul'] = $id;
        $this->view('templates/navv');
        $this->view('tes/test1',$data);
        $this->view('templates/footer');
    }

    public function tes($test,$judul){
        $id = $this->model("M_User")->get_soal($test);
        // $soal = $this->model("M_Admin")->get_soal_byId($id);
        // var_dump($id);
        $data['isi'] = $id;
        $data['judul'] =$judul;
        $data['id_judul'] =$test;
        // var_dump($data);
        $this->view('templates/navv');
        $this->view('tes/test2',$data);
        $this->view('templates/footer');
    }

    public function hasilTes($id_judul, $judul){
        $data['id_role'] = $this->model("M_User")->get_Role_byId($id_judul);
        $label = $this->model("M_User")->get_label($id_judul);
        $larray = explode('/', $label);
        $hasil=0;
        $jum=0;
        foreach($_POST as $row){
            $hasil+=$row;
            $jum+=1;
        }
        $max = $jum*5;

        $kategori=1;

        if ($hasil>=0.75*$max) {
            $kategori=1;
        } elseif ($hasil>=0.5*$max) {
            $kategori=2;
        } elseif ($hasil>=0.25*$max) {
            $kategori=3;
        } else {
            $kategori=4;
        }
        $data['maks'] = $max;
        $data['hasil'] = $hasil;
        $data['kategori'] = $larray[$kategori-1];
        $data['judul'] = $judul;

        $this->model('M_User')->add_riwayat($data);
        $this->view('templates/navv');
        $this->view('tes/test3',$data);
        $this->view('templates/footer');
    }

    public function logout(){
        session_destroy();
        header("location: ".BASEURL);
    }    

}

?>