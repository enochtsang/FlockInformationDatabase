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
            <h1> IAPT Information Lookup </h1>
        </div>        
        <div class="content">
<!--            // Enterprise look-up-->
            <h2> Search for Producer/Enterprise: </h2>
            <form action="iapt-result.php" method="post">
                Producer/Enterprise Code: <input type="text" name="enterprise-name"><br> 
                <input type="submit" value="search">
            </form>
<!--           // Medication look-up-->
            <h2> Search for Medication: </h2>
            <form action="iapt-result.php" method="post">
                Medication Name: <input type="text" name="medication-name"><br> 
                <input type="submit" value="search">
            </form>
        </div>
    </div>
</body>
</html>
