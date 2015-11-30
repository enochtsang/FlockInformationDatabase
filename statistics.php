<!DOCTYPE html>
<html lang="en-CA">
<head>
    <?php include 'header.php';?>
    <title>Flock Information Database - Statistics</title>
    <meta name="description" content="View the flock information statistics owned by the Institute of Applied Poultry Technology (IAPT).">
</head>
<body>
    <div class="wrapper">
        <div class="title">
            <h1>Flock Information Database</h1>
        </div>
    <?php include 'navigation-bar.php'; ?>
    </div>
    <div class="content">
        <div class="summary">
            <h1> Statistics </h1>
            <br>
            <p id="About_Us">
                Here is lots of statistics!
            </p>
        </div>
        <div class="form_results">
            <p>
                Barn Number is: <?php echo $_POST["barn_no"]; ?>
                <br><br>
                Vaccine Administered is: <?php echo $_POST["vaccine_administered"]; ?>
            </p>
        </div>
    </div>
</body>
</html>
