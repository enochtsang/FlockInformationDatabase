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
                <div id="general" class="form-section">
                    <h3> General Flock Information </h3>
                    <hr>
                    <table>
                        <tr>
                            <td><label for="producer-enterprise">Producer / Enterprise</label></td>
                            <td><input type="text" name="producer-enterprise" maxlength="80"></td>
                            <td></td>    
                        </tr>
                        <tr>
                            <td><label for="producer-code-quota">Producer Code / Quota</label></td>
                            <td><input type="text" name="producer-code-quota" maxlength="80"></td>
                            <td></td>    
                        </tr>
                        <tr>
                            <td><label for="barn-number">Barn #</label></td>
                            <td><input type="text" name="barn-number" maxlength="80"></td>
                            <td></td>    
                        </tr>
                        <tr>
                            <td><label for="species">Species</label></td>
                            <td><input type="text" name="species" maxlength="80"></td>
                            <td></td>    
                        </tr>
                        <tr>
                            <td><label for="category-sex">Category/Sex</label></td>
                            <td><input type="text" name="category-sex" maxlength="80"></td>
                            <td></td>    
                        </tr>
                        <tr>
                            <td><label for="age-of-birds">Age of Birds</label></td>
                            <td><input type="text" name="age-of-birds" maxlength="80"></td>
                            <td></td>    
                        </tr>
                        <tr>
                            <td><label for="number-of-birds-placed">Number of Birds Placed</label></td>
                            <td><input type="text" name="number-of-birds-placed" maxlength="80"></td>
                            <td></td>    
                        </tr>
                        <tr>
                            <td><label for="number-of-birds-shipped">Number of Birds Shipped</label></td>
                            <td><input type="text" name="number-of-birds-shipped" maxlength="80"></td>
                            <td></td>    
                        </tr>
                        <tr>
                            <td><label for="number-of-birds-placed">Number of Birds Placed</label></td>
                            <td><input type="text" name="number-of-birds-placed" maxlength="80"></td>
                            <td></td>    
                        </tr>
                        <tr>
                            <td><label for="mortality-rate">Mortality Rate</label></td>
                            <td><input type="text" name="mortality-rate" maxlength="80"></td>
                            <td></td>    
                        </tr>
                        <tr>
                            <td><label for="kg-per-bird">Kg/Bird</label></td>
                            <td><input type="text" name="kg-per-bird" maxlength="80"></td>
                            <td></td>    
                        </tr>
                        <tr>
                            <td><label for="certification">CFC OFFSAP/TFC OFFSP Certifcation</label></td>
                            <td><input type="radio" class="left-most-radio" name="certification" value="yes">
                                <label for="yes">Yes</label>
                                <input type="radio" class="not-left-most-radio" name="certification" value="no">
                                <label for="no">No</label></td>
                            <td></td>    
                        </tr>
                        <tr>
                            <td><label for="grow-out-density">Grow-out Density</label></td>
                            <td><input type="text" name="grow-out-density" maxlength="80"></td>
                            <td></td>    
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="radio" class="left-most-radio" name="grow-out-density-units" value="kg-per-m2">
                                <label for="kg-per-m2">kg/m<sup>2</sup></label>
                                <input type="radio" class="not-left-most-radio" name="grow-out-density-units" value="lb-per-ft2">
                                <label for="lb-per-ft2">lb/ft<sup>2</sup></label>
                                <input type="radio" class="not-left-most-radio" name="grow-out-density-units" value="kg-per-ft2">
                                <label for="kg-per-ft2">kg/ft<sup>2</sup></label></td>
                            <td></td>    
                        </tr>
                    </table>
                </div> 
                <div id="section-a" class="form-section">
                    <h3> Section A </h3>
                    <hr>
                    <table>
                        <tr>
                            <td><label for="question-1">
                                Were medications or vaccines administered at the hatchery? 
                            </label></td>
                            <td><input type="radio" name="question-1" value="yes">
                            <label for="yes">Yes</label>
                            </td>
                            <td><input type="radio" name="question-1" value="no">
                            <label for="no">No</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="question-2">
                                Were vaccines administered on-farm?
                            </label></td>
                            <td><input type="radio" name="question-2" value="yes">
                            <label for="yes">Yes</label>
                            </td>
                            <td><input type="radio" name="question-2" value="no">
                            <label for="no">No</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="question-3">
                                Were any diseases or syndromes diagnosed during the flock?
                            </label></td>
                            <td><input type="radio" name="question-3" value="yes">
                            <label for="yes">Yes</label>
                            </td>
                            <td><input type="radio" name="question-3" value="no">
                            <label for="no">No</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="question-4">
                                Were any medications administered for treatment?
                            </label></td>
                            <td><input type="radio" name="question-4" value="yes">
                            <label for="yes">Yes</label>
                            </td>
                            <td><input type="radio" name="question-4" value="no">
                            <label for="no">No</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="question-5">
                                Did the rations prior to shipment in the last 7 days for chickens or in the 
                                last 14 for turkeys have any feed medications with a withdrawal period?
                            </label></td>
                            <td><input type="radio" name="question-5" value="yes">
                            <label for="yes">Yes</label>
                            </td>
                            <td><input type="radio" name="question-5" value="no">
                            <label for="no">No</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="question-6">
                                Were any extra-label medications used in the feed?
                            </label></td>
                            <td><input type="radio" name="question-6" value="yes">
                            <label for="yes">Yes</label>
                            </td>
                            <td><input type="radio" name="question-6" value="no">
                            <label for="no">No</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="question-7">
                                Were any Category I medications (e.g., ceftiofur - Excenel<sup>TM</sup>, 
                                enrofloxacin - Baytril<sup>TM</sup>) used on-farm in a <u>preventive</u> manner?
                            </label></td>
                            <td><input type="radio" name="question-6" value="yes">
                            <label for="yes">Yes</label>
                            </td>
                            <td><input type="radio" name="question-6" value="no">
                            <label for="no">No</label>                           
                        </tr>
                    </table>
                </div> 
                <div id="section-b" class="form-section">
                    <h3> Section B </h3>
                    <hr>
                    <table>
                        <tr>
                            <td><label for="producer-enterprise">Producer / Enterprise</label></td>
                            <td><input type="text" name="producer-enterprise" maxlength="80"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="producer-code-quota">Producer Code / Quota</label></td>
                            <td><input type="text" name="producer-code-quota" maxlength="80"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="barn-number">Barn #</label></td>
                            <td><input type="text" name="barn-number" maxlength="80"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="species">Species</label></td>
                            <td><input type="text" name="species" maxlength="80"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="category-sex">Category/Sex</label></td>
                            <td><input type="text" name="category-sex" maxlength="80"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="age-of-birds">Age of Birds</label></td>
                            <td><input type="text" name="age-of-birds" maxlength="80"></td>
                            <td></td>
                        </tr>
                    </table>
                </div> 
                <div id="additional-comments" class="form-section">
                    <h3> Additional Comments </h3>
                    <hr>
                    <table>
                        <tr>
                            <td><label for="producer-enterprise">Producer / Enterprise</label></td>
                            <td><input type="text" name="producer-enterprise" maxlength="80"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="producer-code-quota">Producer Code / Quota</label></td>
                            <td><input type="text" name="producer-code-quota" maxlength="80"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="barn-number">Barn #</label></td>
                            <td><input type="text" name="barn-number" maxlength="80"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="species">Species</label></td>
                            <td><input type="text" name="species" maxlength="80"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="category-sex">Category/Sex</label></td>
                            <td><input type="text" name="category-sex" maxlength="80"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="age-of-birds">Age of Birds</label></td>
                            <td><input type="text" name="age-of-birds" maxlength="80"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="submit">Click Me!</button></td>
                            <td></td>
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
