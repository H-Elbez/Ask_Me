<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
include "../php/db_connex.php";

$name = test_input($_POST["name"]);
$Q = test_input($_POST["question"]);
if($name != ""){
if($Q != ""){	
$sql = "SELECT count(`id`) as num FROM `Q&A`.`Question` WHERE q='$Q' AND name='$name'"; 
$query = mysqli_query($db , $sql);
$res = mysqli_fetch_assoc($query);
if($res["num"]== 0){
$sql = "INSERT INTO `Q&A`.`Question` (`q`, `name`) VALUES ('$Q','$name')"; 
$query = mysqli_query($db , $sql);
header("Location: /Q&A/thanks.php");
die();}else{
header("Location: /Q&A");
die();	
 }
}
header("Location: /Q&A");
die();
}else{
header("Location: /Q&A");
die();
 }
  mysqli_close($db);
?>
