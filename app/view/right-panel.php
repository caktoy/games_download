<?php if (!isset($_SESSION['member_name'])) { ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Login</h3>
	</div>
	<div class="panel-body">
		<form role="form" method="post" action="?page=act_login">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-primary btn-sm">Masuk</button> atau 
			<a href="?page=member_registration">Daftar Member</a>?
		</form>
	</div>
</div>
<?php } else { ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Member Area</h3>
	</div>
	<div class="panel-body">
		<?php echo 'Selamat datang, <a href="?page=edit_member&id='.$_SESSION['member_id'].'"><strong>'.$_SESSION['member_name'].'</a></strong>!<br>'; ?>
		<a href="?page=logout">Keluar</a>
	</div>
</div>
<?php if ($_SESSION['privilege_id'] == 1): ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Administrator Menu</h3>
	</div>
	<div class="panel-body">
		<a href="?page=tambah_genre">Tambah Genre</a><br>
		<a href="?page=tambah_publisher">Tambah Publisher</a><br>
		<a href="?page=tambah_game">Tambah Game</a><br>
	</div>
</div>
<?php endif ?>
<?php } ?>