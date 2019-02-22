<html>
	<head>
		<title>LATIHAN</title>
	</head>
	<body>
		<h1>INPUT DATA PENGHUNI</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("c_karyawan/tambah"); ?>
			<table cellpadding="8">
				<tr>
					<td>No. KTP</td>
					<td><input type="text" name="input_ktp" value="<?php echo set_value('input_ktp'); ?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
				</tr>
				<tr>
					<td>Unit</td>
					<td><input type="text" name="input_unit" value="<?php echo set_value('input_unit'); ?>"></td>
				</tr>
			</table>
				
			<hr>
			<input type="submit" name="submit" value="Simpan">
			<a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>