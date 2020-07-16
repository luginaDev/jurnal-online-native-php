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

	public function insert($table, $values){
		global $koneksi;
		$sql = "INSERT INTO $table VALUES ($values)";
		$query = mysqli_query($koneksi, $sql);
		if ($query) {
				return ['response' => 'positive', 'alert' => 'Berhasil'];
		}else{
			return ['response' => 'negative', 'alert' => 'Gagal'];
		}
	}

	public function validateFile(){
	    	global $koneksi;
	    	$name 		= $_FILES['source']['name'];
	    	$ukuranFile = $_FILES['source']['size'];
	    	$error 		= $_FILES['source']['error'];
	    	$tmpName 	= $_FILES['source']['tmp_name'];
	    	$folder = '/public';
	    	$extensiGambar 		= explode('.', $name);
	    	$namaGambar 		= $extensiGambar[0];
	    	$ekstensiBelakang 	= strtolower(end($extensiGambar));
	    	$ekstensi 			= ['pdf'];
	    	$error 				= array();

	    	if (in_array($ekstensiBelakang, $ekstensi) === false) {
	            return ['response' => 'negative', 'alert' => 'File hanya boleh menggunakan ekstensi PDF'];
	        }

	        if ($ukuranFile > 25000000) {
	            return ['response' => 'negative', 'alert' => 'Ukuran file terlalu besar'];
	        }


	       $rand = rand();
	       
	       move_uploaded_file($_FILES['source']['tmp_name'], 'file/'.$rand.'_'.$name);

	        return ['types' => 'true', 'file' => $name];
	    }

	public function update(){

	}

	public function delete(){

	}


}





 ?>