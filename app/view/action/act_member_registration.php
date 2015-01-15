<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$reg_date = date('Y-m-d');
$status = 'registered';
if (isset($_SESSION['privilege_id']) && $_SESSION['privilege_id'] == 1) {
	$priv = $_POST['priv'];
} else {
	$priv = '2';
}

$sql = 'insert into member(PRIVILEGE_ID, MEMBER_NAME, MEMBER_GENDER, MEMBER_ADDRESS, MEMBER_PHONE, MEMBER_EMAIL, MEMBER_REGIS_DATE, MEMBER_STATUS, MEMBER_PASSWORD) values(?, ?, ?, ?, ?, ?, ?, ?, ?)';

$stmt = $db->prepare($sql);
$stmt->bind_param('issssssss', $priv, $nama, $jk, $alamat, $telp, $email, $reg_date, $status, $pass);
$stmt->execute();

header('location: '.APP_ROOT);