<?php


require('config.php');


if(isset($_POST)){
	$sql = "UPDATE users SET ".$_POST['name']."='".$_POST['email']."' WHERE id=".$_POST['pk'];
	$mysqli->query($sql);
	echo 'Updated successfully.';
}


?>