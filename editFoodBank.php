<!-- Add check for logged in and privleges -->
<?php
include_once('database/dbPersons.php');
require_once('include/output.php');
session_cache_expire(30);
session_start();

ini_set("display_errors", 1);
error_reporting(E_ALL);

$loggedIn = false;
$accessLevel = 0;
$userID = null;
if (isset($_SESSION['_id'])) {
    $loggedIn = true;
    // 0 = not logged in, 1 = standard user, 2 = manager (Admin), 3 super admin (TBI)
    $accessLevel = $_SESSION['access_level'];
    $userID = $_SESSION['_id'];
}
// Require admin privileges
if ($accessLevel < 2) {
    header('Location: login.php');
    echo '<div class="error-toast"><p> Improper access level </p> </div>';
    die();
}

$foodbank = NULL;
// This is a placeholder I used a person id from my own database for testing purposes
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $foodbank = retrieve_person($id);
    if ($foodbank == false) {
        echo '<div class = "error-toast"><p>Incorrect food bank given</p></div>';
    }
} else {
    //this will be changed to error checking
    echo '<div class= "error-toast"><p> No food bank given </p> </div>';
}



?>
<!DOCTYPE html>
<html>

<head>
    <?php require_once('universal.inc') ?>
    <title>FUMC FB VMS | Edit Food Bank</title>
</head>

