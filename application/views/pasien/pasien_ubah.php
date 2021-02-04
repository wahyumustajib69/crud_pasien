<!DOCTYPE html>
<html>
<head>
	<title>UPDATE PASIEN</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
<nav class="navbar bg-primary">
	<span class="navbar-brand text-white">SIRUSAK</span>
</nav>
<div class="container mt-3">
	<h3 class="alert alert-primary text-center">UPDATE PASIEN</h3>
	<br>
	<div id="pesan" class="alert alert-sm alert-danger"  style="display: none;"><?php echo validation_errors(); ?></div>

	<form method="post" action="<?php echo base_url("pasien/ubah/".$pasien->id) ?>">
	<table class="col-md-6 offset-md-3">
		<tr>
			<td>ID PASIEN</td>
			<td><input type="text" name="input_id" class="form-control" value="<?php echo set_value('input_id', $pasien->id) ?>" placeholder="cth: P1111" maxlength="5" readonly></td>
		</tr>
		<tr>
			<td>NO. REKAM MEDIS</td>
			<td><input type="text" name="input_rm" class="form-control" value="<?php echo set_value('input_rm', $pasien->no_rekam_medis) ?>" placeholder="No. Rekam Medis"></td>
		</tr>
		<tr>
			<td>NAMA PASIEN</td>
			<td><input type="text" name="input_nama" class="form-control" value="<?php echo set_value('input_nama', $pasien->nama_pasien) ?>" placeholder=""></td>
		</tr>
		<tr>
			<td>ALAMAT</td>
			<td><textarea name="input_alm" class="form-control" placeholder="Alamat Lengkap" cols="25" rows="5"><?php echo set_value('input_alm', $pasien->alamat) ?></textarea></td>
		</tr>
		<tr>
			<td>UMUR</td>
			<td><input type="text" name="input_umur" class="form-control" value="<?php echo set_value('input_umur', $pasien->umur) ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" class="btn btn-success" name="submit" value="SIMPAN"></td>
			<td><a href="<?php echo base_url('pasien'); ?>"><input type="button" class="btn btn-danger" value="BATAL"></a></td>
		</tr>
	</table>
	</form>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		    setTimeout(function(){
		      $("#pesan").fadeIn('slow');
		      }, 100);
		    });
		    setTimeout(function(){
		      $("#pesan").fadeOut('slow');
		    }, 2000);
</script>
</body>
</html>