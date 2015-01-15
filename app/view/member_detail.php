<?php
$id = $_GET['id'];
$result = $db->query("select * from member where member_id = ".$id);
$member = $result->fetch_object();
?>
<fieldset>
	<legend>Detil Member</legend>
	<form role="form" class="form-horizontal">
		<div class="form-group">
			<label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" readonly value="<?php echo $member->MEMBER_NAME; ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="jk" name="jk" placeholder="Jenis Kelamin" readonly value="<?php echo $member->MEMBER_GENDER == 'L' ? 'Laki-laki' : 'Perempuan'; ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="alamat" class="col-sm-3 control-label">Alamat</label>
			<div class="col-sm-9">
				<textarea class="form-control" rows="3" id="alamat" name="alamat" readonly><?php echo $member->MEMBER_ADDRESS; ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="telp" class="col-sm-3 control-label">No. Telepon</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="telp" name="telp" placeholder="No. Telepon" readonly value="<?php echo $member->MEMBER_PHONE; ?>">
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label for="email" class="col-sm-3 control-label">Email</label>
			<div class="col-sm-9">
				<input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" readonly value="<?php echo $member->MEMBER_EMAIL; ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="priv" class="col-sm-3 control-label">Hak Akses</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="priv" name="priv" placeholder="Hak Akses" readonly value="<?php echo $member->PRIVILEGE_ID == 1 ? 'Administrator' : 'Basic Member'; ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-9">
				<button type="button" class="btn btn-primary btn-sm" onclick="history.go(-1)">
					<span class="glyphicon glyphicon-chevron-left"></span> Kembali
				</button>
			</div>
		</div>
	</form>
</fieldset>