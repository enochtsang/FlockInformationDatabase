<?php
    session_start();
    require_once 'connect.php';
    if (isset($_POST['username']) and isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query_userType = "SELECT user_type FROM user WHERE username='$username' and password='$password'";
        $userType = mysqli_query($con, $query_userType);
        $row = mysqli_fetch_assoc($userType);        
        $count = mysqli_num_rows($userType);

        if ($count == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['userType'] = $row['user_type'];
        } else {
            $_SESSION['username'] = "guest";
            $_SESSION['userType'] = "none";
        }
    }
    if (isset($_SESSION['userType'])) {
        $userType = $_SESSION['userType'];
        if ($userType == "gov"){
           header("Location: government-lookup.php");
           exit;
        }
        else if ($userType == "iapt"){
            header("Location: iapt-lookup.php");
            exit;
        }
        else if ($userType == "producer"){
            header("Location: submit-form.php");
            exit;
        }
        else if ($userType == "none") {
            echo "<script>
                    alert('Invalid username and password'); 
                    window.location.href = 'index.php';
                 </script>";
        }
        else{
            header("Location: index.php"); 
            exit;
        }
    }            
    else {
        echo "<script type='text/javascript'>alert('No user type found');</script>";
    }

?>
