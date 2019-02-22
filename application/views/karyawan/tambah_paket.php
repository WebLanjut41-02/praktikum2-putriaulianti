<html>
	<head>
		<title>LATIHAN</title>
	</head>
	<body>
		<h1>INPUT DATA PAKET</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("karyawan/tambah_paket"); ?>
			<table cellpadding="8">
				<tr>
					<td>Sasaran</td>
					<td><input type="text" name="input_sasaran" value="<?php echo set_value('input_sasaran'); ?>"></td>
				</tr>
				<tr>
					<td>Isi Paket</td>
					<td><input type="text" name="input_paket" value="<?php echo set_value('input_paket'); ?>"></td>
				</tr>
			</table>
				
			<hr>
			<input type="submit" name="submit" value="Simpan">
			<a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>