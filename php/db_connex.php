<?php
// informations about your database here
$db = mysqli_connect("localhost","DB_USER","DB_PASS","Q&A");
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();}
?>

