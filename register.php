<?php
require_once 'connect.php';


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
            function gotologin() {
                location.href = "index.php";
            }
        </script>
    </head>
    <body bgcolor="whitesmoke">
    <center>
        <h3>Register</h3>
        <hr />
        <form method="post" action="register.php" >
            <table border="0" >
                <tr>
                    <td>
                        <b>Username</b>
                    </td>
                    <td><input type="text" name="username">
                </tr>
                <tr>
                    <td><b>Password</b></td>
                    <td><input name="password" type="password"></input></td>
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
                <tr>
                    <td><input type="submit" value="Register"/>
                    <td><input type="button" value="Login" onclick="gotologin()">
                </tr>
            </table>
        </form>
        <br>
        <br>
        <?php
        if (isset($msg) & !empty($msg)) {
            echo $msg;
        }
        ?>
    </center>
</body>
</html>