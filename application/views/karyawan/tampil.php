<html>
	<head>
		<title>LATIHAN</title>
	</head>
	<body>
		<h1>DATA PAKET</h1>
		<hr>

		<a href='<?php echo base_url("siswa/tambah"); ?>'>Tambah Data</a><br><br>

		<table border="1" cellpadding="7">
			<tr>
				<th>ID Paket</th>
				<th>Tanggal Datang</th>
				<th>Sasaran</th>
				<th>Penerima</th>
				<th>Isi Paket</th>
				<th>Tanggal Ambil</th>
				<th>Status</th>
				<th colspan="2">Aksi</th>
			</tr>

			<?php
			if( ! empty($paket)){
				foreach($paket as $data){
					echo "<tr>
					<td>".$data->Id_Paket."</td>
					<td>".$data->Tgl_Datang."</td>
					<td>".$data->Sasaran."</td>
					<td>".$data->Penerima."</td>
					<td>".$data->Isi_Paket."</td>
					<td>".$data->Tgl_Terima."</td>
					<td><a href='".base_url("c_karyawan/ubah/".$data->Id_Paket)."'>Ubah</a></td>
					<td><a href='".base_url("c_karyawan/hapus/".$data->Id_Paket)."'>Hapus</a></td>
					</tr>";
				}
			}else{
				echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
			}
			?>
		</table>
	</body>
</html>
