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
                        $Ecode = $_POST['enterprise-code'];
                        $startDate = $_POST['start-date'];
                        $endDate = $_POST['end-date'];
                        if(!empty($Ecode) && !empty($startDate) && !empty($endDate)){
                            $resultSQL = "SELECT * FROM (Enterprise as E) WHERE E.Ecode='$Ecode' 
                                                        AND E.submissionDate BETWEEN '$startDate' AND '$endDate'";
                            $query = mysqli_query($flockCon, $resultSQL);

                           while($result = mysqli_fetch_array($query)) {
                                echo "<div class = \"tuple\">"; 
                                echo "<li class=\"tuplecolumn\">". $result['Ename'] . " ";
                                echo "<li class=\"tuplecolumn\">".$result['Ecode']. " " ;
                                echo "<li class=\"tuplecolumn\">".$result['Pcode']. " " ;
                                echo "<br/>";
                                echo "</div>"; 
                            } 
                        }
                    ?>
            </div>
    </div>
    </body>
</html>