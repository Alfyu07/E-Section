<?php 

class M_User{
    private $data;
	private $koneksi;

	public function __construct(){
		$this->koneksi = new Database;
	}

	public function get_conten($id){
		$que = "SELECT * FROM konten WHERE id_role='$id'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function count_conten($id){
		$que = "SELECT * FROM konten WHERE id_role='$id'";
		$hasil = $this->koneksi->exec($que);
		$num = mysqli_num_rows($hasil);
		return $num;
	}

	public function get_profil($id){
		$que = "SELECT * FROM user WHERE uname='$id'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function edit_profile($id, $data){
		$email = $data['email'];
		$pass = $data['passbar'];
		$que = "UPDATE user SET email='$email', password='$pass' WHERE uname='$id'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function save_profile($id, $data){
		$que = "UPDATE user SET avatar='$data' WHERE uname='$id'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function get_judul_byRole($data){
		$que = "SELECT * FROM judul_soal WHERE id_role='$data'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function count_test($id){
		$que = "SELECT * FROM judul_soal WHERE id_role='$id'";
		$hasil = $this->koneksi->exec($que);
		$num = mysqli_num_rows($hasil);
		return $num;
	}

	public function get_artikel($id){
		$que = "SELECT * FROM artikel WHERE id_role='$id'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function count_artikel($id){
		$que = "SELECT * FROM artikel WHERE id_role='$id'";
		$hasil = $this->koneksi->exec($que);
		$num = mysqli_num_rows($hasil);
		return $num;
	}

	public function get_scArtikel($data){
		$que = "SELECT source FROM artikel WHERE id_role='$data'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function get_scVideo($data){
		$que = "SELECT source FROM konten WHERE id_role='$data'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function get_soal($data){
		$que = "SELECT pertanyaan FROM soal WHERE id_judul='$data'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}
}

?>