<html>
    <head>
        <title>Submit-form-query</title>		
    </head>
    <body bgcolor=#b2b2b2>
        <div align="center" style="background-color: whitesmoke">
            <?php
            session_start();
            require_once 'connect.php';
            $submission_date = date('Y-m-d H:i:s');//submission_date_
            //global variables
           // $barn_number= filter_input(INPUT_POST, 'barn-number'); // Barn -> BarnNo
           // $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');// Enterprise -> Ecode
            
            
//TODO figure out where to put additional comments section
//TODO Get Enoch to modify section B to use single date & datetime variable to reduce table clutter
//TODO make sure tables have all primary and secondary keys
//TODO add section to form for added items like vet and poultry supplier
//TODO add cert to poultry flock



            if (isset($_POST['producer-enterprise'])) {
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');//e_code_
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');//e_name
                $produces_for = filter_input(INPUT_POST, 'produces-for');//produces_for
                $vet_name = filter_input(INPUT_POST, 'vet-name');//vet_name
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $enterpriseQuery = "INSERT INTO `Enterprise` (e_code_,e_name,submission_date_,produces_for,vet_name) "
                    . "VALUES ('$producer_code_quota','$producer_enterprise','$submission_date','$produces_for','$vet_name')";
                    $resultEnterprise = mysqli_query($flockCon, $enterpriseQuery);
                }
            }

//            if (isset($_POST['mortality-rate']) && isset($_POST['number-of-birds-shipped'])
//            		&& isset($_POST['number-of-birds-placed'])&& isset($_POST['grow-out-density']) && isset($_POST['barn-number'])) {
                $barn_number = filter_input(INPUT_POST, 'barn-number'); //barn_number_
                $mortality_rate = filter_input(INPUT_POST, 'mortality-rate'); //mortality_rate
                $number_of_birds_shipped = filter_input(INPUT_POST, 'number-of-birds-shipped');//birds_shipped
                $number_of_birds_placed = filter_input(INPUT_POST, 'number-of-birds-placed');//birds_placed
                $grow_out_density = filter_input(INPUT_POST, 'grow-out-density');//grow_out_density
                $grow_out_density_units = filter_input(INPUT_POST, 'grow-out-density-units');//density_units
                //                 if (!empty($grow_out_density)&& !empty($number_of_birds_placed)
//                 		&& !empty($number_of_birds_shipped)&& !empty($mortality_rate)) {
//                     $barnQuery = "INSERT INTO `barn` (barn_number_,mortality_rate,birds_shipped,birds_placed,grow_out_density,density_units,e_code_,submission_date_) "
//                             . "VALUES ('$barn_number', '$mortality_rate','$number_of_birds_shipped', '$number_of_birds_placed','$grow_out_density','$grow_out_density_units','$producer_code_quota','$submission_date')";
                $barnQuery = "INSERT INTO `barn` (barn_number_,mortality_rate,birds_shipped,birds_placed,grow_out_density,e_code_,submission_date_) "
                		. "VALUES ('$barn_number', '$mortality_rate','$number_of_birds_shipped', '$number_of_birds_placed','$grow_out_density','$producer_code_quota','$submission_date')";
                    $resultBarn = mysqli_query($flockCon, $barnQuery);
                   
//                }
//             }
            
//             if (isset($_POST['kg-per-bird']) && isset($_POST['species'])
//                     && isset($_POST['category-sex'])&& isset($_POST['age-of-birds'])) {
                $kg_per_bird = filter_input(INPUT_POST, 'kg-per-bird'); //kg_per_bird
                $species = filter_input(INPUT_POST, 'species');//species
                $category = filter_input(INPUT_POST, 'category-sex');//category
                $age_of_birds = filter_input(INPUT_POST, 'age-of-birds');//age
                $cfc_cert = filter_input(INPUT_POST, 'certification');//cfc_cert
                
