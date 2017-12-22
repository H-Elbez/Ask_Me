<?php
include "../php/db_connex.php";

$id = $_GET["id"];
$sql = "DELETE FROM `Answered` WHERE id='$id'"; 
$query = mysqli_query($db , $sql);
header("Location: /Q&A/stats.php");
die();
?>
