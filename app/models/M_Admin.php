<?php 

class M_Admin{
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

	public function create_konten($data){
		$id_role = $data['id_role'];
		$judul = $data['judul'];
		$source = $data['source'];
		$materi = $data['materi'];
		$gambar = $data['gambar'];
		$fakta = $data['fakta'];
		$tag = $data['tag'];
		$que = "INSERT INTO konten VALUES (null, $id_role, '$judul', '$source',
		'$materi', '$gambar', '$fakta', '$tag')";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function get_conten_byId($data){
		$que = "SELECT * FROM konten WHERE id_konten='$data'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function update($data){
		$id_konten = $data['id_konten'];
		$judul = $data['judul'];
		$source = $data['source'];
		$materi = $data['materi'];
		$fakta = $data['fakta'];
		$tag = $data['tag'];
		$que = "UPDATE konten SET judul='$judul', source='$source', materi='$materi', fakta='$fakta', tag='$tag' WHERE id_konten='$id_konten'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function up_foto($data){
		$id_konten = $data['id_konten'];
		$gambar = $data['gambar'];
		$que = "UPDATE konten SET gambar='$gambar' WHERE id_konten='$id_konten'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function delete($id){
		$que = "DELETE from konten WHERE id_konten='$id'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function input_test($data, $id){
		$judul = $data['judul'];
		$desc = $data['desc'];
		$label = $data['label1']."/".$data['label2']."/".$data['label3']."/".$data['label4'];
		$que = "INSERT INTO judul_soal VALUES (null, $id, '$judul', '$desc', '$label')";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function get_id_byJudul($data){
		$que = "SELECT id_judul FROM judul_soal WHERE judul='$data'";
		$hasil = $this->koneksi->exec($que);
		$result = mysqli_fetch_all($hasil);
		return $result[0][0];
	}

	public function tambah_soal($data, $id_judul){
		$soal = $data['soal'];
		$que = "INSERT INTO soal VALUES ($id_judul, null, '$soal')";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}
	
	public function get_judul_byId($data){
		$que = "SELECT judul, deskripsi FROM judul_soal WHERE id_judul='$data'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function get_soal_byId($id_judul){
		$que = "SELECT pertanyaan FROM soal WHERE id_judul='$id_judul'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function get_id_bySoal($data){
		$que = "SELECT id_soal, id_judul FROM soal WHERE pertanyaan='$data'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function delete_soal($data){
		$que = "DELETE from soal WHERE id_soal='$data'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function get_judul_byRole($data){
		$que = "SELECT judul, deskripsi FROM judul_soal WHERE id_role='$data'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function count_test($id){
		$que = "SELECT * FROM judul_soal WHERE id_role='$id'";
		$hasil = $this->koneksi->exec($que);
		$num = mysqli_num_rows($hasil);
		return $num;
	}

	public function update_test($data, $id){
		$judul = $data['judul'];
		$desc = $data['desc'];
		$que = "UPDATE judul_soal SET judul='$judul', deskripsi='$desc' WHERE id_judul='$id'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
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

	public function create_artikel($data){
		$id_role = $data['id_role'];
		$judul = $data['judul'];
		$source = $data['source'];
		$materi = $data['materi'];
		$gambar = $data['gambar'];
		$fakta = $data['fakta'];
		$tag = $data['tag'];
		$que = "INSERT INTO artikel VALUES (null, $id_role, '$judul', '$source',
		'$materi', '$gambar', '$fakta', '$tag')";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function get_artikel_byId($data){
		$que = "SELECT * FROM artikel WHERE id_artikel='$data'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

	public function updateArtikel($data){
		$id_konten = $data['id_artikel'];
		$judul = $data['judul'];
		$source = $data['source'];
		$materi = $data['materi'];
		$fakta = $data['fakta'];
		$tag = $data['tag'];
		$que = "UPDATE artikel SET judul='$judul', source='$source', materi='$materi', fakta='$fakta', tag='$tag' WHERE id_konten='$id_konten'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
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

	public function count_sc($id){
		$que = "SELECT * FROM artikel WHERE id_role='$id'";
		$hasil = $this->koneksi->exec($que);
		$num = mysqli_num_rows($hasil);
		return $num;
	}

	public function get_video($data){
		$que = "SELECT * FROM konten WHERE id_konten='$data'";
		$hasil = $this->koneksi->exec($que);
		return $hasil;
	}

}


?>