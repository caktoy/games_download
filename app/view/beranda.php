<fieldset>
	<legend>Beranda</legend>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php echo APP_ROOT."assets/img/car1.jpg"; ?>" alt="<?php echo APP_ROOT."assets/img/car1.jpg"; ?>" width="100%">
				<div class="carousel-caption">
					Pro Evolution Soccer 2013
				</div>
			</div>
			<div class="item">
				<img src="<?php echo APP_ROOT."assets/img/car2.jpg"; ?>" alt="<?php echo APP_ROOT."assets/img/car2.jpg"; ?>" width="100%">
				<div class="carousel-caption">
					Grand Theft Auto V
				</div>
			</div>
			<div class="item">
				<img src="<?php echo APP_ROOT."assets/img/car3.jpg"; ?>" alt="<?php echo APP_ROOT."assets/img/car3.jpg"; ?>" width="100%">
				<div class="carousel-caption">
					Need For Speed Underground
				</div>
			</div>
		</div>
	</div>
	<br>
	<legend>Game Terbaru</legend>
	<div class="media">
		<?php
		$result = $db->query('select * from game a, genre b, publisher c, member d where a.genre_id = b.genre_id and a.publisher_id = c.publisher_id and a.member_id = d.member_id order by a.games_uploaded desc limit 5');
		while ($game = $result->fetch_object()) {
		?>
		<div class="media-body">
			<h4 class="media-heading"><a href="<?php echo APP_ROOT.'?page=detil_game&game='.$game->GAMES_ID; ?>"><?php echo $game->GAMES_NAME; ?></a></h4>
			<small><?php echo date('d M Y', strtotime($game->GAMES_UPLOADED)); ?> &bull; <?php echo "Diunggah oleh ".$game->MEMBER_NAME; ?></small><br>
			<small style="font-style: italic;"><?php echo $game->GENRE_NAME; ?> / <?php echo $game->PUBLISHER_NAME; ?></small>
			<?php echo substr($game->GAMES_DESCRIPTION, 0, 100); ?>
		</div>
		<?php } ?>
	</div>
</fieldset>