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
		$umur = $this->hitung_umur($tgl);
		if($umur>=18){
			//dewasa
			$role = 2;
		}
		else if($umur>=13){
			$role = 3;
		}
		else{
			$role = 4;
		}
		$que = "INSERT INTO user VALUES ('$uname', '', '$email', '$password', '$tgl', $role)";
		$hasil = $this->koneksi->exec($que);
		// $num = mysqli_num_rows($hasil);
		return $hasil;
	}

	public function valid($data){
		$uname = $data['uname'];
		$password = $data['password'];
		$que = "SELECT * FROM user where password = '$password' and uname = '$uname'";
		$hasil = $this->koneksi->exec($que);
		$num = mysqli_num_rows($hasil);
		if ($num>0) {
			$row = mysqli_fetch_all($hasil);
			$umur = $this->hitung_umur($row[0][4]);
			if($umur>=18){
				//dewasa
				$role = 2;
			}
			else if($umur>=13){
				$role = 3;
			}
			else{
				$role = 4;
			}
			if($role!=$row[0][5] && $row[0][5]!=1){
				$que = "UPDATE user SET id_role=$role WHERE uname='". $row[0][0]."'";
				$this->koneksi->exec($que);
			}
			$_SESSION['uname']=$row[0][0];
			$_SESSION['id_role']=$row[0][5];
		}
		return $num;
	}

	function get_role($id){
		$que = "SELECT * FROM user where uname = '$id'";
		$hasil = $this->koneksi->exec($que);
		$row = mysqli_fetch_all($hasil);
		return $row[0][5];
	}

	function hitung_umur($tanggal_lahir){
		$tanggal_lahir = new DateTime($tanggal_lahir);
		$sekarang = new DateTime("today");
		if ($tanggal_lahir > $sekarang) { 
		$thn = "0";
		}
		$thn = $sekarang->diff($tanggal_lahir)->y;
		return $thn;
	}
}