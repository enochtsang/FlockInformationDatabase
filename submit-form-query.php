<html>
    <head>
        <title>Submit-form-query</title>		
    </head>
    <body bgcolor=#b2b2b2>
        <div align="center" style="background-color: whitesmoke">
            <?php
            session_start();
            require_once 'connect.php';
           
            //global variables
           // $barn_number= filter_input(INPUT_POST, 'barn-number'); // Barn -> BarnNo
           // $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');// Enterprise -> Ecode
            
            
//TODO figure out where to put additional comments section
//TODO Get Enoch to modify section B to use single date & datetime variable to reduce table clutter
//TODO make sure tables have all primary and secondary keys
//TODO add section to form for added items like vet and poultry supplier
//TODO add cert to poultry flock



            if (isset($_POST['producer-enterprise'])) {
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $enterpriseQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota')";
                    $resultEnterprise = mysqli_query($flockCon, $enterpriseQuery);
                }
            }

//            if (isset($_POST['mortality-rate']) && isset($_POST['number-of-birds-shipped'])
//            		&& isset($_POST['number-of-birds-placed'])&& isset($_POST['grow-out-density']) && isset($_POST['barn-number'])) {
                $barn_number = filter_input(INPUT_POST, 'barn-number'); 
                $mortality_rate = filter_input(INPUT_POST, 'mortality-rate'); 
                $number_of_birds_shipped = filter_input(INPUT_POST, 'number-of-birds-shipped');
                $number_of_birds_placed = filter_input(INPUT_POST, 'number-of-birds-placed');
                //TODO add CFC OFFSAP cert
                $grow_out_density = filter_input(INPUT_POST, 'grow-out-density');
                //TODO gow out density units
//                 if (!empty($grow_out_density)&& !empty($number_of_birds_placed)
//                 		&& !empty($number_of_birds_shipped)&& !empty($mortality_rate)) {
                    $barnQuery = "INSERT INTO `barn` (BarnNo,Birds_Placed,Mortality_Rate,Birds_Shipped,Ecode,Grow_Out_Density) "
                            . "VALUES ('$barn_number', '$number_of_birds_placed','$mortality_rate', '$number_of_birds_shipped','$producer_code_quota','$grow_out_density')";
                    $resultBarn = mysqli_query($flockCon, $barnQuery);
                   
//                }
//             }
            
//             if (isset($_POST['kg-per-bird']) && isset($_POST['species'])
//                     && isset($_POST['category-sex'])&& isset($_POST['age-of-birds'])) {
                $kg_per_bird = filter_input(INPUT_POST, 'kg-per-bird'); 
                $species = filter_input(INPUT_POST, 'species');
                $category = filter_input(INPUT_POST, 'category-sex');
                $age_of_birds = filter_input(INPUT_POST, 'age-of-birds');
                //BarnNo          
//                 if (!empty($kg_per_bird) && !empty($species)
//                         && !empty($category_sex)&& !empty($age_of_birds)) {
                    $poultryFlockQuery = "INSERT INTO `poultry_flock` (kg_per_bird,Species,category,Age,BarnNo) "
                            . "VALUES ('$kg_per_bird','$species', '$category','$age_of_birds','$barn_number')";

                    $resultPoultry = mysqli_query($flockCon, $poultryFlockQuery);
//                  }
//              }
            
