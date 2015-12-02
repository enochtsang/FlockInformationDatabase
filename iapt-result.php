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
                        $Mname = $_POST['medication-name'];
                        if(!empty($Ecode)){
                            $resultSQL = "SELECT * FROM (Enterprise as E) WHERE E.Ecode='$Ecode'";
                            $query = mysqli_query($flockCon, $resultSQL);
                            echo "<table border = '3'";
                            while($row = mysqli_fetch_array($query)){
                                echo "<tr>";
                                echo "<td>" . "Enterprise-Code" . "</td>";
                                echo "<td>" . "Enterprise-Name" . "</td>";
                                echo "<td>" . "Producer-Code" . "</td>";
                                echo "<td>" . "Submission-Date" . "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td>" . $row[0] . "</td>";
                                echo "<td>" . $row[1] . "</td>";
                                echo "<td>" . $row[2] . "</td>";
                                echo "<td>" . $row[3] . "</td>";
                                echo "</tr>";
                            }
                                echo "</table>";
                                
                            }
                
                        // Medication result
                        //require_once 'connect.php'; 
                        //$Mname = $_POST['medication-name'];
                        else if(!empty($Mname)){
                            $resultSQL2 = "SELECT * FROM (Medications as M) WHERE M.Medication_Name='$Mname'";
                            $query2 = mysqli_query($flockCon, $resultSQL2);
                            
                            echo "<table border = '3'";
                            while($row2 = mysqli_fetch_array($query2)){
                                echo "<tr>";
                                echo "<td>" . "Safe-Marketing-Date" . "</td>";
                                echo "<td>" . "Treatment-Date-Start" . "</td>";
                                echo "<td>" . "Treatment-Date-End" . "</td>";
                                echo "<td>" . "Withdrawal-Period" . "</td>";
                                echo "<td>" . "Medication-Name" . "</td>";
                                echo "<td>" . "Dose" . "</td>";
                                echo "<td>" . "Question" . "</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td>" . $row2[0] . "</td>";
                                echo "<td>" . $row2[1] . "</td>";
                                echo "<td>" . $row2[2] . "</td>";
                                echo "<td>" . $row2[3] . "</td>";
                                echo "<td>" . $row2[4] . "</td>";
                                echo "<td>" . $row2[5] . "</td>";
                                echo "<td>" . $row2[6] . "</td>";
                                echo "</tr>";
                            }
                               echo "</table>";
                            }
                    ?>

            </div>
    </div>
    </body>
</html>