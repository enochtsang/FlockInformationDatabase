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
    <script src="resources/scripts/index.js"></script>
    <link href="resources/stylesheet-index.css?version=0" rel="stylesheet" type="text/css"/>
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
                <h3>Register</h3>
                <hr>
                <form id="register-form" name="register" method="post" action="index.php">
                    <table id="inner-register" class="login-table">
                        <tr>
                            <td><label for="username"><b>Username<b></label></td>
                            <td><input type="text" name="username"></td>
                        </tr>
                        <tr>
                            <td><label for="password"><b>Password</b></label></td>
                            <td><input type="password" name="password"></input></td>
                        </tr>
                        <tr>
                            <td><label for="user_type">User Type</label></td>
                            <td>
                                <select name="user_type">
                                    <option value="producer">Producer</option>
                                    <option value="iapt">IAPT</option>
                                    <option value="gov">Government</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Register"/></td>
                        </tr>
                    </table>
                </form>

            </td>

            <td>
                <h3>Login</h3>
                <hr>
                <form id="login-form" method="post" action="redirect-post-login.php">
                    <table id="inner-login" class="login-table">
                        <tr>
                            <td><label for="username"><b>Username</b></label></td>
                            <td><input type="text" name="username"></td>
                        </tr>
                        <tr>
                            <td><label for="login_password"><b>Password</b></label></td>
                            <td><input name="password" type="password"></input></td>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Login"/></td>
                        </tr>
                    </table>
                </form>
            </td>
            </tr>
            <tr>
            <td>
                <p>
                    <?php
                        if (isset($msg) & !empty($msg)) {
                            echo $msg;
                        }
                    ?>
                </p>
            </td>
            <td></td>
            </tr>
            </table>
            <div>
                <br>

            </div>
            <hr />
            <div id="about-us">
                <h1> About Us </h1>
				<!--About us shortened and rephrased from Institute of Applied Poultry Technologies from http://www.iaptwest.org/about-us/ -->
				<p>
                The Institute for Applied Poultry Technologies (IAPT) is a non-profit entity that was established to innovative 
                poultry health technologies to assist in preparation of preventing disease outbreaks, and as well as improve 
                product quality and consumer confidence. An aspect of innovating these technologies is to research the valuable 
                flock related information submitted by producers.
				</p>
            </div>
        </div>
    </div>
</body>
</html>
