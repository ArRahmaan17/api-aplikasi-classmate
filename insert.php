<?php 	
	include 'config.php';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama = $_POST['nama'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$email = $_POST['email'];
		$kelas = $_POST['kelas'];
		$alamat = $_POST['alamat'];
		$telepone = $_POST['telepone'];

		$query = "INSERT INTO siswa VALUES (null,'$nama', '$user', '$pass', '$email', $kelas, '$alamat', '$telepone')";


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