<!DOCTYPE html>
<html>
<head>
	<title>Data Pasien</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
<nav class="navbar bg-primary">
	<span class="navbar-brand text-white">SIRUSAK</span>
</nav>
<div class="container">
	<div class="mt-4">
		<h3 class="alert alert-primary text-center">DATA PASIEN</h3>

		<a class="btn btn-primary" href="<?php echo base_url('pasien/tambah'); ?>">TAMBAH</a>

		<table class="table table-bordered table-sm table-striped mt-3">
			<thead>
				<th>NO</th>
				<th>ID PASIEN</th>
				<th>NO. REKAM MEDIS</th>
				<th>NAMA</th>
				<th>ALAMAT</th>
				<th>UMUR</th>
				<th>AKSI</th>
			</thead>
			<tbody>
				<?php 
				$no=1;
				foreach($pasien as $data){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $data->id; ?></td>
					<td><?php echo $data->no_rekam_medis; ?></td>
					<td><?php echo $data->nama_pasien; ?></td>
					<td><?php echo $data->alamat; ?></td>
					<td><?php echo $data->umur; ?></td>
					<td>
						<a class="btn btn-success btn-sm" href="<?php echo base_url('pasien/ubah/'.$data->id); ?>">EDIT</a>
						<a class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')" href="<?php echo base_url('pasien/hapus/'.$data->id); ?>">DEL</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>
