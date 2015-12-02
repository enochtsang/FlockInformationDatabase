<html>
    <head>
        <title>Member</title>		
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
            }
            
            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $barnQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $barnQuery);
                }
            }
            
            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $catchingQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $catchingQuery);
                }
            }
            
            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $consultsQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $consultsQuery);
                }
            }
            
            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $medicationsQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $medicationsQuery);
                }
            }
            
            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $poultryFlockQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $poultryFlockQuery);
                }
            }
            
            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $poultrySupplierQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $poultrySupplierQuery);
                }
            }
            
            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $prescribesQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $prescribesQuery);
                }
            }
            
            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
                // $producer_enterprise = $_POST['producer-enterprise'];
                $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
                $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
                if (!empty($producer_code_quota) && !empty($producer_enterprise)) {
                    $processingQuery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
                    $result = mysqli_query($flockCon, $processingQuery);
                }
            }
            
            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
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
            
            if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])) {
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