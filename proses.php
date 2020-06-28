<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$nama = $ttl =$alamat =$agama = $jenis_kelamin=$Asal_sekolah =$NUN =$Jurusan=$alasan =" ";
		if($_SERVER['REQUEST_METHOD'] == "POST" ){
			$nama = $_POST['innama']; 
			$ttl = $_POST['inttl'];
			$alamat = $_POST['inalamat'];
			$agama = $_POST['inagama'];
			$jenis_kelamin = $_POST['inJenis'];
			$Asal_sekolah = $_POST['inasal_sekolah'];
			$NUN = $_POST['innilaiUN'];
			$Jurusan = $_POST['injurusan'];
			$alasan = $_POST['inAlasan'];
		
			$salah =0;	
		}

		

		if(!empty($nama) && !empty($ttl) && !empty($alamat) && !empty($agama) && !empty($jenis_kelamin) && !empty($Asal_sekolah) && !empty($NUN) && !empty($Jurusan) && !empty($alasan)){


			if (is_numeric($nama)) {
				# code...
				echo "<center>Nama : tidak sesusai  <br></center></center>";
				$salah++;		
			}
			else{
				echo "<center>Nama :" .$nama ."<br></center>";
			}
			if (is_numeric($ttl)) {
				# code...
				echo "<center>Tempat, tanggal Lahir : tidak sesusai <br></center>";
				$salah++;
			}
			else{
				echo "<center>Tempat, tanggal Lahir :" .$ttl ."<br></center>";
			}
			if (is_numeric($alamat)) {
				# code...
				echo "<center>Alamat : tidak sesusai <br></center>";
				$salah++;
			}
			else{
				echo "<center>Alamat : " .$alamat ."<br></center>";
			}
			if (is_null($agama)) {
				# code...
				echo "<center>Agama : tidak sesusai <br></center>";
				$salah++;
			}
			else{
				echo "<center>Agama : " .$agama ."<br></center>";
			}
			if (is_null($jenis_kelamin)) {
				# code...
				echo "<center>Jenis Kelamin : tidak sesusai <br></center>";
				$salah+=1;
			}
			else{
				echo "<center>Jenis Kelamin : " .$jenis_kelamin ."<br></center>";
			}
			if (is_numeric($Asal_sekolah)) {
				# code...
				echo "<center>Asal Sekolah : tidak sesusai <br></center>";
				$salah++;
			}
			else{
				echo "<center>Asal Sekolah : " .$Asal_sekolah ."<br></center>";
			}
			if (is_numeric($NUN)) {
				# code...
				echo "<center>Nilai Ujian Nasianal : " .$NUN ."<br></center>";
			}
			else{
				echo "<center>Nilai Ujian Nasianal : tidak sesusai <br></center>";
				$salah=1;
			}
			if (is_null($Jurusan)) {
				# code...
				echo "<center>Jurusan : tidak sesusai <br></center>";
				$salah++;
			}
			else{
				echo "<center>Jurusan : " .$Jurusan ."<br></center>";
			}
			if (is_numeric($alasan)) {
				# code...
				echo "<center>Alasan : tidak sesusai <br></center>";
				$salah++;
			}
			else{
				echo "<center>Alasan : " .$alasan ."<br></center>";
			}

			if ($salah >0) {
				# code...
				echo "<center><a href='form1.html'><button> isi kembali </button></a></center>";
			}
			else {
				# code...
				echo "<script type='text/javascript'>alert('selamat Datang')</script>";
			}
			

			
		}
		else{
			if(empty($nama)){
				echo "<center>Nama : Kosong <br>";
			}
			else if (is_numeric($nama)) {
				# code...
				echo "<center>Nama : tidak sesusai  <br></center>";
			}
			else{
				echo "<center>Nama :" .$nama ."<br></center>";
			}
			if(empty($ttl)){
				echo "<center>Tempat, tanggal Lahir : Kosong <br></center>";
			}
			else if (is_numeric($ttl)) {
				# code...
				echo "<center>Tempat, tanggal Lahir : tidak sesusai <br></center>";
			}
			else{
				echo "<center>Tempat, tanggal Lahir :" .$ttl ."<br></center>";
			}
			if(empty($alamat)){
				echo "<center>Alamat : Kosong <br></center>";
			}
			else if (is_numeric($alamat)) {
				# code...
				echo "<center>Alamat : tidak sesusai <br></center>";
			}
			else{
				echo "<center>Alamat : " .$alamat ."<br></center>";
			}
			if(empty($agama)){
				echo "<center>Agama : Kosong <br></center>";
			}
			else if (is_null($agama)) {
				# code...
				echo "</center>Agama : tidak sesusai <br></center>";
			}
			else{
				echo "<center>Agama : " .$agama ."<br></center>";
			}
			if(empty($jenis_kelamin)){
				echo "<center>Jenis Kelamin : Kosong <br></center>";
			}
			else if (is_null($jenis_kelamin)) {
				# code...
				echo "<center>Jenis Kelamin : tidak sesusai <br></center>";
			}
			else{
				echo "<center>Jenis Kelamin : " .$jenis_kelamin ."<br></center>";
			}
			if(empty($Asal_sekolah)){
				echo "<center>Asal Sekolah : Kosong <br></center>";
			}
			else if (is_numeric($Asal_sekolah)) {
				# code...
				echo "<center>Asal Sekolah : tidak sesusai <br></center>";
			}
			else{
				echo "<center>Asal Sekolah : " .$Asal_sekolah ."<br></center>";
			}
			if(empty($NUN)){
				echo "<center>Nilai Ujian Nasianal : Kosong <br></center>";
			}
			else if (is_numeric($NUN)) {
				# code...
				echo "<center>Nilai Ujian Nasianal : " .$NUN ."<br></center>";
			}
			else{
				echo "<center>Nilai Ujian Nasianal : tidak sesusai <br></center>";
			}
			if(empty($Jurusan)){
				echo "<center>Jurusan : Kosong <br></center>";
			}
			else if (is_null($Jurusan)) {
				# code...
				echo "<center>Jurusan : tidak sesusai <br></center>";
			}
			else{
				echo "<center>Jurusan : " .$Jurusan ."<br></center>";
			}
			if(empty($alasan)){
				echo "<center>Alasan : Kosong <br></center>";
			}
			else if (is_numeric($alasan)) {
				# code...
				echo "<center>Alasan : tidak sesusai <br></center>";
			}
			else{
				echo "<center>Alasan : " .$alasan ."<br></center>";
			}
			echo "<center><a href='form1.html'><button> isi kembali </button></a></center>";
		}

		

		
	?>


	
</body>
</html>