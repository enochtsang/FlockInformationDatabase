<!DOCTYPE html>
<html lang="en-CA">
<head>
    <?php include 'header.php';?>
    <title>Flock Information Database</title>
    <meta name="description" content="A tool for the Institute of Applied Poultry Technology (IAPT) to enter and store flock information.">
</head>
<body>
    <div class="wrapper">
        <div class="title">
            <h1>Flock Information Database</h1>
        </div>
    <?php include 'navigation-bar.php'; ?>
      <h1> Home </h1>
    
    </div>
    
    <div class = "Login">
	    <center>
			<h3>User Login</h3>
			<hr />
			<form method="post" action="userLogin/member.php">
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
    
    <div class="content">
        <div class="summary">
            <br>
            <p id="About_Us">
                Here is the home page!
            </p>
            <img src="resources/chicken-cat.jpg"
             alt="Chicken Cat" />
        </div>
    </div>
</body>
</html>

