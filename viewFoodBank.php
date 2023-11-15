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
if (isset($_GET["id"])) {
    $id = $_GET["id"];
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
    <title>FUMC FB VMS | View Food Bank</title>
</head>

<body>
    <?php require_once('header.php') ?>
    <h1>View a Food Bank</h1>
    <?php if ($foodbank) : ?>
        <main class="general">
            <fieldset>
                <legend>Food Bank Information</legend>
                <?php if ($accessLevel >= 2) : ?>
                    <?php if ($accessLevel >= 3) : ?>
                        <form action=deleteFoodBankForm.php method="post">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input type="submit" class="button" value="Delete Food Bank">
                        </form>
                    <?php endif ?>
                    <a class="button" href="editfoodbank.php?id=<?php echo $id ?>">Edit Food Bank</a>
                <?php endif ?>
                <label>Food Bank Name</label>
                <!--NOTE: This was changed to fb_name, but this works for now-->
                <p><?php echo $foodbank->get_first_name() ?> </p>

                <label>Phone Number</label>
                <p>
                    <!-- formatting phone number -->
                    <?php
                    $phone_str = strval($foodbank->get_phone1());
                    echo '(' . substr($phone_str, 0, 3) . ') ' . substr($phone_str, 3, 3) . '-' . substr($phone_str, 6);
                    ?>
                </p>
                <?php if ($foodbank->get_phone2()) : ?>
                    <label>Alternate Phone Number</label>
                    <p>
                        <!-- formatting phone number -->
                        <?php
                        $phone_str = strval($foodbank->get_phone2());
                        echo '(' . substr($phone_str, 0, 3) . ') ' . substr($phone_str, 3, 3) . '-' . substr($phone_str, 6);
                        ?>
                    </p>
                <?php endif; ?>
                <label>Website Link</label>
                <!-- Add Functionality/Field for Address -->
                <p><?php echo $foodbank->get_website() ?> </p>

                <label>Address</label>
                <p><?php echo $foodbank->get_address() ?> </p>
                <?php if ($foodbank->get_address2()) : ?>
                    <label>Address 2</label>
                    <p><?php echo $foodbank->get_address2() ?> </p>
                <?php endif; ?>
                <label><em> </em>City</label>
                <p><?php echo $foodbank->get_city() ?> </p>

                <label><em> </em>County</label>
                <p><?php echo $foodbank->get_county() ?> </p>

                <label><em> </em>State</label>
                <p><?php echo $foodbank->get_state() ?> </p>

                <label><em> </em>Zip Code</label>
                <p><?php echo $foodbank->get_zip() ?> </p>


                <!-- Decide which field for oppnotes and add getter -->
                <?php if ($foodbank->get_notes()) : ?>
                    <label for="opnotes">Operation Notes</label>
                    <textarea wrap="soft" id="opnotes" name="opnotes" readonly><?php echo $foodbank->get_notes() ?></textarea>
                <?php endif; ?>
                <?php if ($foodbank->get_altServices()) : ?>
                    <label for="adtl-services">Additional Services Offered</label>
                    <p><?php echo $foodbank->get_altServices() ?> </p>
                <?php endif; ?>
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

                <label><em> </em>Frequency</label>
                <p><?php echo $foodbank->get_start_date() ?></p>
            </fieldset>
        </main>
    <?php endif; ?>
</body>

</html>