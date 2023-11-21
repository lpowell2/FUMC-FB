<?php
$times = [
    '12:00 AM', '1:00 AM', '2:00 AM', '3:00 AM', '4:00 AM', '5:00 AM',
    '6:00 AM', '7:00 AM', '8:00 AM', '9:00 AM', '10:00 AM', '11:00 AM',
    '12:00 PM', '1:00 PM', '2:00 PM', '3:00 PM', '4:00 PM', '5:00 PM',
    '6:00 PM', '7:00 PM', '8:00 PM', '9:00 PM', '10:00 PM', '11:00 PM',
    '11:59 PM'
];
$values = [
    "00:00", "01:00", "02:00", "03:00", "04:00", "05:00", 
    "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", 
    "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", 
    "18:00", "19:00", "20:00", "21:00", "22:00", "23:00",
    "23:59"
];

function buildSelect($name, $disabled=false, $selected=null) {
    global $times;
    global $values;
    if ($disabled) {
        $select = '
            <select id="' . $name . '" name="' . $name . '" disabled>';
    } else {
        $select = '
            <select id="' . $name . '" name="' . $name . '">';
    }
    if (!$selected) {
        $select .= '<option disabled selected value>Select a time</option>';
    }
    $n = count($times);
    for ($i = 0; $i < $n; $i++) {
        $value = $values[$i];
        if ($selected == $value) {
            $select .= '
                <option value="' . $values[$i] . '" selected>' . $times[$i] . '</option>';
        } else {
            $select .= '
                <option value="' . $values[$i] . '">' . $times[$i] . '</option>';
        }
    }
    $select .= '</select>';
    return $select;
}
?>

