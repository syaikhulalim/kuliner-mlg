  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <div class="container">
  	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<?php echo form_open('pegawai/create'); ?>	
	<legend>Tambah Data Pegawai</legend>
	<?php echo validation_errors(); ?>
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" class="form-control" name="nama" value="" placeholder="Input field">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close(); ?>
</div>
</div>

