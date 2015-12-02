<!DOCTYPE html>
<html lang="en-CA">
<head>
    <?php include 'header.php';?>
    <title>Flock Information Database - IAPT Result</title>
    <meta name="description" content="View the flock information statistics owned by the Institute of Applied Poultry Technology (IAPT).">
</head>


    <body>
        <div class="wrapper">
            <div id="logo-bar">
                <?php include 'logo-include.php'; ?>
                <h1> IAPT Information Result </h1>
            </div>        
            <div class="content">
    <!--            // Enterprise look-up-->
                <h2> Search Results: </h2>
<!--                // Enterprise result -->
                    <?php 
                        require_once 'connect.php'; 
                        $Ecode = $_POST['enterprise-name'];
                        if(!empty($Ecode)){
                            $resultSQL = "SELECT * FROM (Enterprise as E) WHERE E.Ecode='$Ecode'";
                            $query = mysqli_query($flockCon, $resultSQL);
                            echo "<table border = '1'";
                            while($row = mysqli_fetch_array($query)){
                                echo "<tr>";
                                echo "<td>" . $row[0] . "</td>";
                                echo "<td>" . $row[1] . "</td>";
                                echo "<td>" . $row[2] . "</td>";
                                echo "<td>" . $row[3] . "</td>";
                            }
                                echo "</table>";
                                
                            }
                    ?>
                
<!--                // Medication result -->
                    <?php
                        $Mname = $_POST['medication-name'];
                        if(!empty($Mname)){
                            $resultSQL = "SELECT * FROM (Medications as M) WHERE M.Mname='$Mname'";
                            $query = mysqli_query($flockCon, $resultSQL);
                            
                            echo "<table border = '1'";
                            while($row = mysqli_fetch_array($query)){
                               echo "<tr><td>" . $row[0] . "</td></tr>";
                               echo "<tr><td>" . $row[1] . "</td></tr>";
                               echo "<tr><td>" . $row[2] . "</td></tr>";
                               echo "<tr><td>" . $row[3] . "</td></tr>";
                            }
                               echo "</table>";
                            }
                    ?>

            </div>
    </div>
    </body>
</html>