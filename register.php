<?php 	
	include 'config.php';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		//nama var di [] harus sama seperti yang di android studio
		$nama = $_POST['nama'];
		$password = $_POST['password'];
		$kelas = $_POST['kelas'];
		$foto = $_POST['foto'];
		$namaibu = $_POST['nama_ibu'];
		$telepone = $_POST['no_telp'];
		$email = $_POST['email'];

		$query = "INSERT INTO pelajar VALUES (null, '$nama', '$password', $kelas, '$foto', '$namaibu', '$telepone','$email')";


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