<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Data siswa</h1>
		<hr>

		<a href='<?php echo base_url("karyawan/tambah"); ?>'>Tambah Data</a><br><br>

		<table border="1" cellpadding="7">
			<tr>
				<th>No. KTP</th>
				<th>Nama</th>
				<th>Unit</th>
				<th colspan="2">Aksi</th>
			</tr>

			<?php
			if( ! empty($penghuni)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
				foreach($penghuni as $data){
					echo "<tr>
					<td>".$data->No_KTP."</td>
					<td>".$data->Nama."</td>
					<td>".$data->Unit."</td>
					<td><a href='".base_url("c_karyawan/ubah/".$data->No_KTP)."'>Ubah</a></td>
					<td><a href='".base_url("c_karyawan/hapus/".$data->No_KTP)."'>Hapus</a></td>
					</tr>";
				}
			}else{ // Jika data siswa kosong
				echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
			}
			?>
		</table>
	</body>
</html>
