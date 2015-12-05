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
    <title>Flock Information Database - IAPT Result</title>
    <meta name="description" content="View the flock information statistics owned by the Institute of Applied Poultry Technology (IAPT).">
    <link href="resources/stylesheet-iapt-results.css" rel="stylesheet" type="text/css"/>
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
                        $Ecode = $_POST['enterprise-code'];
                        
                        $Ecode2 = $_POST['enterprise-code2'];
                        $EntStartDate = $_POST['enterprise-start-date'];
                        $EntEndDate = $_POST['enterprise-end-date'];

                        $MedName = $_POST['medication-name'];
                        $MedStartDate = $_POST['med-start-date'];
                        $MedEndDate = $_POST['med-end-date'];

                        $DisName = $_POST['disease-name'];
                        $DisStartDate = $_POST['disease-start-date'];
                        $DisEndDate = $_POST['disease-end-date'];

                        if(!empty($Ecode)){
                            $resultSQL = "SELECT * FROM (enterprise as E) WHERE E.e_code_='$Ecode'";
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

                        // Medication result
                        else if(!empty($MedName) && !empty($MedStartDate) && !empty($MedEndDate)){
                            $resultSQL2 = "SELECT * FROM (medications as M) WHERE M.medication_name='$MedName'
                            AND M.submission_date_ BETWEEN '$MedStartDate' AND '$MedEndDate'";
                            $query2 = mysqli_query($flockCon, $resultSQL2);
                            
                            echo "<table border = '3'";
                                echo "<tr>";
                                echo "<td>" . "Safe-Marketing-Date" . "</td>";
                                echo "<td>" . "Treatment-Date-Start" . "</td>";
                                echo "<td>" . "Treatment-Date-End" . "</td>";
                                echo "<td>" . "Withdrawal-Period" . "</td>";
                                echo "<td>" . "Medication-Name" . "</td>";
                                echo "<td>" . "Dose" . "</td>";
                                echo "<td>" . "Question" . "</td>";
                                echo "<td>" . "disease-syndrome-treated" . "</td>";
                                echo "<td>" . "E-code" . "</td>";
                                echo "<td>" . "Barn-Number" . "</td>";
                                echo "<td>" . "Submission-Date" . "</td>";
                                echo "<td>" . "Prescribed-By" . "</td>";
                            
                                echo "</tr>";
                            while($row2 = mysqli_fetch_array($query2)){
                                echo "<tr>";
                                echo "<td>" . $row2[0] . "</td>";
                                echo "<td>" . $row2[1] . "</td>";
                                echo "<td>" . $row2[2] . "</td>";
                                echo "<td>" . $row2[3] . "</td>";
                                echo "<td>" . $row2[4] . "</td>";
                                echo "<td>" . $row2[5] . "</td>";
                                echo "<td>" . $row2[6] . "</td>";
                                echo "<td>" . $row2[7] . "</td>";
                                echo "<td>" . $row2[8] . "</td>";
                                echo "<td>" . $row2[9] . "</td>";
                                echo "<td>" . $row2[10] . "</td>";
                                echo "<td>" . $row2[11] . "</td>";
                                echo "</tr>";
                            }
                               echo "</table>";
                            }

                            else if(!empty($DisName) && !empty($DisStartDate) && !empty($DisEndDate)){
                            $resultSQL = "SELECT * FROM (disease_syndrome as D) WHERE D.disease_syndrome_name='$DisName'
                            AND D.submission_date_ BETWEEN '$DisStartDate' AND '$DisEndDate'";
                                
                            $query = mysqli_query($flockCon, $resultSQL);
                            echo "<table border = '3'";
                                echo "<tr>";
                                echo "<td>" . "Disease-Name" . "</td>";
                                echo "<td>" . "Enterprise-Code" . "</td>";
                                echo "<td>" . "Submission-Date" . "</td>";
                                echo "<td>" . "Disease-Number" . "</td>";
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
                    ?>

            </div>
    </div>
    </body>
</html>