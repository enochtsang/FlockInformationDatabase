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
            <h1> Gov Information Lookup </h1>
        </div>        
        <div class="content">
<!--            // Enterprise look-up-->
            <h2> Search Enterprise: </h2>
            <form action="gov-result.php" method="post">
                Producer/Enterprise Code: <input type="text" name="enterprise-code"><br>
                <input type="submit" value="search">
            </form>
            
            <!--            // Enterprise look-up within a date range -->
            <h2> Search for Enterprise within a date range: </h2>
            <form action="iapt-result.php" method="post">
                Producer/Enterprise Code: <input type="text" name="enterprise-code2"><br> 
                Start Date: <input type="date" name="enterprise-start-date"><br> 
                End Date: <input type="date" name="enterprise-end-date"><br> 
                <input type="submit" value="search">
            </form>
        </div>
    </div>
</body>
</html>