<h1>Add a Food Bank</h1>
<main class="general">
    <form class="addfb-form" method="post">
        <h2>Food Bank Information Form</h2>
        <p>Please fill out each section of the following form to add a new food bank.</p>
        <p>An asterisk (<label><em>*</em></label>) indicates a required field.</p>
        <fieldset>
            <legend>Food Bank Information</legend>
            <p>The following information will help us identify you within our system.</p>
            <label for="fb-name"><em>* </em>Food Bank Name</label>
            <input type="text" id="fb-name" name="fb-name" required placeholder="Enter the food bank name">

            <label for="phone"><em>* </em>Phone Number</label>
            <input type="tel" id="phone" name="phone" pattern="\([0-9]{3}\) [0-9]{3}-[0-9]{4}" required placeholder="Ex. (555) 555-5555">

            <label for="website"><em>* </em>Website Link</label>
            <input type="text" id="website" name="website" required placeholder="Enter the food bank website link">

            <label for="address"><em>* </em>Address</label>
            <input type="text" id="address" name="address" required placeholder="Enter the food bank address">

            <label for="address2">Address 2</label>
            <input type="text" id="address2" name="address2" placeholder="Enter secondary or additional address">

            <label for="city"><em>* </em>City</label>
            <input type="text" id="city" name="city" required placeholder="Enter the city">

            <label for="county"><em>* </em>County</label>
            <input type="text" id="county" name="county" required placeholder="Enter the county">

            <label for="state"><em>* </em>State</label>
            <select id="state" name="state" required>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA" selected>Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>

            <label for="zip"><em>* </em>Zip Code</label>
            <input type="text" id="zip" name="zip" pattern="[0-9]{5}" title="5-digit zip code" required placeholder="Enter your 5-digit zip code">


            <label for="opnotes">Operation Notes</label>
            <textarea wrap="soft" id="opnotes" name="opnotes" placeholder="Input operation notes"></textarea>


            <label for="adtl-services">Additional Services Offered</label>
            <input type="text" id="adtl-services" name="adtl-services">

         
            <!-- Show list of Tags-->
            <label for="tag"><em>* </em>Tags</label>
                    <?php
                        $con=connect();

                        $resulting = mysqli_query($con, "SELECT tagID, tagText FROM dbTags");
                        
                        while ($row = mysqli_fetch_array($resulting)) {
                            echo "<input name='tag[]' type='checkbox' value='" .$row['tagID']."'/> ".$row['tagText'];
                        }
                        //after submission, check if checkboxes checked, if so, add to dbFBTags
                        //post only gets all checked 
                        if(isset($_POST['tag'])){
                            foreach ($_POST['tag'] as $selected) {
                                // echo "<br>".$selected. "was checked.<br>";
                                //TODO: Error checking to prevent repeat tags from being added
                                mysqli_query($con, "INSERT INTO dbFBTags(id, userID) VALUES ('$selected','$id')");
                            }
                        }
                    ?>
                     <a class="button" target="_blank" href="registerNewTag.php">Add New Tag</a>


        </fieldset>

    
        <fieldset>
            <legend>Food Bank Schedule</legend>

            <br>

            <p>Please enter the days, times, and frequency of the food bank.</p>

            
            <label><em>* </em>Availability</label>
            <p>Enter the days and times the food bank is available each week.</p>

            <div class="availability-container">

                <div class="availability-day">
                    <p class="availability-day-header">
                        <input id="available-sundays" name="available-sundays" type="checkbox" >
                        <label for="available-sundays">Sundays</label>
                    </p>
                    <p><em class="hidden">* </em>From</p>
                    <!-- <input type="text" id="sundays-start" name="sundays-start" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 8:00AM" disabled> -->
                    <?php echo buildSelect('sundays-start', true) ?>
                    <p><em class="hidden">* </em>to</p>
                    <?php echo buildSelect('sundays-end', true) ?>
                    <!-- <input type="text" id="sundays-end" name="sundays-end" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 4:00PM" disabled> -->
                    <p id="sundays-range-error" class="hidden error">Start time must come before end time.</p>
                </div>


                <div class="availability-day">
                    <p class="availability-day-header">
                        <input id="available-mondays" name="available-mondays" type="checkbox" >
                        <label for="available-mondays">Mondays</label>
                    </p>
                    <p><em class="hidden">* </em>From</p>
                    <?php echo buildSelect('mondays-start', true) ?>
                    <!-- <input type="text" id="mondays-start" name="mondays-start" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 8:00AM" disabled> -->
                    <p><em class="hidden">* </em>to</p>
                    <?php echo buildSelect('mondays-end', true) ?>
                    <!-- <input type="text" id="mondays-end" name="mondays-end" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 4:00PM" disabled> -->
                    <p id="mondays-range-error" class="hidden error">Start time must come before end time.</p>
                </div>


                <div class="availability-day">
                    <p class="availability-day-header">
                        <input id="available-tuesdays" name="available-tuesdays" type="checkbox" >
                        <label for="available-tuesdays">Tuesdays</label>
                    </p>
                    <p><em class="hidden">* </em>From</p>
                    <?php echo buildSelect('tuesdays-start', true) ?>
                    <!-- <input type="text" id="tuesdays-start" name="tuesdays-start" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 8:00AM" disabled> -->
                    <p><em class="hidden">* </em>to</p>
                    <?php echo buildSelect('tuesdays-end', true) ?>
                    <!-- <input type="text" id="tuesdays-end" name="tuesdays-end" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 4:00PM" disabled> -->
                    <p id="tuesdays-range-error" class="hidden error">Start time must come before end time.</p>
                </div>


                <div class="availability-day">
                    <p class="availability-day-header">
                        <input id="available-wednesdays" name="available-wednesdays" type="checkbox" >
                        <label for="available-wednesdays">Wednesdays</label>
                    </p>
                    <p><em class="hidden">* </em>From</p>
                    <?php echo buildSelect('wednesdays-start', true) ?>
                    <!-- <input type="text" id="wednesdays-start" name="wednesdays-start" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 8:00AM" disabled> -->
                    <p><em class="hidden">* </em>to</p>
                    <?php echo buildSelect('wednesdays-end', true) ?>
                    <!-- <input type="text" id="wednesdays-end" name="wednesdays-end" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 4:00PM" disabled> -->
                    <p id="wednesdays-range-error" class="hidden error">Start time must come before end time.</p>
                </div>


                <div class="availability-day">
                    <p class="availability-day-header">
                        <input id="available-thursdays" name="available-thursdays" type="checkbox" >
                        <label for="available-thursdays">Thursdays</label>
                    </p>
                    <p>From</p>
                    <?php echo buildSelect('thursdays-start', true) ?>
                    <!-- <input type="text" id="thursdays-start" name="thursdays-start" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 8:00AM" disabled> -->
                    <p>to</p>
                    <?php echo buildSelect('thursdays-end', true) ?>
                    <!-- <input type="text" id="thursdays-end" name="thursdays-end" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 4:00PM" disabled> -->
                    <p id="thursdays-range-error" class="hidden error">Start time must come before end time.</p>
                </div>


                <div class="availability-day">
                    <p class="availability-day-header">
                        <input id="available-fridays" name="available-fridays" type="checkbox" >
                        <label for="available-fridays">Fridays</label>
                    </p>
                    <p><em class="hidden">* </em>From</p>
                    <?php echo buildSelect('fridays-start', true) ?>
                    <!-- <input type="text" id="fridays-start" name="fridays-start" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 8:00AM" disabled> -->
                    <p><em class="hidden">* </em>to</p>
                    <?php echo buildSelect('fridays-end', true) ?>
                    <!-- <input type="text" id="fridays-end" name="fridays-end" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 4:00PM" disabled> -->
                    <p id="fridays-range-error" class="hidden error">Start time must come before end time.</p>
                </div>


                <div class="availability-day">
                    <p class="availability-day-header">
                        <input id="available-saturdays" name="available-saturdays" type="checkbox" >
                        <label for="available-saturdays">Saturdays</label>
                    </p>
                    <p><em class="hidden">* </em>From</p>
                    <?php echo buildSelect('saturdays-start', true) ?>
                    <!-- <input type="text" id="saturdays-start" name="saturdays-start" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 8:00AM" disabled> -->
                    <p><em class="hidden">* </em>to</p>
                    <?php echo buildSelect('saturdays-end', true) ?>
                    <!-- <input type="text" id="saturdays-end" name="saturdays-end" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 4:00PM" disabled> -->
                    <p id="saturdays-range-error" class="hidden error">Start time must come before end time.</p>
                </div>

                <label for="frequency"><em>*</em>Frequency</label>
                <input type="text" id="frequency" name="frequency">
            </div>

        </fieldset>
        

        <p>By pressing Submit below, the food bank and assciated information you have input will be added to the system.</p>
        <input type="submit" name="addfb-form" value="Submit">
    </form>
        <a class="button cancel" href="index.php" style="margin-top: .5rem">Cancel</a>
    
</main>