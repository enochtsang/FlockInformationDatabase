<?php
    session_start();
  if(!isset($_SESSION['userType']) || ($_SESSION['userType'] !== "gov")) { 
    header('Location: logout.php');
  }  
?>
<!DOCTYPE html>
<html lang="en-CA">
<head>
    <?php include 'header.php';?>
    <title>Flock Information Database - Government Lookup</title>
    <meta name="description" content="View the flock information statistics owned by the Institute of Applied Poultry Technology (IAPT).">
</head>
<body>
    <div class="wrapper">
        <div id="logo-bar">
            <?php include 'logo-include.php'; ?>
            <h1> Government Information Lookup </h1>
        </div>        
        <div class="content">
            <h2> Producer/Enterprise Name: </h2>
        </div>
    </div>
</body>
</html>
