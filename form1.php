<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<form method="post" action="tabel.php">
		<table style="border: 1px solid black; border-collapse: collapse;" width="100%">
			<tr>
				<td colspan="2" height="50px"; align="center">
					<h3>Form Pendaftaran SMA Negeri 2 Cilacap </h3>
				</td>
			</tr>
			<tr>
				<td width="30%" height="12px" style="font-size: 17px">
					<label>Nama</label>
					<br>
					<label>Tempat, Tanggal Lahir</label>
					<br>
					<label>Alamat</label>
					<br>
					<label>Agama</label>
					<br>
					<label>Jenis Kelamin</label>
					<br>
					<label>Asal Sekolah</label>
					<br>
					<label>Nilai Ujian Nasional</label>
					<br>
					<label>Jurusan yang dipilih</label>
					<br>
					<label>Alasan masuk jurusan tersebut</label>
				</td>
				<td height="12px" width="70%">
					: <input type="text" name="innama" style="width: 40%" required="">
					<br>
					: <input type="text" name="inttl" style="width: 40%" required="">
					<br>
					: <input type="text" name="inalamat" style="width: 40%" required="">
					<br>
					: <select style="width: 20%" name="inagama" required="">
						<option value=""></option>
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen</option>
						<option value="Katolik">Katolik</option>
						<option value="Hindu">Hindu</option>
						<option value="Budha">Budha</option>
					</select>
					<br>
					: <input type="radio" name="inJenis" value="Laki-laki" checked=""> laki-laki
					<input type="radio" name="inJenis" value="Perempuan" > Perempuan
					<br>
					: <input type="text" name="inasal_sekolah" style="width: 40%" required="">
					<br>
					: <input type="float" name="innilaiUN" style="width: 40%" required="">
					<br>
					: <select style="width: 20%" name="injurusan" required="">
						<option value=""></option>
						<option value="MIPA">MIPA</option>
						<option value="IPS">IPS</option>
						<option value="BAHASA">BAHASA</option>
					</select>
					<br>
					 : <textarea style="width: 20% ; height: 50px;" name="inAlasan" required=""></textarea>
				</td>
			</tr>
			<tr >
				<td colspan="2" align="center" height="50px">
					<input type="checkbox" name="s&k" required="">Saya Setuju Segala Peraturan dan Ketentuan yang telah dibuat
					<br>
					<br>
					<input type="submit" name="daftar" value="Daftar" style="height: 25px">
					<input type="submit" name="batal" value="Batal" style="height: 25px">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