//                 if (!empty($kg_per_bird) && !empty($species)
//                         && !empty($category_sex)&& !empty($age_of_birds)) {
//                     $poultryFlockQuery = "INSERT INTO `poultry_flock` (kg_per_bird,species,category,age,cfc_cert,vet_name,barn_number_,e_code_,submission_date_) "
//                             . "VALUES ('$kg_per_bird','$species', '$category','$age_of_birds','$cfc_cert','$vet_name','$barn_number','$producer_code_quota','$submission_date')";
                $poultryFlockQuery = "INSERT INTO `poultry_flock` (kg_per_bird,species,category,age,barn_number_,e_code_,submission_date_) "
                		. "VALUES ('$kg_per_bird','$species', '$category','$age_of_birds','$barn_number','$producer_code_quota','$submission_date')";
                    $resultPoultry = mysqli_query($flockCon, $poultryFlockQuery);
//                  }
//              }
            
//            if (isset(fileter_input(INPUT_POST,'planned-catching-date')) && isset(fileter_input(INPUT_POST,'planned-catching-time'))
//                    && isset(filter_input(INPUT_POST, 'actual-catching-date'))&& isset(filter_input(INPUT_POST, 'actual-catching-time'))) {
               $planned_catching_date = filter_input(INPUT_POST, 'planned-catching-date');//planned_date
               $planned_catching_time = filter_input(INPUT_POST, 'planned-catching-time');//planned_time
               $actual_catching_date = filter_input(INPUT_POST, 'actual-catching-date');//actual_date
               $actual_catching_time = filter_input(INPUT_POST, 'actual-catching-time');//actual_time
//                if (!empty($planned_catching_date) && !empty($actual_catching_date)&& !empty($planned_catching_time)&& !empty($actual_catching_time)) {
                   $catchingQuery = "INSERT INTO `catching` (planned_date,planned_time,actual_date,actual_time,barn_number_,e_code_,submission_date_) "
                           . "VALUES ('$planned_catching_date','$planned_catching_time', '$actual_catching_date', '$actual_catching_time','$barn_number','$producer_code_quota','$submission_date')";
                   $resultCatching = mysqli_query($flockCon, $catchingQuery);
//                }
//            }
//            
//            
//            if (isset(fileter_input(INPUT_POST,'planned-processing-datetime')) && isset(fileter_input(INPUT_POST,'last-water-access-time'))
//                    && isset(fileter_input(INPUT_POST,'feed-distruption'))&& isset(fileter_input(INPUT_POST,'feed-withdrawal-time'))
//                    && isset(fileter_input(INPUT_POST,'food-no-access-date'))&& isset(fileter_input(INPUT_POST,'floor-1-time'))) {
               $planned_processing_day = filter_input(INPUT_POST, 'planned-processing-datetime');//planned_date
               $last_water_access_time = filter_input(INPUT_POST, 'last-water-access-time');//last_water_access
               $feed_distruption = filter_input(INPUT_POST, 'feed-distruption');//feed_supply_disrupted
               $feed_withdrawal_time = filter_input(INPUT_POST, 'feed-withdrawal-time');//feed_withdraw_time
               $food_no_access_date = filter_input(INPUT_POST, 'food-no-access-date');//feed_not_accessible_date
               $floor_1_time = filter_input(INPUT_POST, 'floor-1-time');//floor1_time
               $floor_2_time = filter_input(INPUT_POST, 'floor-2-time');//floor2_time
               $floor_3_time = filter_input(INPUT_POST, 'floor-3-time');//floor3_time
//                if (!empty($planned_processing_day) && !empty($last_water_access_time)&& !empty($feed_distruption)
//                        && !empty($feed_withdrawal_time)&& !empty($food_no_access_date)&& !empty($floor_1_time)) {
                   $processingQuery = "INSERT INTO `processing` (planned_date,last_water_access,feed_supply_disrupted,"
                           . "feed_withdraw_time,feed_not_accessible_date,floor1_time,floor2_time,floor3_time,barn_number_,e_code_,submission_date_) "
                           . "VALUES ('$planned_processing_day','$last_water_access_time', '$feed_distruption', '$feed_withdrawal_time', "
                           . "'$food_no_access_date', '$floor_1_time', '$floor_2_time', '$floor_3_time','$barn_number','$producer_code_quota','$submission_date')";
                   $resultProcessing = mysqli_query($flockCon, $processingQuery);
