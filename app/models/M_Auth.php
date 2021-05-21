<?php 

class M_Auth {

	private $data;
	private $koneksi;

	public function __construct(){
		$this->koneksi = new Database;
	}

	public function regist($data){
		$uname = $data['uname'];
		$email = $data['email'];
		$password = $data['password'];
		$tgl = $data['tahun']."-".$data['bulan']."-".$data['tanggal'];
		$que = "INSERT INTO user VALUES ('$uname','', '$email', '$password', '$tgl', 1)";
		$this->koneksi->exec($que);
	}

	public function valid($data){
		$uname = $data['uname'];
		$password = $data['password'];
		$que = "SELECT * FROM user where password = '$password' and uname = '$uname'";
		$hasil = $this->koneksi->exec($que);
		$num = mysqli_num_rows($hasil);
		return $num;
	}

}