<?php 
$email = $_POST['email'];
$pass = $_POST['password'];

$result = $db->query("select * from member where member_email = '".$email."' and member_password = '".$pass."'");
if ($result->num_rows > 0) {
	while ($member = $result->fetch_object()) {
		$_SESSION['member_id'] = $member->MEMBER_ID;
		$_SESSION['member_name'] = $member->MEMBER_NAME;
		$_SESSION['privilege_id'] = $member->PRIVILEGE_ID;
	}
}

header('location: '.APP_ROOT);