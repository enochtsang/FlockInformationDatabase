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
    <title>Flock Information Database - Gov Result</title>
    <meta name="description" content="View the flock information statistics owned by the Institute of Applied Poultry Technology (IAPT).">
</head>
    <body>
        <div class="wrapper">
            <div id="logo-bar">
                <?php include 'logo-include.php'; ?>
                <h1> Gov Information Result </h1>
            </div>        
            <div class="content">
    <!--            // Enterprise look-up-->
                <h2> Search Results: </h2>
    <!--            // Enterprise result -->
                    <?php
                        require_once 'connect.php';
                        $Ecode = $_POST['enterprise-code'];
                        
                        $Ecode2 = $_POST['enterprise-code2'];
                        $EntStartDate = $_POST['enterprise-start-date'];
                        $EntEndDate = $_POST['enterprise-end-date'];

                        if(!empty($Ecode)){
                            $resultSQL = "SELECT * FROM (enterprise as E) WHERE E.e_code_='$Ecode'";
                            $query = mysqli_query($flockCon, $resultSQL);
                            
                            echo "<table border = '3'";
                                echo "<tr>";
                                echo "<td>" . "Enterprise-Code" . "</td>";
                                echo "<td>" . "Enterprise-Name" . "</td>";
                                echo "<td>" . "Producer-Code" . "</td>";
                                echo "<td>" . "Submission-Date" . "</td>";
                                echo "</tr>";
                            while($row = mysqli_fetch_array($query)){
                                echo "<tr>";
                                echo "<td>" . $row[0] . "</td>";
                                echo "<td>" . $row[1] . "</td>";
                                echo "<td>" . $row[2] . "</td>";
                                echo "<td>" . $row[3] . "</td>";
                                echo "</tr>";
                            }
                                echo "</table>";
                            }

//<!--            // Enterprise result within a date range -->        
                         else if(!empty($Ecode2) && !empty($EntStartDate) && !empty($EntEndDate)){
                            $resultSQL = "SELECT * FROM (enterprise as E) WHERE E.e_code_='$Ecode2'
                            AND E.submission_date_ BETWEEN '$EntStartDate' AND '$EntEndDate'";
                            $query = mysqli_query($flockCon, $resultSQL);
                            
                                echo "<table border = '3'";
                                echo "<tr>";
                                echo "<td>" . "Enterprise-Name" . "</td>";
                                echo "<td>" . "Enterprise-Code" . "</td>";
                                echo "<td>" . "Submission-Date" . "</td>";
                                echo "<td>" . "Produces-For" . "</td>";
                                echo "<td>" . "Vet-Name" . "</td>";
                                echo "</tr>";
                            while($row = mysqli_fetch_array($query)){
                                echo "<tr>";
                                echo "<td>" . $row[0] . "</td>";
                                echo "<td>" . $row[1] . "</td>";
                                echo "<td>" . $row[2] . "</td>";
                                echo "<td>" . $row[3] . "</td>";
                                echo "<td>" . $row[4] . "</td>";
                                echo "</tr>";
                            }
                                echo "</table>";
                                
                            }
                    ?>
            </div>
    </div>
    </body>
</html>