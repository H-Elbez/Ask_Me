<?php
include "../php/db_connex.php";

$id = $_GET["id"];
$sql = "INSERT INTO `Answered` SELECT id,name,q FROM `Question` WHERE id='$id'"; 
$query = mysqli_query($db , $sql);
$sql = "DELETE FROM `Question` WHERE id='$id'"; 
$query = mysqli_query($db , $sql);
header("Location: /Q&A/dashboard.php");
die();

?>
