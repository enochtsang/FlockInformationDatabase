<!DOCTYPE html>
<html lang="en-CA">
<head>
    <?php include 'header.php';?>
    <title>Flock Information Database - Submit Form</title>
    <meta name="description" content="Submit a flock information form to the database for review by IAPT">
</head>
<body>
    <div id="logo-bar">
        <?php include 'logo-include.php'; ?>
        <h1> Flock Information Reporting Form </h1>
    </div>        
    <div class="content">
            <div class="form-container">
            <form name="general-flock-information" method="post" action="CHANGE_THIS.php">
                <div class="general">
                    <table>
                        <tr>
                            <td width="30%"><label for="producer-enterprise">Producer / Enterprise</label></td>
                            <td width="70%"><input type="text" name="producer-enterprise" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="producer-code-quota">Producer Code / Quota</label></td>
                            <td><input type="text" name="producer-code-quota" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="barn-number">Barn #</label></td>
                            <td><input type="text" name="barn-number" maxdength="80"></tr>
                        </tr>
                        <tr>
                            <td><label for="species">Species</label></td>
                            <td><input type="text" name="species" maxldngth="80"></tr>
                        </tr>
                        <tr>
                            <td><label for="category-sex">Category/Sex</label></td>
                            <td><input type="text" name="category-sex" maxlengthd"80"></tr>
                        </tr>
                        <tr>
                            <td><label for="age-of-birds">Age of Birds</label></td>
                            <td><input type="text" name="age-of-birds" maxlengthd"80"></tr>
                        </tr>
                    </table>
                </div>  
            </form>
            </div>
    </div>
</body>
</html>
