<?php
require_once 'connect.php';

// If the values are posted, insert them into the database.
if (isset($_POST['username']) && isset($_POST['user_type']) && isset($_POST['password']) && isset($_POST['email'])) {
    $username = $_POST['username'];
    $user_type = $_POST['user_type'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $query = "SELECT username FROM `user` WHERE username='$username'";
    $isDuplicate = mysqli_query($con, $query);
    if($isDuplicate) {
        $msg = "Sorry! This username is currently taken. Please choose another one.";
    }    
    
    if (!empty($username) && !empty($user_type) && !empty($password) && !empty($email)) {
        $query = "INSERT INTO `user` (username, password, user_type, email) VALUES ('$username', '$password','$user_type', '$email')";
        $result = mysqli_query($con, $query);
        if ($result) {
            $msg = "User Created Successfully.";
        }
    } else {
        $msg = "Please fill in all the fields.";
    }
}
?>
<!DOCTYPE html>
<html lang="en-CA">
<head>
    <?php include 'header.php';?>
    <title>Flock Information Database</title>
    <meta name="description" content="IAPT's flock information database">
</head>
<body>
    <div class="wrapper">
        <div id="logo-bar">
            <?php include 'logo-include.php'; ?>
            <h1> Home </h1>
        </div>

        <div class="content">
            <table id="register-login">
            <tr>
            <td>
                <form id="register-form" method="post" action="index.php">
                    <table id="inner-register">
                        <th colspan="2"><h3>New users register here.</h3></th>
                        <tr>
                            <td><label for="username"><b>Username<b></label></td>
                            <td><input type="text" name="username"></td>
                        </tr>
                        <tr>
                            <td><label for="password"><b>Password</label></b></td>
                            <td><input type="password" name="password"></input></td>
                        </tr>
                        <tr>
                            <td><label for="user_type"><b>User Type</b></label></td>
                            <td><input type="text" name="user_type"></td>
                        </tr>
                        <tr>
                            <td><label for="email"><b>Email</b></label></td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="Register"/></td>
                        </tr>
                    </table>
                </form>
            </td>

            <td>
                <form id="login-form" method="post" action="redirectPostLogin.php" >
                    <table id="inner-login">
                        <th colspan="2"><h3>Existing users login here.</h3></th>
                        <tr>
                            <td><label for="username"><b>Username</b></label></td>
                            <td><input type="text" name="username"></td>
                        </tr>
                        <tr>
                            <td><label for="login_password"><b>Password</b></label></td>
                            <td><input name="password" type="password"></input></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="Login"/></td>
                        </tr>
                    </table>
                </form>
            </td>
            </tr>
            </table>

            <div>
            <br>
            <?php
            if (isset($msg) & !empty($msg)) {
                echo $msg;
            }
            ?>  
            </div>
            <div id="about-us">
                <h1> About Us </h1>
                <p>Institute of Applied Poultry Technologies! INFO HERE</p>
            </div>
        </div>
    </div>
</body>
</html>
