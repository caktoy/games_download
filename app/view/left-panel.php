<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Pencarian</h3>
	</div>
	<div class="panel-body">
		<form class="form" role="search" method="post" action="?page=cari_game">
			<input type="text" class="form-control" name="cari" placeholder="Cari">
		</form>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Genre</h3>
	</div>
	<div class="panel-body">
		<?php
		$sql = "select * from genre";
		if (!$result = $db->query($sql)) {
			die('query error ['.$db->error.']');
		} 
		if (count($result) > 0) {
			while ($genre = $result->fetch_object()) {
				echo "<a href='".APP_ROOT."?page=filter_game&by=genre&genre=".$genre->GENRE_ID."'>".$genre->GENRE_NAME."</a><br>";
			}
		} else {
			echo "Tidak ada data yang tersedia.";
		}
		?>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Publisher</h3>
	</div>
	<div class="panel-body">
		<?php
		$sql = "select * from publisher";
		if (!$result = $db->query($sql)) {
			die('query error ['.$db->error.']');
		} 
		if (count($result) > 0) {
			while ($publisher = $result->fetch_object()) {
				echo "<a href='".APP_ROOT."?page=filter_game&by=publisher&publisher=".$publisher->PUBLISHER_ID."'>".$publisher->PUBLISHER_NAME."</a><br>";
			}
		} else {
			echo "Tidak ada data yang tersedia.";
		}
		?>
	</div>
</div>