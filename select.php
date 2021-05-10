<?php



	include 'config.php';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$user = $_POST['user'];
		$pass = $_POST['pass'];


		$queryuser = "SELECT * FROM siswa WHERE user = '$user' AND pass = '$pass'";
		
		$queryemail = "SELECT * FROM siswa WHERE email = '$user' AND pass = '$pass'";

		$execuser = mysqli_query($konek, $queryuser);

		$execemail = mysqli_query($konek, $queryemail);

		$resultuser = mysqli_fetch_all($execuser, MYSQLI_ASSOC);

		$resultemail = mysqli_fetch_all($execemail, MYSQLI_ASSOC);

		$cekuser = mysqli_num_rows($execuser);

		$cekemail = mysqli_num_rows($execemail);

		$data = [];
	
		if ($cekuser >= 1) {
			$data['kode'] = 201;
			$data['pesan']  = 'data tersedia' ;
			$data['data']  = $resultuser ;
			echo json_encode($data);
		}else if($cekemail >= 1){
			$data['kode'] = 201;
			$data['pesan']  = 'data tersedia' ;
			$data['data']  = $resultemail ;
			echo json_encode($data);
		}else{
			$data['kode'] = 400;
			$data['pesan']  = 'data tidak tersedia' ;
			echo json_encode($data);
		}	
	}else{
		$data['kode'] = 501;
		$data['pesan']  = 'tidak ada respon server' ;
		echo json_encode($data);
	}
	


?>
