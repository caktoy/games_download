<?php 
$genre = $_POST['genre'];

$stmt = $db->prepare('insert into genre(genre_name) values(?)');
$stmt->bind_param('s', $genre);
$stmt->execute();

header('location:'.APP_ROOT.'?page=genre');