<?php
session_start();
unset($_SESSION["userType"]);  
header("Location: index.php");
?>

