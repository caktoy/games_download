<?php 
$publisher = $_POST['publisher'];

$stmt = $db->prepare('insert into publisher(publisher_name) values(?)');
$stmt->bind_param('s', $publisher);
$stmt->execute();

header('location:'.APP_ROOT.'?page=publisher');