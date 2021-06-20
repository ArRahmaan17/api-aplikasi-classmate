<?php 	
	include 'config.php';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama = $_POST['nama'];
		$password = $_POST['password'];
		$kelas = $_POST['kelas'];
		$namaibu = $_POST['namaibu'];
		$telepone = $_POST['telepone'];
		$email = $_POST['email'];

		$query = "INSERT INTO pelajar VALUES (null, '$nama', '$password', $kelas, null, '$namaibu', '$telepone','$email')";


		$exec = mysqli_query($konek, $query);
		$data = [];
		if ($exec) {
			$data['kode'] =  "201";
			$data['pesan']  = 'data berhasil di masukan';
			echo json_encode($data);
	 	}else{
	 		$data['kode'] =  "400";
			$data['pesan']  = 'data gagal di masukan';
			echo json_encode($data);
	 	}
	}else{
		$data['kode'] =  "501";
		$data['pesan']  = 'tidak ada respon server';
		echo json_encode($data);
	}

	

 ?>