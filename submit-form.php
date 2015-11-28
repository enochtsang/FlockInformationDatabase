<!DOCTYPE html>
<html lang="en-CA">
<head>
    <?php include 'header.php';?>
    <title>Flock Information Database - Submit Form</title>
    <meta name="description" content="Submit a flock information form to the database for review by IAPT">
    <script src="resources/scripts/submit-form.js"></script>
</head>
<body>
    <div id="logo-bar">
        <?php include 'logo-include.php'; ?>
        <h1> Flock Information Reporting Form </h1>
    </div>        
    <div class="content">
        <div class="form-container">
        <table id="interactive-table">
        <td>
            <input type="image" class="arrow" id="prev-arrow" src="resources/next.png" alt="next"/>
        </td>
        <td id="form-column">
            <form name="flock-information" method="post" action="CHANGE_THIS.php">
                 <div id="push" class="form-section">
                    <h3> General Flock Information </h3>
                    <hr>
                    <table>
                        <tr>
                            <td class="form-col-1"><label for="producer-enterprise">Producer / Enterprise</label></td>
                            <td class="form-col-2"><input type="text" name="producer-enterprise" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="producer-code-quota">Producer Code / Quota</label></td>
                            <td><input type="text" name="producer-code-quota" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="barn-number">Barn #</label></td>
                            <td><input type="text" name="barn-number" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="species">Species</label></td>
                            <td><input type="text" name="species" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="category-sex">Category/Sex</label></td>
                            <td><input type="text" name="category-sex" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="age-of-birds">Age of Birds</label></td>
                            <td><input type="text" name="age-of-birds" maxlength="80"></td>
                        </tr>
                    </table>
                </div> 
                <div id="general" class="form-section">
                    <h3> General Flock Information </h3>
                    <hr>
                    <table>
                        <tr>
                            <td class="form-col-1"><label for="producer-enterprise">Producer / Enterprise</label></td>
                            <td class="form-col-2"><input type="text" name="producer-enterprise" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="producer-code-quota">Producer Code / Quota</label></td>
                            <td><input type="text" name="producer-code-quota" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="barn-number">Barn #</label></td>
                            <td><input type="text" name="barn-number" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="species">Species</label></td>
                            <td><input type="text" name="species" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="category-sex">Category/Sex</label></td>
                            <td><input type="text" name="category-sex" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="age-of-birds">Age of Birds</label></td>
                            <td><input type="text" name="age-of-birds" maxlength="80"></td>
                        </tr>
                    </table>
                </div> 
                <div id="section-a" class="form-section">
                    <h3> Section A </h3>
                    <hr>
                    <table>
                        <tr>
                            <td class="form-col-1"><label for="producer-enterprise">Producer / Enterprise</label></td>
                            <td class="form-col-2"><input type="text" name="producer-enterprise" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="producer-code-quota">Producer Code / Quota</label></td>
                            <td><input type="text" name="producer-code-quota" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="barn-number">Barn #</label></td>
                            <td><input type="text" name="barn-number" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="species">Species</label></td>
                            <td><input type="text" name="species" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="category-sex">Category/Sex</label></td>
                            <td><input type="text" name="category-sex" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="age-of-birds">Age of Birds</label></td>
                            <td><input type="text" name="age-of-birds" maxlength="80"></td>
                        </tr>
                    </table>
                </div> 
                <div id="section-b" class="form-section">
                    <h3> Section B </h3>
                    <hr>
                    <table>
                        <tr>
                            <td class="form-col-1"><label for="producer-enterprise">Producer / Enterprise</label></td>
                            <td class="form-col-2"><input type="text" name="producer-enterprise" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="producer-code-quota">Producer Code / Quota</label></td>
                            <td><input type="text" name="producer-code-quota" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="barn-number">Barn #</label></td>
                            <td><input type="text" name="barn-number" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="species">Species</label></td>
                            <td><input type="text" name="species" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="category-sex">Category/Sex</label></td>
                            <td><input type="text" name="category-sex" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="age-of-birds">Age of Birds</label></td>
                            <td><input type="text" name="age-of-birds" maxlength="80"></td>
                        </tr>
                    </table>
                </div> 
                <div id="additional-comments" class="form-section">
                    <h3> Additional Comments </h3>
                    <hr>
                    <table>
                        <tr>
                            <td class="form-col-1"><label for="producer-enterprise">Producer / Enterprise</label></td>
                            <td class="form-col-2"><input type="text" name="producer-enterprise" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="producer-code-quota">Producer Code / Quota</label></td>
                            <td><input type="text" name="producer-code-quota" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="barn-number">Barn #</label></td>
                            <td><input type="text" name="barn-number" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="species">Species</label></td>
                            <td><input type="text" name="species" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="category-sex">Category/Sex</label></td>
                            <td><input type="text" name="category-sex" maxlength="80"></td>
                        </tr>
                        <tr>
                            <td><label for="age-of-birds">Age of Birds</label></td>
                            <td><input type="text" name="age-of-birds" maxlength="80"></td>
                        </tr>
                    </table>
                </div> 
            </form>
        </td>
        <td>
            <input type="image" class="arrow" id="next-arrow" src="resources/next.png" alt="next"/>
        </td>
        </table>
        </div>
    </div>
</body>
</html>
