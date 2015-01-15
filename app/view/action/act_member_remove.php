<?php
$id = $_GET['id'];
$stmt = $db->prepare("delete from member where member_id = ?");
$stmt->bind_param('i', $id);
$stmt->execute();

header('location:'.APP_ROOT.'?page=member');