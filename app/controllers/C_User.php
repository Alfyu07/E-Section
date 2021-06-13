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

    public function logout(){
        session_destroy();
        header("location: ".BASEURL);
    }    

}

?>