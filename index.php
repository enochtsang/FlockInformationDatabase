<!DOCTYPE html>
<html lang="en-CA">
    <head>
        <script>
            function goto_register() {
                location.href = "register.php";
            }
        </script>
        <?php include 'header.php'; ?>
        <title>Flock Information Database</title>
        <meta name="description" content="IAPT's flock information database">
    </head>
    <body>
        <div class="wrapper">
            <div id="logo-bar">
                <?php include 'logo-include.php'; ?>
                <h1> Flock Information Database Home </h1>
            </div>        
            <div class="content">

                <center>
                    <h3>User Login</h3>
                    <hr />
                    <form method="post" action="redirectPostLogin.php">
                        <table border="0">
                            <tr>
                                <td><b>Username</b></td>
                                <td><input type="text" name="username">

                            </tr>
                            <tr>
                                <td><b>Password</b></td>
                                <td><input name="password" type="password"></input></td>
                            </tr>
                            <br />
                            <tr>
                                <td><input type="submit" value="Submit" />

                                <td><input type="button" value="Register" onclick="gotoregister()">

                            </tr>
                        </table>
                    </form>
                </center>

            </div>
        </div>
    </body>
</html>