//            if (isset(fileter_input(INPUT_POST,'planned-catching-date')) && isset(fileter_input(INPUT_POST,'planned-catching-time'))
//                    && isset(filter_input(INPUT_POST, 'actual-catching-date'))&& isset(filter_input(INPUT_POST, 'actual-catching-time'))) {
//                $planned_catching_date = filter_input(INPUT_POST, 'planned-catching-date');
//                $planned_catching_time = filter_input(INPUT_POST, 'planned-catching-time');
//                $actual_catching_date = filter_input(INPUT_POST, 'actual-catching-date');
//                $actual_catching_time = filter_input(INPUT_POST, 'actual-catching-time');
//                if (!empty($planned_catching_date) && !empty($actual_catching_date)&& !empty($planned_catching_time)&& !empty($actual_catching_time)) {
//                    $catchingQuery = "INSERT INTO `catching` (Planned_Date,Planned_Time,Actual_Date,Actual_Time,BarnNo) "
//                            . "VALUES ('$planned_catching_date','$planned_catching_time', '$actual_catching_date', '$actual_catching_time')";
//                    $resultCatching = mysqli_query($flockCon, $catchingQuery);
//                }
//            }
//            
//            
//            if (isset(fileter_input(INPUT_POST,'planned-processing-datetime')) && isset(fileter_input(INPUT_POST,'last-water-access-time'))
//                    && isset(fileter_input(INPUT_POST,'feed-distruption'))&& isset(fileter_input(INPUT_POST,'feed-withdrawal-time'))
//                    && isset(fileter_input(INPUT_POST,'food-no-access-date'))&& isset(fileter_input(INPUT_POST,'floor-1-time'))) {
//                $planned_processing_day = filter_input(INPUT_POST, 'planned-processing-datetime');
//                $last_water_access_time = filter_input(INPUT_POST, 'last-water-access-time');
//                $feed_distruption = filter_input(INPUT_POST, 'feed-distruption');
//                $feed_withdrawal_time = filter_input(INPUT_POST, 'feed-withdrawal-time');
//                $food_no_access_date = filter_input(INPUT_POST, 'food-no-access-date');
//                $floor_1_time = filter_input(INPUT_POST, 'floor-1-time');
//                $floor_2_time = filter_input(INPUT_POST, 'floor-2-time');
//                $floor_3_time = filter_input(INPUT_POST, 'floor-3-time');
//                if (!empty($planned_processing_day) && !empty($last_water_access_time)&& !empty($feed_distruption)
//                        && !empty($feed_withdrawal_time)&& !empty($food_no_access_date)&& !empty($floor_1_time)) {
//                    $processingQuery = "INSERT INTO `processing` (Planned_Date,Feed_Supply_Disrupted,Feed_Withdraw_Time,"
//                            . "Time_Feed_Not_Accessible,BarnNo,floor1_time,floor2_time,floor3_time,last_water_access) "
//                            . "VALUES ('$planned_processing_day','$feed_distruption', '$feed_withdrawal_time', '$feed_withdrawal_time', "
//                            . "'$food_no_access_date', '$barn_number', '$floor_1_time', '$floor_2_time', '$floor_3_time')";
//                    $resultProcessing = mysqli_query($flockCon, $processingQuery);
//                }
//            }
//            
//            if (isset(fileter_input(INPUT_POST,'question-1')) && isset(fileter_input(INPUT_POST,'question-2'))
//                    && isset(fileter_input(INPUT_POST,'question-2')) && isset(fileter_input(INPUT_POST,'question-2'))
//                            && isset(fileter_input(INPUT_POST,'question-2'))) {
//                $q1Answer = filter_input(INPUT_POST, 'question-1');
//                $q2Answer = filter_input(INPUT_POST, 'question-2');
//                $q3Answer = filter_input(INPUT_POST, 'question-3');
//                $q4Answer = filter_input(INPUT_POST, 'question-4');
//                $q5Answer = filter_input(INPUT_POST, 'question-5');
//                //if they are true grab post values and pass them to the db
//                
//            }
//            
//            
//            
//            
//            if (isset(fileter_input(INPUT_POST,'species')) && isset(fileter_input(INPUT_POST,'species'))) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
//                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
//                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
//                    $poultryFlockQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
//                    $result = mysqli_query($flockCon, $poultryFlockQuery);
//                }
//            }
//            
//            if (isset(fileter_input(INPUT_POST,'species')) && isset(fileter_input(INPUT_POST,'species'))) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
//                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
//                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
//                    $poultrySupplierQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
//                    $result = mysqli_query($flockCon, $poultrySupplierQuery);
//                }
//            }
//            
//            if (isset(fileter_input(INPUT_POST,'species')) && isset(fileter_input(INPUT_POST,'species'))) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
//                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
//                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
//                    $prescribesQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
//                    $result = mysqli_query($flockCon, $prescribesQuery);
//                }
//            }
//            
//            if (isset(fileter_input(INPUT_POST,'species')) && isset(fileter_input(INPUT_POST,'species'))) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
//                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
//                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
//                    $processingQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
//                    $result = mysqli_query($flockCon, $processingQuery);
//                }
//            }
//            
//            if (isset(fileter_input(INPUT_POST,'species')) && isset(fileter_input(INPUT_POST,'species'))) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
//                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
//                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
//                    $purchasesFromQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
//                    $result = mysqli_query($flockCon, $purchasesFromQuery);
//                }
//            }
//            
//            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
//                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
//                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
//                    $veterinaryPracticQeuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
//                    $result = mysqli_query($flockCon, $veterinaryPracticQeuery);
//                }
//            }
//            
//            if (isset(fileter_input(INPUT_POST,'species')) && isset(fileter_input(INPUT_POST,'species'))) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
//                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
//                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
//                    $adminsteredToQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
//                    $result = mysqli_query($flockCon, $adminsteredToQuery);
//                }
//            }

            
            ?>
        </div>
    </body>
</html>