<?php
switch ($_GET['by']) {
	case 'genre':
		$id = $_GET['genre'];
		$result = $db->query('select * from game a, genre b, publisher c, member d where a.genre_id = b.genre_id and a.publisher_id = c.publisher_id and a.member_id = d.member_id and a.genre_id = '.$id);
		break;
	case 'publisher':
		$id = $_GET['publisher'];
		$result = $db->query('select * from game a, genre b, publisher c, member d where a.genre_id = b.genre_id and a.publisher_id = c.publisher_id and a.member_id = d.member_id and a.publisher_id = '.$id);
		break;
	default:
		break;
}
?>
<fieldset>
	<legend>Games</legend>
	<table id="example" class="table table-striped table-hover table-bordered">
		<thead>
			<tr>
				<th>Game</th>
				<th>Genre</th>
				<th>Publisher</th>
				<th width="50px">Download</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			while ($game = $result->fetch_object()) {
				echo "<tr>";
				echo "<td><a href='".APP_ROOT."?page=detil_game&game=".$game->GAMES_ID."'>".$game->GAMES_NAME."</a></td>";
				echo "<td><a href='".APP_ROOT."?page=filter_game&by=genre&genre=".$game->GENRE_ID."'>".$game->GENRE_NAME."</a></td>";
				echo "<td><a href='".APP_ROOT."?page=filter_game&by=publisher&publisher=".$game->PUBLISHER_ID."'>".$game->PUBLISHER_NAME."</a></td>";
				echo "<td align='center'><a href='".$game->GAMES_LINK."' class='btn btn-success btn-xs'><span class='glyphicon glyphicon-download-alt'></span> Download</a></td>";
				echo "</tr>";
				$no++;
			}
			?>
		</tbody>
	</table>
</fieldset>