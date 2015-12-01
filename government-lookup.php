<!DOCTYPE html>
<html lang="en-CA">
<head>
    <?php include 'header.php';
    if($_SESSION['user_type'] != "gov"){
    header("Location: index.php");
    exit;
    }
    ?>
    <title>Flock Information Database - IAPT Lookup</title>
    <meta name="description" content="View the flock information statistics owned by the Institute of Applied Poultry Technology (IAPT).">
</head>
<body>
    <div class="wrapper">
        <div id="logo-bar">
            <?php include 'logo-include.php'; ?>
            <h1> IAPT Information </h1>
        </div>        
        <div class="content">
            <h2> Producer/Enterprise Name: </h2>
        </div>
    </div>
</body>
</html>