<body>
    <?php require_once('header.php') ?>
    <h1>Edit a Food Bank</h1>
    <?php if ($foodbank) : ?>
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

        function buildSelect($name, $disabled = false, $selected = null)
        {
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

        <main class="general">
            <form class="editfb-form" method="post">
                <h2>Update Food Bank Form</h2>
                <p>Please fill out each section of the following form to edit a food bank.</p>
                <p>An asterisk (<label><em>*</em></label>) indicates a required field.</p>
                <fieldset>
                    <legend>Food Bank Information</legend>
                    <label for="fb-name"><em>* </em>Food Bank Name</label>
                    <input type="text" id="fb-name" name="fb-name" value="<?php echo $foodbank->get_first_name(); ?> " required placeholder="Enter the food bank name">

                    <label for="phone"><em>* </em>Phone Number</label>
                    <input type="tel" id="phone" name="phone" pattern="\([0-9]{3}\) [0-9]{3}-[0-9]{4}" required placeholder="Ex. (555) 555-5555" value="<?php echo '(' . substr($foodbank->get_phone1(), 0, 3) . ') ' . substr($foodbank->get_phone1(), 3, 3) . '-' . substr($foodbank->get_phone1(), 6); ?>">

                    <label for="website"><em>* </em>Website Link</label>
                    <input type="text" id="website" name="website" required placeholder="Enter the food bank website link" value="<?php echo $foodbank->get_website(); ?>">

                    <label for="address"><em>* </em>Address</label>
                    <input type="text" id="address" name="address" required placeholder="Enter the food bank address" value=<?php echo $foodbank->get_address(); ?>>

                    <label for="address2">Address 2</label>
                    <?php if ($foodbank->get_address()) : ?>
                        <?php echo '<input type="text" id="address2" name="address2" placeholder="Enter secondary or additional address" value="' . $foodbank->get_address2() . '">' ?>

                    <?php else : ?>
                        <?php echo '<input type="text" id="address2" name="address2" placeholder="Enter secondary or additional address">'; ?>
                    <?php endif; ?>
                    <label for="city"><em>* </em>City</label>
                    <input type="text" id="city" name="city" required placeholder="Enter the city" value="<?php echo $foodbank->get_city(); ?>">

                    <label for="county"><em>* </em>County</label>
                    <input type="text" id="county" name="county" required placeholder="Enter the county" value=" <?php echo $foodbank->get_county(); ?> ">

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
                    <input type="text" id="zip" name="zip" pattern="[0-9]{5}" title="5-digit zip code" required placeholder="Enter your 5-digit zip code" value="<?php echo $foodbank->get_zip(); ?>">


                    <label for="opnotes">Operation Notes</label>
                    <?php if ($foodbank->get_notes()) : ?>
                        <?php echo '<textarea wrap="soft" id="opnotes" name="opnotes" placeholder="Input operation notes">' . $foodbank->get_notes() . '</textarea>'; ?>
                    <?php else : ?>
                        <?php echo '<textarea wrap="soft" id="opnotes" name="opnotes" placeholder="Input operation notes"></textarea>'; ?>
                    <?php endif; ?>

                    <label for="adtl-services">Additional Services Offered</label>
                    <?php if ($foodbank->get_altServices()) : ?>
                        <?php echo '<input type="text" id="adtl-services" name="adtl-services" value="' . $foodbank->get_altServices() . '">'; ?>
                    <?php else : ?>
                        <?php echo '<input type="text" id="adtl-services" name="adtl-services">'; ?>
                    <?php endif; ?>
                    <label for="tag"><em>* </em>Tag</label>
                    <select id="tag" name="tag" required>
                        <option value="">Choose an option</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>


                </fieldset>


                <fieldset>
                    <legend>Food Bank Schedule</legend>

                    <br>

                    <p>Please enter the days, times, and frequency of the food bank.</p>


                    <label><em>* </em>Availability</label>
                    <p>Enter the days and times the food bank is available each week.</p>

                    <div class="availability-container">
                        <?php
                        $start = $foodbank->get_sunday_availability_start();
                        $end = $foodbank->get_sunday_availability_end();
                        $day = $start && $end;
                        ?>
                        <div class="availability-day">
                            <p class="availability-day-header">
                                <input id="available-sundays" name="available-sundays" type="checkbox" <?php if ($day) echo 'checked'; ?>>
                                <label for="available-sundays">Sundays</label>
                            </p>
                            <p><em class="hidden">* </em>From</p>
                            <?php echo buildSelect('sundays-start', !$day, $start) ?>
                            <!-- <input type="text" id="sundays-start" name="sundays-start" value="<?php echo time24hTo12h($start); ?>" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 8:00AM" <?php if (!$day) echo 'disabled';
                                                                                                                                                                                                                    else echo 'required'; ?>> -->
                            <p><em class="hidden">* </em>to</p>
                            <?php echo buildSelect('sundays-end', !$day, $end) ?>
                            <!-- <input type="text" id="sundays-end" name="sundays-end" value="<?php echo time24hTo12h($end); ?>" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 4:00PM" <?php if (!$day) echo 'disabled';
                                                                                                                                                                                                                else echo 'required'; ?>> -->
                            <p id="sundays-range-error" class="hidden error">Start time must come before end time.</p>
                        </div>
                        <?php
                        $start = $foodbank->get_monday_availability_start();
                        $end = $foodbank->get_monday_availability_end();
                        $day = $start && $end;
                        ?>
                        <div class="availability-day">
                            <p class="availability-day-header">
                                <input id="available-mondays" name="available-mondays" type="checkbox" <?php if ($day) echo 'checked'; ?>>
                                <label for="available-mondays">Mondays</label>
                            </p>
                            <p><em class="hidden">* </em>From</p>
                            <?php echo buildSelect('mondays-start', !$day, $start) ?>
                            <!-- <input type="text" id="mondays-start" name="mondays-start" value="<?php echo time24hTo12h($start); ?>" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 8:00AM" <?php if (!$day) echo 'disabled';
                                                                                                                                                                                                                    else echo 'required'; ?>> -->
                            <p><em class="hidden">* </em>to</p>
                            <?php echo buildSelect('mondays-end', !$day, $end) ?>
                            <!-- <input type="text" id="mondays-end" name="mondays-end" value="<?php echo time24hTo12h($end); ?>" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 4:00PM" <?php if (!$day) echo 'disabled';
                                                                                                                                                                                                                else echo 'required'; ?>> -->
                            <p id="mondays-range-error" class="hidden error">Start time must come before end time.</p>
                        </div>
                        <?php
                        $start = $foodbank->get_tuesday_availability_start();
                        $end = $foodbank->get_tuesday_availability_end();
                        $day = $start && $end;
                        ?>
                        <div class="availability-day">
                            <p class="availability-day-header">
                                <input id="available-tuesdays" name="available-tuesdays" type="checkbox" <?php if ($day) echo 'checked'; ?>>
                                <label for="available-tuesdays">Tuesdays</label>
                            </p>
                            <p><em class="hidden">* </em>From</p>
                            <?php echo buildSelect('tuesdays-start', !$day, $start) ?>
                            <!-- <input type="text" id="tuesdays-start" name="tuesdays-start" value="<?php echo time24hTo12h($start); ?>" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 8:00AM" <?php if (!$day) echo 'disabled';
                                                                                                                                                                                                                        else echo 'required'; ?>> -->
                            <p><em class="hidden">* </em>to</p>
                            <?php echo buildSelect('tuesdays-end', !$day, $end) ?>
                            <!-- <input type="text" id="tuesdays-end" name="tuesdays-end" value="<?php echo time24hTo12h($end); ?>" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 4:00PM" <?php if (!$day) echo 'disabled';
                                                                                                                                                                                                                else echo 'required'; ?>> -->
                            <p id="tuesdays-range-error" class="hidden error">Start time must come before end time.</p>
                        </div>
                        <?php
                        $start = $foodbank->get_wednesday_availability_start();
                        $end = $foodbank->get_wednesday_availability_end();
                        $day = $start && $end;
                        ?>
                        <div class="availability-day">
                            <p class="availability-day-header">
                                <input id="available-wednesdays" name="available-wednesdays" type="checkbox" <?php if ($day) echo 'checked'; ?>>
                                <label for="available-wednesdays">Wednesdays</label>
                            </p>
                            <p><em class="hidden">* </em>From</p>
                            <?php echo buildSelect('wednesdays-start', !$day, $start) ?>
                            <!-- <input type="text" id="wednesdays-start" name="wednesdays-start" value="<?php echo time24hTo12h($start); ?>" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 8:00AM" <?php if (!$day) echo 'disabled';
                                                                                                                                                                                                                            else echo 'required'; ?>> -->
                            <p><em class="hidden">* </em>to</p>
                            <?php echo buildSelect('wednesdays-end', !$day, $end) ?>
                            <!-- <input type="text" id="wednesdays-end" name="wednesdays-end" value="<?php echo time24hTo12h($end); ?>" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 4:00PM" <?php if (!$day) echo 'disabled';
                                                                                                                                                                                                                    else echo 'required'; ?>> -->
                            <p id="wednesdays-range-error" class="hidden error">Start time must come before end time.</p>
                        </div>
                        <?php
                        $start = $foodbank->get_thursday_availability_start();
                        $end = $foodbank->get_thursday_availability_end();
                        $day = $start && $end;
                        ?>
                        <div class="availability-day">
                            <p class="availability-day-header">
                                <input id="available-thursdays" name="available-thursdays" type="checkbox" <?php if ($day) echo 'checked'; ?>>
                                <label for="available-thursdays">Thursdays</label>
                            </p>
                            <p><em class="hidden">* </em>From</p>
                            <?php echo buildSelect('thursdays-start', !$day, $start) ?>
                            <!-- <input type="text" id="thursdays-start" name="thursdays-start" value="<?php echo time24hTo12h($start); ?>" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 8:00AM" <?php if (!$day) echo 'disabled';
                                                                                                                                                                                                                        else echo 'required'; ?>> -->
                            <p><em class="hidden">* </em>to</p>
                            <?php echo buildSelect('thursdays-end', !$day, $end) ?>
                            <!-- <input type="text" id="thursdays-end" name="thursdays-end" value="<?php echo time24hTo12h($end); ?>" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 4:00PM" <?php if (!$day) echo 'disabled';
                                                                                                                                                                                                                    else echo 'required'; ?>> -->
                            <p id="thursdays-range-error" class="hidden error">Start time must come before end time.</p>
                        </div>
                        <?php
                        $start = $foodbank->get_friday_availability_start();
                        $end = $foodbank->get_friday_availability_end();
                        $day = $start && $end;
                        ?>
                        <div class="availability-day">
                            <p class="availability-day-header">
                                <input id="available-fridays" name="available-fridays" type="checkbox" <?php if ($day) echo 'checked'; ?>>
                                <label for="available-fridays">Fridays</label>
                            </p>
                            <p><em class="hidden">* </em>From</p>
                            <?php echo buildSelect('fridays-start', !$day, $start) ?>
                            <!-- <input type="text" id="fridays-start" name="fridays-start" value="<?php echo time24hTo12h($start); ?>" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 8:00AM" <?php if (!$day) echo 'disabled';
                                                                                                                                                                                                                    else echo 'required'; ?>> -->
                            <p><em class="hidden">* </em>to</p>
                            <?php echo buildSelect('fridays-end', !$day, $end) ?>
                            <!-- <input type="text" id="fridays-end" name="fridays-end" value="<?php echo time24hTo12h($end); ?>" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 4:00PM" <?php if (!$day) echo 'disabled';
                                                                                                                                                                                                                else echo 'required'; ?>> -->
                            <p id="fridays-range-error" class="hidden error">Start time must come before end time.</p>
                        </div>
                        <?php
                        $start = $foodbank->get_saturday_availability_start();
                        $end = $foodbank->get_saturday_availability_end();
                        $day = $start && $end;
                        ?>
                        <div class="availability-day">
                            <p class="availability-day-header">
                                <input id="available-saturdays" name="available-saturdays" type="checkbox" <?php if ($day) echo 'checked'; ?>>
                                <label for="available-saturdays">Saturdays</label>
                            </p>
                            <p><em class="hidden">* </em>From</p>
                            <?php echo buildSelect('saturdays-start', !$day, $start) ?>
                            <!-- <input type="text" id="saturdays-start" name="saturdays-start" value="<?php echo time24hTo12h($start); ?>" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 8:00AM" <?php if (!$day) echo 'disabled';
                                                                                                                                                                                                                        else echo 'required'; ?>> -->
                            <p><em class="hidden">* </em>to</p>
                            <?php echo buildSelect('saturdays-end', !$day, $end) ?>
                            <!-- <input type="text" id="saturdays-end" name="saturdays-end" value="<?php echo time24hTo12h($end); ?>" pattern="([1-9]|10|11|12):[0-5][0-9]([aApP][mM])" placeholder="Ex. 4:00PM" <?php if (!$day) echo 'disabled';
                                                                                                                                                                                                                    else echo 'required'; ?>> -->
                            <p id="saturdays-range-error" class="hidden error">Start time must come before end time.</p>
                        </div>
                    </div>

                    <label for="frequency"><em>*</em>Frequency</label>
                    <input type="text" id="frequency" name="frequency" value="<?php echo $foodbank->get_start_date(); ?>">
                    </div>

                </fieldset>


                <p>By pressing Submit below, the food bank and assciated information you have input will be added to the system.</p>
                <input type="submit" name="addfb-form" value="Submit">
            </form>
            <a class="button cancel" href="index.php" style="margin-top: .5rem">Cancel</a>

        </main>
    <?php endif; ?>
</body>

</html>