<?php
session_start();
if(isset($_SESSION['id'])){
  header("Location: dashboard.php");
  die();}
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Crime Scene Report System | Police Station</title>
        <link rel="stylesheet" href="css/style.css">
  </head>
