<html>
	<head>
		<title>Quiz P4 | Ubah</title>
		<style type="text/css" href="theme/css/style.css"></style>
		<link rel="stylesheet" type="text/css" href="theme/css/style.css">
	</head>
	<body>
		<h1>Form Ubah Data Skripsi</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>
<FIELDSET>
		<?php echo form_open("tskripsi/ubah/".$tskripsi->nim); ?>
			<table cellpadding="8">
				<tr>
					<td>NIS</td>
					<td><input type="text" name="input_nim" value="<?php echo set_value('input_nim', $tskripsi->nim); ?>" readonly></td>
				</tr>
				<tr>
					<td>NAMA</td>
					<td><input type="text" name="input_nama" value="<?php echo set_value('input_nama', $tskripsi->nama); ?>"></td>
				</tr>
				<tr>
					<td>JUDUL</td>
					<td><input type="text" name="input_judul" value="<?php echo set_value('input_judul', $tskripsi->judul); ?>"></td>
				</tr>
				<tr>
					<td>PEMBIMBING</td>
					<td><input type="te" name="input_pemb" value="<?php echo set_value('input_pemb', $tskripsi->pemb); ?>"</td>
				</tr>
			</table>
</FIELDSET>				
			<hr>
			<input class="tombol" type="submit" name="submit" value="Ubah">
			<a href="<?php echo base_url(); ?>"><input class="tombol" type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
