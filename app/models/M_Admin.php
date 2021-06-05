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

	public function create($data){
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

}

?>