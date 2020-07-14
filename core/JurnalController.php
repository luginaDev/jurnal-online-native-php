<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'jurnal');
date_default_timezone_set('Asia/Jakarta');

class JurnalController  {

	public function index($table){
		global $koneksi;
		$sql = "SELECT * FROM $table";
		$query = mysqli_query($koneksi, $sql);
		$data = [];
		while ($bigData = mysqli_fetch_assoc($query)) {
		    $data[] = $bigData;
		}
		return $data;
	
	}

	public function limit($table){
		global $koneksi;
		$sql = "SELECT * FROM $table ORDER BY id DESC limit 5";
		$query = mysqli_query($koneksi, $sql);
		$data = [];
		while ($bigData = mysqli_fetch_assoc($query)) {
		    $data[] = $bigData;
		}
		return $data;
	}

	public function selectWhere($where)
	{
		global $koneksi;
		$sql = "SELECT * FROM jurnal INNER JOIN user ON (jurnal.user_id = user.user_id) WHERE slug = '$where'";
		$query = mysqli_query($koneksi, $sql);
		$data = [];
		while ($bigData = mysqli_fetch_assoc($query)) {
		    $data[] = $bigData;
		}
		return $data;

	}

	public function search($where)
	{
		global $koneksi;
		$sql = "SELECT * FROM jurnal INNER JOIN user ON (jurnal.user_id = user.user_id) WHERE slug % '$where' %";
		$query = mysqli_query($koneksi, $sql);
		$data = [];
		while ($bigData = mysqli_fetch_assoc($query)) {
		    $data[] = $bigData;
		}
		return $data;

	}

	public function create(){

	}

	public function update(){

	}

	public function delete(){

	}


}





 ?>