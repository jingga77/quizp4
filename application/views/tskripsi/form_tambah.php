<html>
	<head>
		<title>Quiz P4 | Tambah</title>
		<link rel="stylesheet" type="text/css" href="theme/css/style.css">
	</head>
	<body>
		<h1>Form Tambah Data Skripsi</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>
<fieldset>

		<?php echo form_open("tskripsi/tambah"); ?>
			<table cellpadding="8">
				<tr>
					<td>NIM</td>
					<td><input type="text" name="input_nim" value="<?php echo set_value('input_nim'); ?>"></td>
				</tr>
				<tr>
					<td>NAMA</td>
					<td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
				</tr>
				<tr>
					<td>JUDUL SKRIPSI</td>
					<td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
				</tr>
				<tr>
					<td>PEMBIMBING</td>
					<td><input type="text" name="input_pemb" value="<?php echo set_value('input_pemb'); ?>"</td>
				</tr>
			</table>
</fieldset>				
			<hr>
			<input class="tombol" type="submit" name="submit" value="Simpan">
			<a href="<?php echo base_url(); ?>"><input class="tombol" type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
