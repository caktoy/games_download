<fieldset>
	<legend>Genre</legend>
	<table id="example" class="table table-striped table-hover table-bordered">
		<thead>
			<tr>
				<th width="25px">No.</th>
				<th>Genre</th>
				<th width="50px">Jumlah</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			$result = $db->query('select * from genre');
			while ($genre = $result->fetch_object()) {
				echo "<tr>";
				echo "<td align='right'>".$no."</td>";
				echo "<td>".$genre->GENRE_NAME."</td>";
				echo "<td align='center'>";
				echo "<a href='".APP_ROOT."?page=filter_game&by=genre&genre=".$genre->GENRE_ID."' class='btn btn-xs btn-success'><span class='glyphicon glyphicon-list'></span> Lihat Games</a>";
				echo "</td>";
				echo "</tr>";
				$no++;
			}
			?>
		</tbody>
	</table>
</fieldset>