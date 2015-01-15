<?php 
$publisher = $_POST['publisher'];
$genre = $_POST['genre'];
$member = $_SESSION['member_id'];
$judul = $_POST['judul'];
$tgl = date('Y-m-d');
$desc = $_POST['desc'];
$link = '#';

$stmt = $db->prepare('insert into game(PUBLISHER_ID, GENRE_ID, MEMBER_ID, GAMES_NAME, GAMES_UPLOADED, GAMES_DESCRIPTION, GAMES_LINK) values(?, ?, ?, ?, ?, ?, ?)');
$stmt->bind_param('sssssss', $publisher, $genre, $member, $judul, $tgl, $desc, $link);
$stmt->execute();

header('location:'.APP_ROOT.'?page=download');