<?php
$stmt = $db->prepare('delete from game where games_id = ?');
$stmt->bind_param('i', $_GET['id']);
$stmt->execute();

header('location:'.APP_ROOT.'?page=download');	