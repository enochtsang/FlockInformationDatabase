<html>
    <head>
        <title>Member</title>
        		<script>
	function gotologin() {
    location.href = "login.php";
}
        function gotoGovPage(){
    location.href ="govMain.php";
        }
        function gotoIAPTPage(){
    location.href ="iaptMain.php";
        }
        function gotoEnterprisePage(){
    location.href ="enterpriseMain.php";
        }
</script>
    </head>
    <body bgcolor=#b2b2b2>
        <div align="center" style="background-color: whitesmoke">
            <?php
            session_start();
            require_once 'connect.php';

//3. If the form is submitted or not.
//3.1 If the form is submitted
            if (isset($_POST['username']) and isset($_POST['password'])) {
//3.1.1 Assigning posted values to variables.
                $username = $_POST['username'];
                $password = $_POST['password'];

//3.1.2 Checking the values are existing in the database or not
                $query_userType = "SELECT user_type FROM INFO WHERE username='$username' and password='$password'";
                $userType = mysqli_query($con, $query_userType) or die(mysqli_error());
                $row = mysqli_fetch_assoc($userType);
                
                $count = mysqli_num_rows($userType);
                if ($count == 1) {
                    $_SESSION['username'] = $username;
                    $_SESSION['userType'] = $row['user_type'];
                } else {
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
                    echo "Invalid Login Credentials.";
                }
            }
//3.1.4 if the user is logged in Greets the user with message
            if (isset($_SESSION['userType'])) {
                $userType = $_SESSION['userType'];

               
                if ($userType == "gov"){
                   printf("in gov");
                   header("Location: http://localhost/govMain.php");
                   exit;
                   
                   
                }
                else if ($userType == "IAPT"){
                   gotoIAPTPage();
                }
                else if ($userType == "enterprise"){
                    gotoEnterprisePage();
                }
                else
                    printf("row is false");
            }
            else {
                header("Location: login.php");
            }
            
            printf("this isn't working");
            echo "Hi " . $username . "<br>";
            echo "This is the Members Area <br>";
            echo "<a href='logout.php'>Logout</a>"; 

?>
        </div>
    </body>
</html>