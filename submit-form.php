<!DOCTYPE html>
    <?php include 'header.php'; ?>


<?php
	
require_once 'connect.php';
  

    // If the values are posted, insert them into the database.
    if (isset($_POST['producer-enterprise']) && isset($_POST['producer-code-quota'])){
       // $producer_enterprise = $_POST['producer-enterprise'];
        $producer_code_quota = filter_input(INPUT_POST, 'producer-code-quota');
        $producer_enterprise = filter_input(INPUT_POST, 'producer-enterprise');
 	if(!empty($producer_code_quota) && !empty($producer_enterprise)){
        $Enterprisequery = "INSERT INTO `Enterprise` (Ename,Ecode) VALUES ('$producer_enterprise','$producer_code_quota', '$producer_code_quota')";
        $result = mysqli_query($flockCon,$Enterprisequery);
        
    }
    }
    
    
    
    
    ?>

<html lang="en-CA">
<head>
    <?php include 'header.php';?>
    <title>Flock Information Database - Submit Form</title>
    <meta name="description" content="Submit a flock information form to the database for review by IAPT">
    <link href="resources/stylesheet-submit-form.css?version=0" rel="stylesheet" type="text/css"/>
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
            <form name="flock-information" method="post" action="submit-form-backend.php">
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
                            <?php $barn_number = filter_input(INPUT_POST, 'barn-number'); ?>
                        </tr>
                        <tr>
                            <td><label for="species">Species</label></td>
                            <td><input type="text" name="species" maxlength="80"></td>
                            <?php $species = filter_input(INPUT_POST, 'species'); ?>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="category-sex">Category/Sex</label></td>
                            <td><input type="text" name="category-sex" maxlength="80"></td>
                            <td></td>
                            <?php $category_sex = filter_input(INPUT_POST, 'category-sex'); ?>
                        </tr>
                        <tr>
                            <td><label for="age-of-birds">Age of Birds</label></td>
                            <td><input type="text" name="age-of-birds" maxlength="80"></td>
                            <td></td>
                            <?php $age_of_birds = filter_input(INPUT_POST, 'age-of-birds'); ?>
                        </tr>
                        <tr>
                            <td><label for="number-of-birds-placed">Number of Birds Placed</label></td>
                            <td><input type="text" name="number-of-birds-placed" maxlength="80"></td>
                            <td></td>
                            <?php $number_of_birds_placed = filter_input(INPUT_POST, 'number-of-birds-placed'); ?>
                        </tr>
                        <tr>
                            <td><label for="number-of-birds-shipped">Number of Birds Shipped</label></td>
                            <td><input type="text" name="number-of-birds-shipped" maxlength="80"></td>
                            <td></td>
                            <?php $number_of_birds_shipped = filter_input(INPUT_POST, 'number-of-birds-shipped'); ?>
                        </tr>
                        <tr>
                            <td><label for="number-of-birds-placed">Number of Birds Placed</label></td>
                            <td><input type="text" name="number-of-birds-placed" maxlength="80"></td>
                            <td></td>
                            <?php $number_of_birds_placed = filter_input(INPUT_POST, 'number-of-birds-placed'); ?>
                        </tr>
                        <tr>
                            <td><label for="mortality-rate">Mortality Rate</label></td>
                            <td><input type="text" name="mortality-rate" maxlength="80"></td>
                            <td></td>
                            <?php $mortality_rate = filter_input(INPUT_POST, 'mortality-rate'); ?>
                        </tr>
                        <tr>
                            <td><label for="kg-per-bird">Kg/Bird</label></td>
                            <td><input type="text" name="kg-per-bird" maxlength="80"></td>
                            <?php $kg_per_bird = filter_input(INPUT_POST, 'kg-per-bird'); ?>
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
                            <?php $grow_out_density = filter_input(INPUT_POST, 'grow-out-density'); ?>
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
                            <td>
                                <label for="question-1">
                                    Were medications or vaccines administered at the hatchery?
                                </label>
                            </td>
                            <td>
                                <input type="radio" name="question-1" value="yes">
                                <label for="yes">Yes</label>
                            </td>
                            <td>
                                <input type="radio" name="question-1" value="no">
                                <label for="no">No</label>
                            </td>
                        </tr>
                            <tr class="question-information-row question-1-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-1-a">Medication or vaccine name</label></td>
                                        <td><input type="text" name="question-1-a" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-1-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-1-d">Withdrawal period (days)</label></td>
                                        <td><input type="text" name="question-1-d" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-1-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-1-e">Safe marketing date date (if any)</label></td>
                                        <td><input type="date" name="question-1-e" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                        <tr class="question-header">
                            <td>
                                <label for="question-2">
                                    Were vaccines administered on-farm?
                                </label>
                            </td>
                            <td>
                                <input type="radio" name="question-2" value="yes">
                                <label for="yes">Yes</label>
                            </td>
                            <td>
                                <input type="radio" name="question-2" value="no">
                                <label for="no">No</label>
                            </td>
                        </tr>
                            <tr class="question-information-row question-2-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-2-a">Medication or vaccine name</label></td>
                                        <td><input type="text" name="question-2-a" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-2-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-2-b">Dose</label></td>
                                        <td><input type="text" name="question-2-b" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-2-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-2-d">Withdrawal period (days)</label></td>
                                        <td><input type="text" name="question-2-d" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-2-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-2-e">Safe marketing date (if any)</label></td>
                                        <td><input type="date" name="question-2-e" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                        <tr class="question-header">
                            <td>
                                <label for="question-3">
                                    Were any diseases or syndromes diagnosed during the flock?
                                </label>
                            </td>
                            <td>
                                <input type="radio" name="question-3" value="yes">
                                <label for="yes">Yes</label>
                            </td>
                            <td>
                                <input type="radio" name="question-3" value="no">
                                <label for="no">No</label>
                            </td>
                        </tr>
                            <tr class="question-information-row question-3-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-3-g">Disease or Syndrome & flock recovery (initials)</label></td>
                                        <td><input type="text" name="question-3-g" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                      <tr class="question-header">
                            <td>
                                <label for="question-4">
                                    Were any medications administered for treatment?
                                </label>
                            </td>
                            <td>
                                <input type="radio" name="question-4" value="yes">
                                <label for="yes">Yes</label>
                            </td>
                            <td>
                                <input type="radio" name="question-4" value="no">
                                <label for="no">No</label>
                            </td>
                        </tr>
                            <tr class="question-information-row question-4-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-4-a">Medication or vaccine name</label></td>
                                        <td><input type="text" name="question-4-a" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-4-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-4-b">First treatment date</label></td>
                                        <td><input type="date" name="question-4-b" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-4-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-4-c">Last treatment date</label></td>
                                        <td><input type="date" name="question-4-c" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-4-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-4-d">Withdrawal Period (days)</label></td>
                                        <td><input type="text" name="question-4-d" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-4-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-4-e">Safe marketing date (if any)</label></td>
                                        <td><input type="date" name="question-4-e" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-4-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-4-f">Dose</label></td>
                                        <td><input type="text" name="question-4-f" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-4-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-4-g">Disease or Syndrome & flock recovery (initials)</label></td>
                                        <td><input type="text" name="question-4-g" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                        <tr class="question-header">
                            <td>
                                <label for="question-5">
                                    Did the rations prior to shipment in the last 7 days for chickens or in the
                                    last 14 for turkeys have any feed medications with a withdrawal period?
                                </label>
                            </td>
                            <td>
                                <input type="radio" name="question-5" value="yes">
                                <label for="yes">Yes</label>
                            </td>
                            <td>
                                <input type="radio" name="question-5" value="no">
                                <label for="no">No</label>
                            </td>
                        </tr>
                            <tr class="question-information-row question-5-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-5-a">Medication or vaccine name</label></td>
                                        <td><input type="text" name="question-5-a" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-5-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-5-d">Withdrawal period (days)</label></td>
                                        <td><input type="text" name="question-5-d" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-5-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-5-e">Safe marketing date (if any)</label></td>
                                        <td><input type="date" name="question-5-e" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                        <tr class="question-header">
                            <td>
                                <label for="question-6">
                                    Were any extra-label medications used in the feed?
                                </label>
                            </td>
                            <td>
                                <input type="radio" name="question-6" value="yes">
                                <label for="yes">Yes</label>
                            </td>
                            <td>
                                <input type="radio" name="question-6" value="no">
                                <label for="no">No</label>
                            </td>
                        </tr>
                            <tr class="question-information-row question-6-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-6-a">Medication or vaccine name</label></td>
                                        <td><input type="text" name="question-6-a" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-6-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-6-d">Withdrawal period (days)</label></td>
                                        <td><input type="text" name="question-6-d" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-6-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-6-e">Safe marketing date (if any)</label></td>
                                        <td><input type="date" name="question-6-e" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                        <tr class="question-header">
                            <td>
                                <label for="question-7">
                                    Were any Category I medications (e.g., ceftiofur - Excenel<sup>TM</sup>,
                                    enrofloxacin - Baytril<sup>TM</sup>) used on-farm in a <u>preventive</u> manner?
                                </label>
                            </td>
                            <td>
                                <input type="radio" name="question-7" value="yes">
                                <label for="yes">Yes</label>
                            </td>
                            <td>
                                <input type="radio" name="question-7" value="no">
                                <label for="no">No</label>
                            </td>
                        </tr>
                            <tr class="question-information-row question-7-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-7-a">Medication or vaccine name</label></td>
                                        <td><input type="text" name="question-7-a" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-7-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-7-b">First treatment date</label></td>
                                        <td><input type="date" name="question-7-b" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-7-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-7-c">Last treatment date</label></td>
                                        <td><input type="date" name="question-7-c" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-7-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-7-d">Withdrawal Period (days)</label></td>
                                        <td><input type="text" name="question-7-d" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-7-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-7-e">Safe marketing date (if any)</label></td>
                                        <td><input type="date" name="question-7-e" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td></tr>
                            <tr class="question-information-row question-7-information-row"><td>
                                <table>
                                    <tr>
                                        <td><label for="question-7-f">Dose</label></td>
                                        <td><input type="text" name="question-4-f" maxlength="80"></td>
                                    </tr>
                                </table>
                            </td>
                    </table>
                </div>
                <div id="section-b" class="form-section">
                    <h3> Section B </h3>
                    <hr>
                    <table class="outer-table">
                        <tr>
                            <td><label>Planned catching time</label></td>
                            <td>
                                <table class="month-day-table">
                                    <td>
                                        <label for="planned-catching-month">Month</label>
                                    </td>
                                    <td>
                                        <select form="flock-information" name="planned-catching-month">
                                            <option value="jan">Jan</option>
                                            <option value="feb">Feb</option>
                                            <option value="mar">Mar</option>
                                            <option value="apr">Apr</option>
                                            <option value="may">May</option>
                                            <option value="jun">Jun</option>
                                            <option value="jul">Jul</option>
                                            <option value="aug">Aug</option>
                                            <option value="sep">Sep</option>
                                            <option value="oct">Oct</option>
                                            <option value="nov">Nov</option>
                                            <option value="dec">Dec</option>
                                        </select>
                                        <?php $planned_catching_month = filter_input(INPUT_POST, 'planned-catching-month'); ?>
                                    </td>
                                    <td>
                                        <label for="planned-catching-day">Day</label>
                                    </td>
                                    <td>
                                        <input type="number" name="planned-catching-day" min="1" max="31">
                                    </td>
                                    <?php $planned_catching_day = filter_input(INPUT_POST, 'planned-catching-day'); ?>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <td><label for="planned-catching-time">Time</label></td>
                                    <td><input type="time" name="planned-catching-time"></td>
                                    <?php $planned_catching_time = filter_input(INPUT_POST, 'planned-catching-time'); ?>
                                </table>
                            </td>
                        </tr>
                        <tr class="section-b-separator">
                            <td><label>Actual start of catching</label></td>
                            <td></td>
                            <td>
                                <table>
                                    <td><label for="planned-catching-time">Time</label></td>
                                    <td><input type="time" name="planned-catching-time"></td>
                                    <?php $planned_catching_time = filter_input(INPUT_POST, 'planned-catching-time'); ?>
                                </table>
                            </td>
                        </tr>
                        <tr class="section-b-separator">
                            <td><label>Planned processing time</label></td>
                            <td>
                                <table class="month-day-table">
                                    <td>
                                        <label for="planned-processing-month">Month</label>
                                    </td>
                                    <td>
                                        <select form="flock-information" name="planned-processing-month">
                                            <option value="jan">Jan</option>
                                            <option value="feb">Feb</option>
                                            <option value="mar">Mar</option>
                                            <option value="apr">Apr</option>
                                            <option value="may">May</option>
                                            <option value="jun">Jun</option>
                                            <option value="jul">Jul</option>
                                            <option value="aug">Aug</option>
                                            <option value="sep">Sep</option>
                                            <option value="oct">Oct</option>
                                            <option value="nov">Nov</option>
                                            <option value="dec">Dec</option>
                                        </select>
                                        <?php $planned_processing_month = filter_input(INPUT_POST, 'planned-processing-month'); ?>
                                    </td>
                                    <td>
                                        <label for="planned-processing-day">Day</label>
                                    </td>
                                    <td>
                                        <input type="number" name="planned-processing-day" min="1" max="31">
                                        <?php $planned_processing_day = filter_input(INPUT_POST, 'planned-processing-day'); ?>
                                    </td>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <td><label for="planned-processing-time">Time</label></td>
                                    <td><input type="time" name="planned-processing-time"></td>
                                    <?php $planned_processing_time = filter_input(INPUT_POST, 'planned-processing-time'); ?>
                                </table>
                            </td>
                        </tr>
                        <tr class="section-b-separator">
                            <td><label>Time of last access to water</label></td>
                            <td></td>
                            <td>
                                <table>
                                    <td><label for="last-water-access-time">Time</label></td>
                                    <td><input type="time" name="last-water-access-time"></td>
                                    <?php $last_water_access_time = filter_input(INPUT_POST, 'last-water-access-time'); ?>
                                </table>
                            </td>
                        </tr>
                        <tr class="section-b-separator">
                            <td><label>Was the feed supply distrupted in the last 48 hours?</label></td>
                            <td>
                                <table id="feed-distruption-table">
                                    <td>
                                        <input type="radio" name="feed-distruption" value="yes">
                                        <label for="yes">Yes</label>
                                    </td>
                                    <td>
                                        <input type="radio" name="feed-distruption" value="no">
                                        <label for="no">No</label>
                                    </td>
                                    <?php $feed_distruption = filter_input(INPUT_POST, 'feed-distruption'); ?>
                                </table>
                            </td>
                            <td></td>
                        </tr>
                        <tr class="section-b-separator">
                            <td><label>Feeding withdrawal time provided by the processor</label></td>
                            <td></td>
                            <td>
                                <table>
                                    <td><label for="feed-withdrawal-time">Time</label></td>
                                    <td><input type="time" name="feed-withdrawal-time"></td>
                                    <?php $feed_withdrawal_time = filter_input(INPUT_POST, 'feed-withdrawal-time'); ?>
                                </table>
                            </td>
                        </tr>
                        <tr class="section-b-separator">
                            <td><label>Time feed was no longer accessible</label></td>
                            <td>
                                <table class="month-day-table">
                                    <td>
                                        <label for="food-no-access-month">Month</label>
                                    </td>
                                    <td>
                                        <select form="flock-information" name="food-no-access-month">
                                            <option value="jan">Jan</option>
                                            <option value="feb">Feb</option>
                                            <option value="mar">Mar</option>
                                            <option value="apr">Apr</option>
                                            <option value="may">May</option>
                                            <option value="jun">Jun</option>
                                            <option value="jul">Jul</option>
                                            <option value="aug">Aug</option>
                                            <option value="sep">Sep</option>
                                            <option value="oct">Oct</option>
                                            <option value="nov">Nov</option>
                                            <option value="dec">Dec</option>
                                        </select>
                                        <?php $food_no_access_month = filter_input(INPUT_POST, 'food-no-access-month'); ?>
                                    </td>
                                    <td>
                                        <label for="food-no-access-day">Day</label>
                                    </td>
                                    <td>
                                        <input type="number" name="food-no-access-day" min="1" max="31">
                                    </td>
                                    <?php $food_no_access_day = filter_input(INPUT_POST, 'food-no-access-day'); ?>
                                </table>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <label for="floor-1-time">Floor #1</label>
                                <input type="time" class="floor-input" name="floor-1-time">
                            </td>
                            <td></td>
                            <?php $floor_1_time = filter_input(INPUT_POST, 'floor-1-time'); ?>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <label for="floor-2-time">Floor #2</label>
                                <input type="time" class="floor-input" name="floor-2-time">
                            </td>
                            <td></td>
                            <?php $floor_2_time = filter_input(INPUT_POST, 'floor-2-time'); ?>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <label for="floor-3-time">Floor #3</label>
                                <input type="time" class="floor-input" name="floor-3-time">
                            </td>
                            <td></td>
                            <?php $floor_3_time = filter_input(INPUT_POST, 'floor-3-time'); ?>
                        </tr>
                    </table>
                </div>
                <div id="additional-comments" class="form-section">
                    <h3> Additional Comments </h3>
                    <hr>
                    <p>
                        Provide any additional comments on flock condition during the brooding
                        /grow-out period and/or the catching process below if desired.
                    </p>
                    <br>
                    <textarea name="additional-comments" form ="flock-information"></textarea>
                    <br>
                    <p>
                        I confirm that, to the best of my knowledge, the information contained 
                        on this flock information reporting form is accurate and complete and 
                        that any diseases that were diagnosed in the flock as a result of 
                        laboratory tests and/or readily available observable clinical signs have 
                        been identified and reported on this form.
                    </p>
                    <input type="submit" value="Confirm and Submit">
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


