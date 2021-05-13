<?php

	include 'config.php';
	if ($_SERVER['REQUEST_METHOD'] == 'GET') {

		$query = "SELECT * FROM tugas";
		
		$exec = mysqli_query($konek, $query);

		$result = mysqli_fetch_all($exec, MYSQLI_ASSOC);

		$cek = mysqli_num_rows($exec);

		$data = [];
	
		if ($cek >= 1) {
			$data['kode'] = "201";
			$data['pesan']  = 'data tersedia' ;
			$data['data']  = $result ;
			echo json_encode($data);
		}else{
			$data['kode'] = "400";
			$data['pesan']  = 'data tidak tersedia' ;
			echo json_encode($data);
		}	
	}else{
		$data['kode'] = "501";
		$data['pesan']  = 'tidak ada respon server' ;
		echo json_encode($data);
	}
	
?>