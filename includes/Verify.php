<?php 
session_start();
if(isset($_SESSION['id'])){
 }else{
 	 header("Location: L.php");
  die();
 }
  ?>