//                }
//            }
//            
//            if (isset(fileter_input(INPUT_POST,'question-1')) && isset(fileter_input(INPUT_POST,'question-2'))
//                    && isset(fileter_input(INPUT_POST,'question-2')) && isset(fileter_input(INPUT_POST,'question-2'))
//                            && isset(fileter_input(INPUT_POST,'question-2'))) {
               $q1Answer = filter_input(INPUT_POST, 'question-1');
               if(!empty($q1Answer) && isset($_POST['question-1-a'])){
               	$question1 = 1;
               	$question1a = filter_input(INPUT_POST,'question-1-a');//medication_name
               	$question1d = filter_input(INPUT_POST,'question-1-d');//withdrawal_period
               	$question1e = filter_input(INPUT_POST,'question-1-e');//safe_marketing_date
               	$question1h = filter_input(INPUT_POST,'question-1-h');//prescribing_vet
               	
               	$question1Query = "INSERT INTO `medications` (medication_name,withdrawal_period,safe_marketing_date,question,prescribing_vet,barn_number_,e_code_,submission_date_) 
               	VALUES ('$question1a','$question1d','$question1e','$question1','$question1h','$vet_name','$barn_number','$producer_code_quota','$submission_date')";
               	$resultQuestion1 = mysqli_query($flockCon, $processingQuery);
               }
               $q2Answer = filter_input(INPUT_POST, 'question-2');
               if(!empty($q2Answer) && isset($_POST['question-2-a'])){
               	$question2 = 2;
               	$question2a = filter_input(INPUT_POST,'question-2-a');//medication_name
               	$question2b = filter_input(INPUT_POST,'question-2-b');//dose
               	$question2d = filter_input(INPUT_POST,'question-2-d');//withdrawal_period
               	$question2e = filter_input(INPUT_POST,'question-2-e');//safe_marketing_date
               	$question2h = filter_input(INPUT_POST,'question-2-h');//prescribing_vet
               	
               	$question2Query = "INSERT INTO `medications` (medication_name,dose,withdrawal_period,safe_marketing_date,question,prescribing_vet,barn_number_,e_code_,submission_date_)
               	VALUES ('$question2a','$question2b','$question2d','$question2e','$question2','$question2h','$vet_name','$barn_number','$producer_code_quota','$submission_date')";
               	$resultQuestion2 = mysqli_query($flockCon, $question5Query);               	
               }
               $q3Answer = filter_input(INPUT_POST, 'question-3');
               if(!empty($q3Answer) && isset($_POST['question-3-g'])){
               	$question3 = 3;
               	$question3g = filter_input(INPUT_POST,'question-3-g');//disease_syndrome
               	//TODO make disease_syndrome table work
               	$question3Query = "INSERT INTO `disease_syndrome` (disease_syndrome_name,question,barn_number_,e_code_,submission_date_)"
               	."VALUES ('$question3g','$question3','$barn_number','$producer_code_quota','$submission_date')";
               	$resultQuestion3 = mysqli_query($flockCon, $question3Query);               	
               }
               $q4Answer = filter_input(INPUT_POST, 'question-4');
               if(!empty($q4Answer) && isset($_POST['question-4-a'])){
               	$question4 = 4;
               	$question4a = filter_input(INPUT_POST,'question-4-a');//medication_Name
               	$question4b = filter_input(INPUT_POST,'question-4-b');//treatment_date_start
               	$question4c = filter_input(INPUT_POST,'question-4-c');//treatment_date_end
               	$question4d = filter_input(INPUT_POST,'question-4-d');//withdrawal_period
               	$question4e = filter_input(INPUT_POST,'question-4-e');//safe_marketing_date
               	$question4f = filter_input(INPUT_POST,'question-4-f');//dose
               	$question4g = filter_input(INPUT_POST,'question-4-g');//disease_syndrome_treated
               	$question4h = filter_input(INPUT_POST,'question-4-h');//prescribing_vet
               	
               	$question4Query = "INSERT INTO `medications` (medication_name,treatment_date_start,
               	treatment_date_end,withdrawal_period,safe_marketing_date,dose,disease_syndrome_treated,question,prescribing_vet,barn_number_,e_code_,submission_date_)"
               	."VALUES ('$question4a','$question4b','$question4c','$question4d','$question4e','$question4f','$question4g','$question4','$question4h','$vet_name','$barn_number','$producer_code_quota','$submission_date')";
               	$resultQuestion4 = mysqli_query($flockCon, $resultQuestion4);    
               	//TODO add insert for     $question4g into disease_syndrome table       	
               }
               $q5Answer = filter_input(INPUT_POST, 'question-5');
               if(!empty($q5Answer) && isset($_POST['question-5-a'])){
               	$question5 = 5;
               	$question5a = filter_input(INPUT_POST,'question-5-a');//medication_Name
               	$question5d = filter_input(INPUT_POST,'question-5-d');//withdrawal_period
               	$question5e = filter_input(INPUT_POST,'question-5-e');//safe_marketing_date
               	$question5h = filter_input(INPUT_POST,'question-5-h');//prescribing_vet
               	
               	$question5Query = "INSERT INTO `medications` (medication_name,withdrawal_period,safe_marketing_date,question,prescribing_vet,barn_number_,e_code_,submission_date_)"
               	."VALUES ('$question5a','$question5d','$question5e','$question5','$question5h','$vet_name','$barn_number','$producer_code_quota','$submission_date')";
               	$resultQuestion5 = mysqli_query($flockCon, $question5Query);
                }
                              
                              
               $q6Answer = filter_input(INPUT_POST, 'question-6');
               if(!empty($q6Answer) && isset($_POST['question-6-a'])){
               	$question6 = 6;
               	$question6a = filter_input(INPUT_POST,'question-6-a');//medication_Name
               	$question6d = filter_input(INPUT_POST,'question-6-d');//withdrawal_period
               	$question6e = filter_input(INPUT_POST,'question-6-e');//safe_marketing_date
               	$question6h = filter_input(INPUT_POST,'question-6-h');//prescribing_vet
               	
               	$question6Query = "INSERT INTO `medications` (medication_name,withdrawal_period,safe_marketing_date,question,prescribing_vet,barn_number_,e_code_,submission_date_)"
               	."VALUES ('$question6a','$question6d','$question6e','$question6','$question6h','$vet_name','$barn_number','$producer_code_quota','$submission_date')";
               	$resultQuestion6 = mysqli_query($flockCon, $question6Query);
               }
               
               
               $q7Answer = filter_input(INPUT_POST, 'question-7');
               if(!empty($q7Answer) && isset($_POST['question-7-a'])){
               	$question7 = 7;
               	$question7a = filter_input(INPUT_POST,'question-7-a');//medication_Name
               	$question7b = filter_input(INPUT_POST,'question-7-b');//treatment_date_start
               	$question7c = filter_input(INPUT_POST,'question-7-c');//treatment_date_end
               	$question7d = filter_input(INPUT_POST,'question-7-d');//withdrawal_period
               	$question7e = filter_input(INPUT_POST,'question-7-e');//safe_marketing_date
               	$question7f = filter_input(INPUT_POST,'question-7-f');//dose
               	$question7h = filter_input(INPUT_POST,'question-7-h');//prescribing_vet
               	
               	$question7Query = "INSERT INTO `medications` (medication_name,treatment_date_start,"
               	."treatment_date_end,withdrawal_period,safe_marketing_date,dose,question,prescribing_vet,barn_number_,e_code_,submission_date_)"
               	."VALUES ('$question7a','$question7b','$question7c','$question7d','$question7e','$question7f','$question7','$question7h','$vet_name','$barn_number','$producer_code_quota','$submission_date')";
               	$resultQuestion7 = mysqli_query($flockCon, $question7Query);
               }


            
            ?>
        </div>
    </body>
</html>