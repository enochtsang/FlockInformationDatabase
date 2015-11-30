<?php
require_once 'connect.php';
include 'header.php';

// If the values are posted, insert them into the database.
if (isset($_POST['username']) && isset($_POST['user_type']) && isset($_POST['password']) && isset($_POST['email'])) {
    $username = $_POST['username'];
    $user_type = $_POST['user_type'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $query = "SELECT username FROM `INFO` WHERE username='$username'";
    $isDuplicate = mysqli_query($con, $query);
    
    if (!empty($username) && !empty($user_type) && !empty($password) && !empty($email)) {
        $query = "INSERT INTO `INFO` (username, password, user_type, email) VALUES ('$username', '$password','$user_type', '$email')";
        $result = mysqli_query($con, $query);
        if ($result) {
            $msg = "User Created Successfully.";
        }
    } else {
        if($isDuplicate) {
            $msg = "Sorry! This username is currently taken. Please choose another one.";
        }
        else {
            $msg = "Please fill in all the fields.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <script>
            function gotoLogin() {
                location.href = "index.php";
            }
        </script>
    </head>
    <body>
    <div class="wrapper">
        <div id="logo-bar">
            <?php include 'logo-include.php'; ?>
            <h1> Register </h1>
        </div>        
    </div>       
    <center>
        <div class="content">
            <div id="register-input">
            <form method="post" action="register.php" >
            <table border="0" >
                <tr>
                    <td><b>Username</b></td>
                <div>
                    <td><input type="text" name="username">
                </tr>
                <tr>
                    <td><b>Password</b></td>
                    <td><input name="password" type="password">
                </tr> <br/>
                <tr>
                    <td>
                        <b>User Type</b>
                    </td>
                    <td><input type="text" name="user_type">
                </tr>
                <tr>
                    <td>
                        <b>Email</b>
                    </td>
                    <td><input type="text" name="email">
                </tr>
            </table>   
            </form>
            
            <div id="reg-buttons">
                <input type="submit" value="Register"/>
                <input type="button" value="Login" onclick="gotoLogin()">
            </div>   
        <br>
        <br>
        <?php
        if (isset($msg) & !empty($msg)) {
            echo $msg;
        }
        ?>
            </div>
        </div>
    </center>
</body>
</html>