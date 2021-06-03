<?php 

class C_User extends Controller{
    
    public function index(){
        // var_dump($_SESSION);
        if($_SESSION['id_role']==2){
            $this->view('templates/nav');
            $this->view('menu_user/menu');
            $this->view('templates/footer');
        }
        else if($_SESSION['id_role']==3){
            $this->view('templates/nav');
            $this->view('menu_user/menu');
            $this->view('templates/footer');
        }
        else if($_SESSION['id_role']==4){
            $this->view('templates/nav');
            $this->view('menu_user/menu');
            $this->view('templates/footer');
        }
        
	}

    public function logout(){
        session_destroy();
        header("location: ".BASEURL);
    }    

}

?>