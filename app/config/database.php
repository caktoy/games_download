<?php
define('db_host', 'localhost');
define('db_user', 'root');
define('db_pass', '');
define('db_name', 'games_download');

$db = new mysqli(db_host, db_user, db_pass, db_name);
if ($db->connect_errno > 0) {
	die('Gagal terhubung ke database ['.$db->connect_error.']');
}