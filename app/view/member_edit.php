<?php
$id = $_GET['id'];
$result = $db->query("select * from member where member_id = ".$id);
$member = $result->fetch_object();
?>
<fieldset>
	<legend>Ubah Data Member</legend>
	<p>Silahkan isi form dibawah ini untuk mengubah profil Anda.</p>
	<form role="form" method="post" class="form-horizontal" action="?page=act_member_edit">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<label for="email" class="col-sm-3 control-label">Email</label>
			<div class="col-sm-9">
				<input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" value="<?php echo $member->MEMBER_EMAIL; ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="col-sm-3 control-label">Password</label>
			<div class="col-sm-9">
				<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?php echo $member->MEMBER_NAME; ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
			<div class="col-sm-9">
				<div class="radio">
					<label><input type="radio" name="jk" id="jk1" value="L" <?php if ($member->MEMBER_GENDER == 'L') {echo "checked";} ?>>Laki-laki</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="jk" id="jk2" value="P" <?php if ($member->MEMBER_GENDER == 'P') {echo "checked";} ?>>Perempuan</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="alamat" class="col-sm-3 control-label">Alamat</label>
			<div class="col-sm-9">
				<textarea class="form-control" rows="3" id="alamat" name="alamat"><?php echo $member->MEMBER_ADDRESS; ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="telp" class="col-sm-3 control-label">No. Telepon</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="telp" name="telp" placeholder="No. Telepon" value="<?php echo $member->MEMBER_PHONE; ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-9">
				<button type="submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-disk"></span> Simpan
				</button>
			</div>
		</div>
	</form>
</fieldset>