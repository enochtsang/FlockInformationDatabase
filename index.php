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
            <td><form method="post" action="index.php">
                <table id="inner-register">
                    <th colspan="2"><h3>New users register here.</h3></th>
                    <tr>
                        <td><b>Username</b></td>
                        <td><input type="text" name="username">
                    </tr>
                    <tr>
                        <td><b>Password</b></td>
                        <td><input name="password" type="password"></input></td>
                    </tr> <br/>
                    <tr>
                        <td><b>User Type</b></td>
                        <td><input type="text" name="user_type">
                    </tr>
                    <tr>
                        <td><b>Email</b></td>
                        <td><input type="text" name="email">
                    </tr>
                    <tr>
                        <td><td><input type="submit" value="Register"/>
                    </tr>
                </table>
            </form></td>

            <td><form method="post" action="redirectPostLogin.php" >
                <table id="inner-login">
                    <th colspan="2"><h3>Existing users login here.</h3></th>
                    <tr>
                        <td><b>Username</b></td>
                        <td><input type="text" name="username">
                    </tr>
                    <tr>
                        <td><b>Password</b></td>
                        <td><input name="password" type="password"></input></td>
                    </tr> <br/>
                    <tr>
                        <td><td><input type="submit" value="Login"/>
                    </tr>
                </table>
            </form></td>
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
