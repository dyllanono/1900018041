<!DOCTYPE html>
<html>
<head>
	<title>tabel</title>
</head>
<body>
	<style type="text/css">
		table, tr, td{
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>


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
		
			

			$fp = fopen("dataPMB.txt", "a+");

			fputs($fp, "$nama | $ttl | $alamat | $agama | $jenis_kelamin | $Asal_sekolah | $NUN | $Jurusan | $alasan \n");
			fclose($fp);

		}
		
	?>


	<table style="width: 100%">
		<tr>
			<td colspan="2" height="50px"; align="center">
				<h3>Bukti Pendaftaran SMA Negeri 2 Cilacap </h3>
			</td>
		</tr>
		<?php
			$fp = fopen("dataPMB.txt", "a+");
			$isi = fgets($fp,100);
			$pisah = explode("|", $isi);

			echo "<tr><td>Nama  </td><td>: $pisah[0]</td></tr>";
			echo "<tr><td>Tempat, tanggal Lahir  </td><td>: $pisah[1]</td></tr>";
			echo "<tr><td>Alamat  </td><td>: $pisah[2]</td></tr>";
			echo "<tr><td>Agama</td><td>: $pisah[3]</td></tr>";
			echo "<tr><td>Jenis Kelamin</td><td>: $pisah[4]</td></tr>";
			echo "<tr><td>Asal Sekolah  </td><td>: $pisah[5]</td></tr>";
			echo "<tr><td>Nilai Ujian Nasional  </td><td>: $pisah[6]</td></tr>";
			echo "<tr><td>Jurusan yang dipilih</td><td>: $pisah[7]</td></tr>";
			echo "<tr><td>Alasan masuk jurusan tersebut</td><td>: $pisah[8]</td></tr>";
			fclose($fp);

		?>
		<tr>
			<td colspan="2">
				<p>Saya yang bertanda tangan dibawah ini menyatakan bahwa data yang saya masukan sudah saya nyatakan benar
				</p>
				<p align="right">  
					<?php
							echo "format tanggal";
						
					?>
				</p>
				<br>
				<br>
				<br>
				<p align="right"> 
					<script type='text/javascript'> alert('Selamat data anda tersimpan');</script>
				</p>
			</td>
		</tr>
	</table>

</body>
</html>
