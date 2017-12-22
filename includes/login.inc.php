<?php
session_start();
include "../php/db_connex.php";
$Name = $_POST['Name'];
$Pass = $_POST['Pass'];
$Pass = $Pass.'#';
$Name = $Name.'@';
$Pass = password_hash($Pass , PASSWORD_BCRYPT,array(
	'salt' => '/B61j1wEeJYpqhAWwKuLZ3N8AOauLZ3N8AO',
	'cost' => 12,
));
$Name = password_hash($Name , PASSWORD_BCRYPT,array(
	'salt' => '3N8AOauLZ3N8AYpqhAHhKuLZ3N8AOauLZ3N8AO',
	'cost' => 12,
));
$sql = "SELECT * FROM User WHERE name ='$Name' AND pass ='$Pass'";
$query = mysqli_query($db , $sql);
$row = mysqli_fetch_assoc($query);
if($row) {
	$_SESSION['id'] = $row['id'];
    header("Location: /Q&A/dashboard.php");
  die();
}else{
 die();
}
?>
