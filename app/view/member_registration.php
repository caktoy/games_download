<fieldset>
	<legend>Pendaftaran Member</legend>
	<p>Silahkan isi form dibawah ini untuk mendaftar member baru.</p>
	<form role="form" method="post" class="form-horizontal" action="?page=act_daftar">
		<div class="form-group">
			<label for="email" class="col-sm-3 control-label">Email</label>
			<div class="col-sm-9">
				<input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="col-sm-3 control-label">Password</label>
			<div class="col-sm-9">
				<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
			</div>
		</div>
		<?php if (isset($_SESSION['privilege_id']) && $_SESSION['privilege_id'] == 1): ?>
		<div class="form-group">
			<label for="priv" class="col-sm-3 control-label">Hak Akses</label>
			<div class="col-sm-9">
				<select id="priv" name="priv" class="form-control">
					<?php 
					$result = $db->query('select * from privilege order by PRIVILEGE_ID desc');
					while ($priv = $result->fetch_object()) {
						echo "<option value=".$priv->PRIVILEGE_ID.">".$priv->PRIVILEGE_NAME."</option>";
					}
					?>
				</select>
			</div>
		</div>
		<?php endif ?>
		<hr>
		<div class="form-group">
			<label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
			</div>
		</div>
		<div class="form-group">
			<label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
			<div class="col-sm-9">
				<div class="radio">
					<label><input type="radio" name="jk" id="jk1" value="L">Laki-laki</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="jk" id="jk2" value="P">Perempuan</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="alamat" class="col-sm-3 control-label">Alamat</label>
			<div class="col-sm-9">
				<textarea class="form-control" rows="3" id="alamat" name="alamat"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="telp" class="col-sm-3 control-label">No. Telepon</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="telp" name="telp" placeholder="No. Telepon">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-9">
				<button type="submit" class="btn btn-primary">Daftar</button>
			</div>
		</div>
	</form>
</fieldset>