<div class="container">
	<div class="card">
		<div class="card-header">Edit Siswa</div>
		<div class="card-body">
		<?php 
		if(validation_errors() != false)
		{
			?>
			<div class="alert alert-danger" role="alert">
				<?php echo validation_errors(); ?>
			</div>
			<?php
		}
		?>
		<form method="post" action="<?php echo base_url(); ?>siswa/update">
			<input type="hidden" name="id_siswa" id="id_siswa" value="<?php echo $siswa->id_siswa; ?>"/>
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" value="<?php echo $siswa->nama; ?>" class="form-control" id="nama" name="nama">
			</div>

			<div class="form-group">
				<label for="jenis_kelamin">Jenis Kelamin</label>
				<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
					<option value="L" <?php echo ($siswa->jenis_kelamin ? 'L' : 'selected' ); ?> >Laki-laki</option>
					<option value="P" <?php echo ($siswa->jenis_kelamin ? 'P' : 'selected' ); ?>>Perempuan</option>
				</select>
			</div>

			<div class="form-group">
				<label for="tempat_lahir">Tempat Lahir</label>
				<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $siswa->tempat_lahir; ?>">
			</div>

			<div class="form-group">
				<label for="tgl_lahir">Tanggal Lahir</label>
				<input type="text" class="form-control datepicker"  readonly id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $siswa->tanggal_lahir; ?>">
			</div>

			<div class="form-group">
				<label for="no_telp">No Telp</label>
				<input type="number" class="form-control" value="<?php echo $siswa->no_telp; ?>" id="no_telp" name="no_telp">
			</div>

			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" name="alamat" id="alamat"><?php echo $siswa->alamat; ?></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Update</button>
		</form>
		</div>
	</div>
</div>