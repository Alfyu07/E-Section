<?php 

class Database {
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $db_name = DB_NAME; 

	private $koneksi;
	private $data;

	public function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db_name);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	public function exec ($query){
		$this->data = mysqli_query($this->koneksi,$query);
		return $this->data;
	}

	// public function count (){
	// 	return $rowcount=mysqli_num_rows($data);
	// }
	
}






