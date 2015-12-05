<?php
    session_start();
  if(!isset($_SESSION['userType']) || ($_SESSION['userType'] !== "iapt")) {    
    header('Location: logout.php');
  } 
?>
<!DOCTYPE html>
<html lang="en-CA">
<head>
    <?php include 'header.php';?>
    <title>Flock Information Database - IAPT Lookup</title>
    <meta name="description" content="View the flock information statistics owned by the Institute of Applied Poultry Technology (IAPT).">
</head>
<body>
    <div class="wrapper">
        <div id="logo-bar">
            <?php include 'logo-include.php'; ?>
            <h1> IAPT Information Lookup </h1>
        </div>        
        <div class="content">
<!--            // Enterprise look-up-->
            <h2> Search for Producer/Enterprise: </h2>
            <form action="iapt-result.php" method="post">
                Producer/Enterprise Code: <input type="text" name="enterprise-code"><br> 
                <input type="submit" value="search">
            </form>
<!--            // Enterprise look-up within a date range -->
            <h2> Search for Producer/Enterprise: </h2>
            <form action="iapt-result.php" method="post">
                Producer/Enterprise Code: <input type="text" name="enterprise-code2"><br> 
                Start Date: <input type="date" name="enterprise-start-date"><br> 
                End Date: <input type="date" name="enterprise-end-date"><br> 
                <input type="submit" value="search">
            </form>
<!--           // Medication look-up-->
            <h2> Search for Medication: </h2>
            <form action="iapt-result.php" method="post">
                Medication Name: <input type="text" name="medication-name"><br>
                Start Date: <input type="date" name="med-start-date"><br> 
                End Date: <input type="date" name="med-end-date"><br> 
                <input type="submit" value="search">
            </form>
            
<!--           // Disease look-up-->
            <h2> Search for Disease: </h2>
            <form action="iapt-result.php" method="post">
                Disease Name: <input type="text" name="disease-name"><br>
                Start Date: <input type="date" name="disease-start-date"><br> 
                End Date: <input type="date" name="disease-end-date"><br> 
                <input type="submit" value="search">
            </form>
            
        </div>
    </div>
</body>
</html>

