<!DOCTYPE html>
<html lang="en-CA">
<head>
    <?php include 'header.php';?>
    <title>Flock Information Database - Submit Form</title>
    <meta name="description" content="Submit a flock information form to the database for review by IAPT">
</head>
<body>
    <div class="wrapper">
        <div id="logo-bar">
            <?php include 'logo-include.php'; ?>
            <h1> Flock Information Reporting Form </h1>
        </div>        
        <div class="center-content">
            <div class="content">
                <div class="form-container">
                <form name="general-flock-information" method="post" action="CHANGE_THIS.php">
                    <div class="general">
                        <ul>                    
                            <li>
                                <label for="producer-enterprise">Producer / Enterprise</label>
                                <input type="text" name="producer-enterprise" maxlength="80">
                            </li>
                            <li>
                                <label for="producer-code-quota">Producer Code / Quota</label>
                                <input type="text" name="producer-code-quota" maxlength="80">
                            </li>
                            <li>
                                <label for="barn-number">Barn #</label>
                                <input type="text" name="barn-number" maxlength="80">
                            </li>
                            <li>
                                <label for="species">Species</label>
                                <input type="text" name="species" maxlength="80">
                            </li>
                            <li>
                                <label for="category-sex">Category/Sex</label>
                                <input type="text" name="category-sex" maxlength="80">
                            </li>
                            <li>
                                <label for="age-of-birds">Age of Birds</label>
                                <input type="text" name="age-of-birds" maxlength="80">
                            </li>
                        </ul>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
