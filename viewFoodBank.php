<!-- Add check for logged in and privleges -->
<?php

include_once('database/dbPersons.php');
require_once('include/output.php');
// This is a placeholder I used a person id from my own database for testing purposes
$id = "pow@gmail.com";
$foodbank = retrieve_person($id);

//if id is wrong, error
if(!isset($_SESSION["id"])){
    header("Location: login.php")
};
//if id isn't given, error


?>
<!DOCTYPE html>
<html>

<head>
    <?php require_once('universal.inc') ?>
    <title>FUMC FB VMS | View Food Bank</title>
</head>

<body>
    <?php require_once('header.php') ?>
    <h1>View a Food Bank</h1>
    <main class="general">
        <fieldset>
            <legend>Food Bank Information</legend>
            <label>Food Bank Name</label>
            <p><?php echo $foodbank->get_first_name() ?> </p>

            <label>Phone Number</label>
            <p><?php echo $foodbank->get_phone1() ?> </p>

            <label>Website Link</label>
            <!-- Add Functionality/Field for Address -->
            <p>WEBSITE CHANGE THIS WHEN WE DECIDE FIELD AND DB CHANGES </p>

            <label>Address</label>
            <p><?php echo $foodbank->get_address() ?> </p>

            <label>Address 2</label>
            <p><?php echo $foodbank->get_address() ?> </p>

            <label><em> </em>City</label>
            <p><?php echo $foodbank->get_city() ?> </p>

            <label><em> </em>County</label>
            <p>WEBSITE CHANGE THIS WHEN WE DECIDE FIELD AND DB CHANGES </p>

            <label><em> </em>State</label>
            <p><?php echo $foodbank->get_state() ?> </p>

            <label><em> </em>Zip Code</label>
            <p><?php echo $foodbank->get_zip() ?> </p>

            <!-- Decide which field for oppnotes and add getter -->

            <label for="opnotes">Operation Notes</label>
            <textarea wrap="soft" id="opnotes" name="opnotes" placeholder="Input operation notes" readonly></textarea>


            <label for="adtl-services">Additional Services Offered</label>
            <!-- Decide which field for additional services and add getter -->
            <input type="text" id="adtl-services" name="adtl-services" readonly>
            <!-- **To Be Changed To Show List of Tags** -->
            <label for="tag"><em> </em>Tag</label>
            <select id="tag" name="tag" required>
                <option value="">Choose an option</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>


        </fieldset>

        <br>
        <fieldset>
            <legend>Food Bank Schedule</legend>
            <label><em> </em>Availability</label>

            <!-- Uncomment when get foodbank is set up -->
            <?php if ($foodbank->get_sunday_availability_start()) : ?>
                <label>Sundays</label>
                <p><?php echo time24hTo12h($foodbank->get_sunday_availability_start()) . ' - ' . time24hTo12h($foodbank->get_sunday_availability_end()) ?></p>
            <?php endif ?>
            <?php if ($foodbank->get_monday_availability_start()) : ?>
                <label>Mondays</label>
                <p><?php echo time24hTo12h($foodbank->get_monday_availability_start()) . ' - ' . time24hTo12h($foodbank->get_monday_availability_end()) ?></p>
            <?php endif ?>
            <?php if ($foodbank->get_tuesday_availability_start()) : ?>
                <label>Tuedays</label>
                <p><?php echo time24hTo12h($foodbank->get_tuesday_availability_start()) . ' - ' . time24hTo12h($foodbank->get_tuesday_availability_end()) ?></p>
            <?php endif ?>
            <?php if ($foodbank->get_wednesday_availability_start()) : ?>
                <label>Wednesdays</label>
                <p><?php echo time24hTo12h($foodbank->get_wednesday_availability_start()) . ' - ' . time24hTo12h($foodbank->get_wednesday_availability_end()) ?></p>
            <?php endif ?>
            <?php if ($foodbank->get_thursday_availability_start()) : ?>
                <label>Thursdays</label>
                <p><?php echo time24hTo12h($foodbank->get_thursday_availability_start()) . ' - ' . time24hTo12h($foodbank->get_thursday_availability_end()) ?></p>
            <?php endif ?>
            <?php if ($foodbank->get_friday_availability_start()) : ?>
                <label>Fridays</label>
                <p><?php echo time24hTo12h($foodbank->get_friday_availability_start()) . ' - ' . time24hTo12h($foodbank->get_friday_availability_end()) ?></p>
            <?php endif ?>
            <?php if ($foodbank->get_saturday_availability_start()) : ?>
                <label>Saturdays</label>
                <p><?php echo time24hTo12h($foodbank->get_saturday_availability_start()) . ' - ' . time24hTo12h($foodbank->get_saturday_availability_end()) ?></p>
            <?php endif ?>


        </fieldset>
    </main>
</body>

</html>