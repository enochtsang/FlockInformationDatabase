<html>
    <head>
        <title>Submit-form-query</title>		
    </head>
    <body bgcolor=#b2b2b2>
        <div align="center" style="background-color: whitesmoke">
            <?php
            session_start();
            require_once 'connect.php';

// If the values are posted, insert them into the database.
            if (isset(fileter_input(INPUT_POST,'producer-code-quota')) && isset(fileter_input(INPUT_POST,'producer-enterprise'))) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $enterpriseQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota')";
                    $result = mysqli_query($flockCon, $enterpriseQuery);
                }
            }




           if (isset(fileter_input(INPUT_POST,'barn-number')) && isset(fileter_input(INPUT_POST,'mortality-rate'))
                    && isset(fileter_input(INPUT_POST,'number-of-birds-shipped'))&& isset(fileter_input(INPUT_POST,'number-of-birds-placed'))
                    && isset(fileter_input(INPUT_POST,'species'))) {
               $barn_number = filter_input(INPUT_POST, 'barn-number'); 
               $mortality_rate = filter_input(INPUT_POST, 'mortality-rate'); 
                $number_of_birds_shipped = filter_input(INPUT_POST, 'number-of-birds-shipped');
                $number_of_birds_placed = filter_input(INPUT_POST, 'number-of-birds-placed');
                //TODO add CFC OFFSAP cert
                $grow_out_density = filter_input(INPUT_POST, 'grow-out-density');
                //TODO gow out density units
                if (!empty($barn_number) && !empty($grow_out_density)
                        && !empty($number_of_birds_placed)&& !empty($number_of_birds_shipped)
                        && !empty($producer_code_quota)&& !empty($mortality_rate)) {
                    $barnQuery = "INSERT INTO `Barn` (BarnNo,Birds_Placed,Mortality_Rate,Birds_Shipped,Ecode,Grow_Out_Density) "
                            . "VALUES ('$barn_number', '$number_of_birds_placed','$mortality_rate', '$number_of_birds_shipped','$producer_code_quota','$grow_out_density')";
                    $resultBarn = mysqli_query($flockCon, $barnQuery);
                    echo "in the barn if";
                }
            }
            
            if (isset(fileter_input(INPUT_POST,'kg-per-bird')) && isset(fileter_input(INPUT_POST,'species'))
                    && isset(fileter_input(INPUT_POST,'category-sex'))&&isset(fileter_input(INPUT_POST,'age-of-birds'))) {
                $kg_per_bird = filter_input(INPUT_POST, 'kg-per-bird'); 
                $species = filter_input(INPUT_POST, 'species');
                $category_sex = filter_input(INPUT_POST, 'category-sex');
                $age_of_birds = filter_input(INPUT_POST, 'age-of-birds');
                //BarnNo          
                if (!empty($kg_per_bird) && !empty($species)
                        && !empty($category_sex)&& !empty($age_of_birds)) {
                    $poultryFlockQuery = "INSERT INTO `poulty flock` (kg/Bird,Species,Category/Sex,Age,BarnNo) "
                            . "VALUES ('$kg_per_bird','$species', '$category_sex','$age_of_birds','$barn_number',)";
                    $result = mysqli_query($flockCon, $poultryFlockQuery);
                }
            }
            
            if (isset(fileter_input(INPUT_POST,'planned-catching-date')) && isset(fileter_input(INPUT_POST,'planned-catching-time'))
                    && isset(filter_input(INPUT_POST, 'actual-catching-date'))&& isset(filter_input(INPUT_POST, 'actual-catching-time'))) {
                $planned_catching_date = filter_input(INPUT_POST, 'planned-catching-date');
                $planned_catching_time = filter_input(INPUT_POST, 'planned-catching-time');
                $actual_catching_date = filter_input(INPUT_POST, 'actual-catching-date');
                $actual_catching_time = filter_input(INPUT_POST, 'actual-catching-time');
                if (!empty($planned_catching_date) && !empty($actual_catching_date)&& !empty($planned_catching_time)&& !empty($actual_catching_time)) {
                    $catchingQuery = "INSERT INTO `Enterprise` (Planned_Date,Planned_Time,Actual_Date,Actual_Time,BarnNo) "
                            . "VALUES ('$planned_catching_date','$planned_catching_time', '$actual_catching_date', '$actual_catching_time')";
                    $result = mysqli_query($flockCon, $catchinQuery);
                }
            }
            
            if (isset(fileter_input(INPUT_POST,'species')) && isset(fileter_input(INPUT_POST,'species'))) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $medicationsQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $medicationsQuery);
                }
            }
            
            if (isset(fileter_input(INPUT_POST,'species')) && isset(fileter_input(INPUT_POST,'species'))) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $poultryFlockQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $poultryFlockQuery);
                }
            }
            
            if (isset(fileter_input(INPUT_POST,'species')) && isset(fileter_input(INPUT_POST,'species'))) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $poultrySupplierQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $poultrySupplierQuery);
                }
            }
            
            if (isset(fileter_input(INPUT_POST,'species')) && isset(fileter_input(INPUT_POST,'species'))) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $prescribesQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $prescribesQuery);
                }
            }
            
            if (isset(fileter_input(INPUT_POST,'species')) && isset(fileter_input(INPUT_POST,'species'))) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $processingQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $processingQuery);
                }
            }
            
            if (isset(fileter_input(INPUT_POST,'species')) && isset(fileter_input(INPUT_POST,'species'))) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $purchasesFromQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $purchasesFromQuery);
                }
            }
            
            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $veterinaryPracticQeuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $veterinaryPracticQeuery);
                }
            }
            
            if (isset(fileter_input(INPUT_POST,'species')) && isset(fileter_input(INPUT_POST,'species'))) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $adminsteredToQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $adminsteredToQuery);
                }
            }

            
            ?>
        </div>
    </body>
</html>