<?php
require_once ('db/dbhelper.php');
if (isset($_POST['id'])) {
	$id = $_POST['id'];	
	$sql = 'delete from member where id = '.$id;
	execute($sql);
	echo 'Xoá thành công';
}