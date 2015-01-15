<fieldset>
	<legend>Publisher</legend>
	<table id="example" class="table table-striped table-hover table-bordered">
		<thead>
			<tr>
				<th width="25px">No.</th>
				<th>Publisher</th>
				<th width="50px">Jumlah</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			$result = $db->query('select * from publisher');
			while ($publisher = $result->fetch_object()) {
				echo "<tr>";
				echo "<td align='right'>".$no."</td>";
				echo "<td>".$publisher->PUBLISHER_NAME."</td>";
				echo "<td align='center'>";
				echo "<a href='".APP_ROOT."?page=filter_game&by=publisher&publisher=".$publisher->PUBLISHER_ID."' class='btn btn-xs btn-success'><span class='glyphicon glyphicon-list'></span> Lihat Games</a>";
				echo "</td>";
				echo "</tr>";
				$no++;
			}
			?>
		</tbody>
	</table>
</fieldset>