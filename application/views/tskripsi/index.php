<html>
	<head>
		<title>Quiz P4 | Home</title>
		<link rel="stylesheet" type="text/css" href="theme/css/style.css">
	</head>
	<body>
		<h1>Data Skripsi</h1>
		<hr>
		<a href='<?php echo base_url("tskripsi/tambah"); ?>'>
		<input class="tombol" type="submit" name="tambahdata" value="Tambah Data">
		</a><br><br>

		<table class="table1" border="1" cellpadding="7">
			<tr>
				<th>NIM</th>
				<th>NAMA</th>
				<th>JUDUL</th>
				<th>PEMBIMBING</th>
				<th colspan="2">Aksi</th>
			</tr>

			<?php
			if( ! empty($tskripsi)){ // Jika data skrips tidak sama dengan kosong, artinya jika data skripsi ada
				foreach($tskripsi as $data){
					echo "<tr>
					<td>".$data->nim."</td>
					<td>".$data->nama."</td>
					<td>".$data->judul."</td>
					<td>".$data->pemb."</td>
					<td>
					<a href='".base_url("tskripsi/ubah/".$data->nim)."'>Ubah</a></td>
					<td>
					<a href='".base_url("tskripsi/hapus/".$data->nim)."'>Hapus</a></td>
					</tr>";
				}
			}else{ // Jika data skripsi kosong
				echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
			}
			?>
		</table>
	</body>
</html>
