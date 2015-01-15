<!DOCTYPE html>
<html>
<head>
	<title><?php echo APP_TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo 'assets/css/bootstrap.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo 'assets/css/dataTables.bootstrap.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo 'assets/css/flick/jquery-ui-1.9.2.custom.css'; ?>">
	<style type="text/css">
		body{
			padding-top: 75px;
		}
		.navbar{
			border-bottom: 2px solid #007fd0;
		}
	</style>
</head>
<body>
	<?php 
	session_start();
	include 'navbar.php';
	echo "<div class='container'>";
	echo "<div class='row'>";
	echo "<div class='col-sm-3'>";
	include 'left-panel.php';
	echo "</div>";
	echo "<div class='col-sm-6'>";
	include 'routes.php';
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = '';
	}
	include switch_page($page);
	echo "</div>";
	echo "<div class='col-sm-3'>";
	include 'right-panel.php';
	echo "</div>";
	echo "</div>";
	echo "</div>";
	include 'footbar.php';
	?>
	<script type="text/javascript" src="<?php echo "assets/js/jquery-1.11.1.min.js"; ?>"></script>
	<script type="text/javascript" src="<?php echo "assets/js/bootstrap.js"; ?>"></script>
	<script type="text/javascript" src="<?php echo "assets/js/jquery-ui-1.9.2.custom.js"; ?>"></script>
	<script type="text/javascript" src="<?php echo "assets/js/jquery.dataTables.js"; ?>"></script>
	<script type="text/javascript" src="<?php echo "assets/js/myscript.js"; ?>"></script>
	<script type="text/javascript" src="<?php echo "assets/js/mine.js"; ?>"></script>
	<script type="text/javascript" src="<?php echo "assets/js/dataTables.bootstrap.js"; ?>"></script>
	<script type="text/javascript" src="<?php echo "assets/ckeditor/ckeditor.js"; ?>"></script>
</body>
</html>