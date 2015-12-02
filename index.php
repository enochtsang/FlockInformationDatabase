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
                <form id="register-form" name="register" method="post" action="CHANGE_THIS.php" onSubmit="return validateRegister()">
                    <table id="inner-register" class="login-table">
                        <tr>
                            <td><label for="register_username">Username</label></td>
                            <td><input type="text" name="register_username"></td>
                        </tr>
                        <tr>
                            <td><label for="register_password">Password</label></td>
                            <td><input name="register_password" type="password"></input></td>
                        </tr>
                        <tr>
                            <td><label for="user_type">User Type</label></td>
                            <td><input type="text" name="user_type"></td>
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
                <form id="login-form" method="post" action="redirectPostLogin.php">
                    <table id="inner-login" class="login-table">
                        <tr>
                            <td><label for="login_username">Username</label></td>
                            <td><input type="text" name="login_username"></td>
                        </tr>
                        <tr>
                            <td><label for="login_password">Password</label></td>
                            <td><input name="login_password" type="password"></input></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Login"/></td>
                        </tr>
                    </table>
                </form>
            </td>
            </tr>
            </table>
            <hr />
            <div id="about-us">
                <h1> About Us </h1>
                <p>Institute of Applied Poultry Technologies! INFO HERE</p>
            </div>
        </div>
    </div>
</body>
</html>
