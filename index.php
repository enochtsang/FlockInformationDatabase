<!DOCTYPE html>
<html lang="en-CA">
<head>
    <?php include 'header.php';?>
    <title>Flock Information Database</title>
    <meta name="description" content="IAPT's flock information database">
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
                <form id="register-form" method="post" action="index.php">
                    <table id="inner-register">
                        <th colspan="2"><h3>New users register here.</h3></th>
                        <tr>
                            <td><label for="register_username"><b>Username<b></label></td>
                            <td><input type="text" name="register_username"></td>
                        </tr>
                        <tr>
                            <td><label for="register_password"><b>Password</label></b></td>
                            <td><input name="register_password" type="password"></input></td>
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
                            <td><label for="login_username"><b>Username</b></label></td>
                            <td><input type="text" name="login_username"></td>
                        </tr>
                        <tr>
                            <td><label for="login_password"><b>Password</b></label></td>
                            <td><input name="password" type="login_password"></input></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="Login"/></td>
                        </tr>
                    </table>
                </form>
            </td>
            </tr>
            </table>

            <div id="about-us">
                <h1> About Us </h1>
                <p>Institute of Applied Poultry Technologies! INFO HERE</p>
            </div>
        </div>
    </div>
</body>
</html>
