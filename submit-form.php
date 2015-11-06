<!DOCTYPE html>
<html lang="en-CA">
<head>
    <?php include 'header.php';?>
    <title>Flock Information Database - Submit Form</title>
    <meta name="description" content="Fill out a form for your flock here, IAPT will store your form into the database and it will contribute to the statistics page.">
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
            <h1> Submit Form </h1>
            <br>
            <p id="About_Us">
                Here is a form for you to write and submit!
            </p>
        </div>
        <div class="form_div">
            <form action="statistics.php" method="post">
                Barn Number: <input type="text" name="barn_no">
                <br><br>
                Vaccine Administered: <input type="text" name="vaccine_administered">
                <br><br>
                <button type="submit" value="Submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
