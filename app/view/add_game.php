<fieldset>
	<legend>Tambah Game</legend>
	<form role="form" method="post" class="form-horizontal" action="?page=act_tambah_game">
		<div class="form-group">
			<label for="judul" class="col-sm-2 control-label">Judul</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Game" autofocus>
			</div>
		</div>
		<div class="form-group">
			<label for="genre" class="col-sm-2 control-label">Genre</label>
			<div class="col-sm-10">
				<select class="form-control" id="genre" name="genre">
					<?php
					$result = $db->query('select * from genre order by GENRE_NAME asc');
					while ($genre = $result->fetch_object()) {
						echo "<option value='".$genre->GENRE_ID."'>".$genre->GENRE_NAME."</option>";
					}
					?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="publisher" class="col-sm-2 control-label">Publisher</label>
			<div class="col-sm-10">
				<select class="form-control" id="publisher" name="publisher">
					<?php
					$result = $db->query('select * from publisher order by PUBLISHER_NAME asc');
					while ($publisher = $result->fetch_object()) {
						echo "<option value='".$publisher->PUBLISHER_ID."'>".$publisher->PUBLISHER_NAME."</option>";
					}
					?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="desc" class="col-sm-2 control-label">Deskripsi</label>
			<div class="col-sm-10">
				<textarea class="ckeditor" name="desc" id="desc"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</div>
	</form>
</fieldset>