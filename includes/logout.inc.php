<?php
session_start();
session_destroy();
header("Location: /Q&A");
 die();
?>