<?php 
$id = $_POST['id'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$stmt = $db->prepare('update member set member_email = ?, member_password = ?, member_name = ?, member_gender = ?, member_address = ?, member_phone = ? where member_id = ?');
$stmt->bind_param('ssssssi', $email, $pass, $nama, $jk, $alamat, $telp, $id);
$stmt->execute();

header('location:'.APP_ROOT.'?page=logout');