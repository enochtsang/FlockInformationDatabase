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
            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $enterpriseQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $enterpriseQuery);
                    
                }
                else{
                    echo "post was empty in enterprise";
                }
            }
            else{
                echo "Incomplete Form Submitted";
            }
                
        
            
//            if (isset($_POST['barn-number']) && isset($_POST['species'])
//                    && isset($_POST['category-sex'])&& isset($_POST['age-of-birds'])
//                    && isset($_POST['number-of-birds-shipped'])&& isset($_POST['number-of-birds-placed'])
//                    && isset($_POST['kg-per-bird'])&& isset($_POST['grow-out-density'])) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $barn_number = filter_input(INPUT_POST, 'barn-number'); 
//                $species = filter_input(INPUT_POST, 'species');
//                $category_sex = filter_input(INPUT_POST, 'category-sex');
//                $age_of_birds = filter_input(INPUT_POST, 'age-of-birds'); 
//                $number_of_birds_shipped = filter_input(INPUT_POST, 'number-of-birds-shipped');
//                $number_of_birds_placed = filter_input(INPUT_POST, 'number-of-birds-placed');
//                $kg_per_bird = filter_input(INPUT_POST, 'kg-per-bird');
//                //TODO add CFC OFFSAP cert
//                $grow_out_density = filter_input(INPUT_POST, 'grow-out-density');
//                //TODO gow out density units
//                if (!empty($kg_per_bird) && !empty($grow_out_density)
//                        && !empty($barn_number)&& !empty($species)
//                        && !empty($category_sex)&& !empty($age_of_birds)
//                        && !empty($number_of_birds_shipped)&& !empty($number_of_birds_placed)) {
//                    $barnQuery = "INSERT INTO `Barn` (BarnNo,Birds_Placed,Mortality_Rate,Birds_Shipped,Grow_Rate,Density,Ecode) "
//                            . "VALUES ('$barn_number','$species', '$category_sex', '$age_of_birds', '$number_of_birds_shipped', "
//                            . "'$number_of_birds_placed', '$kg_per_bird', '$grow_out_density')";
//                    $result = mysqli_query($flockCon, $barnQuery);
//                }
//            }
//            
//            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
//                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
//                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
//                    $catchingQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
//                    $result = mysqli_query($flockCon, $catchingQuery);
//                }
//            }
//            
//            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
//                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
//                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
//                    $consultsQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
//                    $result = mysqli_query($flockCon, $consultsQuery);
//                }
//            }
//            
//            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
//                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
//                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
//                    $medicationsQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
//                    $result = mysqli_query($flockCon, $medicationsQuery);
//                }
//            }
//            
//            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
//                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
//                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
//                    $poultryFlockQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
//                    $result = mysqli_query($flockCon, $poultryFlockQuery);
//                }
//            }
//            
//            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
//                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
//                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
//                    $poultrySupplierQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
//                    $result = mysqli_query($flockCon, $poultrySupplierQuery);
//                }
//            }
//            
//            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
//                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
//                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
//                    $prescribesQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
//                    $result = mysqli_query($flockCon, $prescribesQuery);
//                }
//            }
//            
//            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
//                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
//                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
//                    $processingQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
//                    $result = mysqli_query($flockCon, $processingQuery);
//                }
//            }
//            
//            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
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
//            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
//                // $producer_enterprise = $_POST['producer-enterprise'];
//                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
//                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
//                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
//                    $adminsteredToQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
//                    $result = mysqli_query($flockCon, $adminsteredToQuery);
//                }
//            }
//
//            
            ?>
        </div>
    </body>
</html>