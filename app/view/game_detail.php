<?php
$id = $_GET['game'];
$game = $db->query('select * from game a, genre b, publisher c, member d where a.genre_id = b.genre_id and a.publisher_id = c.publisher_id and a.member_id = d.member_id and games_id = '.$id)->fetch_object();
?>
<div class="row">
	<div class="col-sm-8">
		<strong><?php echo $game->GAMES_NAME; ?></strong><br>
		<small><?php echo date('d M Y', strtotime($game->GAMES_UPLOADED)); ?> &bull; <?php echo "Diunggah oleh ".$game->MEMBER_NAME; ?></small><br>
		<small style="font-style: italic;"><?php echo $game->GENRE_NAME; ?> / <?php echo $game->PUBLISHER_NAME; ?> &bull; 
		<?php
		if (isset($_SESSION['privilege_id']) && $_SESSION['privilege_id'] == 1) {
			echo "<a href='?page=hapus_game&id=".$game->GAMES_ID."' onclick='return confirm(\"Yakin dihapus?\")'>Hapus</a>";
		}
		?>
		</small>
	</div>
	<div class="col-sm-4">
		<?php echo "<a href='".$game->GAMES_LINK."' class='btn btn-success btn-lg'><span class='glyphicon glyphicon-download-alt'></span> Download</a>"; ?>
	</div>
</div>
<hr>
<?php echo $game->GAMES_DESCRIPTION; ?>