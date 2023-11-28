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
//id is fbname,phone number, address for some reason, think it has to do with the Person constructor in Person.php, works fine though
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    // echo $id;
    $foodbank = retrieve_person($id);
    if ($foodbank == false) {
        echo '<div class = "error-toast"><p>Incorrect food bank given</p></div>';
    }
} else {
    //this will be changed to error checking
    echo '<div class= "error-toast"><p> No food bank given </p> </div>';
}

//this is for viewing tags
// SQL part
// 
// $data = $sql->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <?php 
    if(isset($_GET["lang"])){
        $_SESSION['lang']=$_GET["lang"];
        $lang=$_GET["lang"];
    }
    else if(isset($_SESSION['lang'])){
        $lang=$_SESSION['lang'];
    }
    else{
    $lang="eng";
    }
    $Language=parse_ini_file("languages/$lang.ini");
    require_once('universal.inc') 
     ?>
    require_once('universal.inc') ?>
    <title>FUMC FB VMS | View Food Bank</title>
</head>

<body>
    <?php require_once('header.php') ?>
    <h1><?=$Language["View_Foodbank"]?></h1>
    <?php if ($foodbank) : ?>
        <main class="general">
            <fieldset>
                <legend><?=$Language["Food_Bank_Information"]?></legend>
                <?php if ($accessLevel >= 2) : ?>
                    <?php if ($accessLevel >= 3) : ?>
                        <form action=deleteFoodBankForm.php method="post">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input type="submit" class="button" value="Delete Food Bank">
                        </form>
                    <?php endif ?>
                    <a class="button" href="editfoodbank.php?id=<?php echo $id ?>">Edit Food Bank</a>
                <?php endif ?>
                <label><?=$Language["Foodbank_Name"]?></label>
                <!--NOTE: This was changed to fb_name, but this works for now-->
                <p><?php echo $foodbank->get_first_name() ?> </p>

                <label><?=$Language["Phone_Number"]?></label>
                <p>
                    <!-- formatting phone number -->
                    <?php
                    $phone_str = strval($foodbank->get_phone1());
                    echo '(' . substr($phone_str, 0, 3) . ') ' . substr($phone_str, 3, 3) . '-' . substr($phone_str, 6);
                    ?>
                </p>
                <?php if ($foodbank->get_phone2()) : ?>
                    <label><?=$Language["Alt_Phone_Number"]?></label>
                    <p>
                        <!-- formatting phone number -->
                        <?php
                        $phone_str = strval($foodbank->get_phone2());
                        echo '(' . substr($phone_str, 0, 3) . ') ' . substr($phone_str, 3, 3) . '-' . substr($phone_str, 6);
                        ?>
                    </p>
                <?php endif; ?>
                <label><?=$Language["Website_Link"]?></label>
                <!-- Add Functionality/Field for Address -->
                <p><?php echo $foodbank->get_website() ?> </p>

                <label><?=$Language["Address"]?></label>
                <p><?php echo $foodbank->get_address() ?> </p>
                <?php if ($foodbank->get_address2()) : ?>
                    <label><?=$Language["Address"]?> 2</label>
                    <p><?php echo $foodbank->get_address2() ?> </p>
                <?php endif; ?>
                <label><em> </em><?=$Language["City"]?></label>
                <p><?php echo $foodbank->get_city() ?> </p>

                <label><em> </em><?=$Language["County"]?></label>
                <p><?php echo $foodbank->get_county() ?> </p>

                <label><em><?=$Language["State"]?> </em></label>
                <p><?php echo $foodbank->get_state() ?> </p>

                <label><em> </em><?=$Language["Zip_Code"]?></label>
                <p><?php echo $foodbank->get_zip() ?> </p>


                <!-- Decide which field for oppnotes and add getter -->
                <?php if ($foodbank->get_notes()) : ?>
                    <label for="opnotes"><?=$Language["Operation_Notes"]?></label>
                    <textarea wrap="soft" id="opnotes" name="opnotes" readonly><?php echo $foodbank->get_notes() ?></textarea>
                <?php endif; ?>
                <?php if ($foodbank->get_altServices()) : ?>
                    <label for="adtl-services"><?=$Language["Additional_Services"]?></label>
                    <p><?php echo $foodbank->get_altServices() ?> </p>
                <?php endif; ?>

                
                <label for="tag"><em> </em><?=$Language["Tag"]?></label>
                <!-- <?php
                    // include_once("sql/vms.sql");
                    // include_once('database/dbinfo.php');
                    
                    // $result = mysqli_query($con, "SELECT id, tagID, userID, tagText
                    //     FROM dbFBTags
                    //     left outer join dbTags
                    //     on dbFBTags.id = dbTags.tagID
                    //     union all      -- Using `union all` instead of `union`
                    //     select id, tagID, userID, tagText
                    //     from dbTags
                    //     left outer join dbFBTags
                    //     on dbFBTags.id = dbTags.tagID
                    //     where
                    //     dbFBTags.id IS NULL
                    //     ");
                    // while($row = mysqli_fetch_array($result)) {
                    //         echo $row['id'].$row['tagID'].$row['userID'].$row['tagText']; 
                    // }
                        
                ?> -->

                <select id="tag" name="tag" required>
                    <!-- Show list of Tags-->
                    <option value="">Choose an option</option>
                    <!--For tags in tagDB, loop through
                        get from tagDB in vms.sql, foreach data in row-->
                    <?php
                        include_once("sql/vms.sql");
                        include_once('database/dbinfo.php');

                        //SQL edited from dbPersons
                        $con=connect();
                        //working query to get from dbTags directly
                        // $result = mysqli_query($con, "SELECT tagID, tagText FROM dbTags");
                        $result = mysqli_query($con, "SELECT a.id, b.tagID, a.userID, b.tagText
                        FROM dbTags b
                        INNER JOIN dbFBTags a
                        ON b.tagID = a.id
                        ORDER BY b.tagID
                        ");
                        while ($row = mysqli_fetch_array($result)) {
                            if ($row['userID']==$id):
                                echo "<option value='" .$row['id']."'> ".$row['tagText'] . "</option>";
                            endif;
                        }
                        echo "</select>";
                    ?>
                <?php
                    // include_once("sql/vms.sql");
                    // include_once('database/dbinfo.php');

                    // $con=connect();
                    // $result = mysqli_query($con, "SELECT a.id, b.tagID, a.userID, b.tagText
                    // FROM dbTags b
                    // INNER JOIN dbFBTags a
                    // ON b.tagID = a.id
                    // ORDER BY b.tagID
                    // ");

                    // //try to display them as individual buttons
                    // //NOTE: Does work, but they're all on different lines
                    // while ($row = mysqli_fetch_array($result)) {
                    //     // echo "found";
                    //     if ($row['userID']==$id):
                    //         echo "<button class='tag-btn', value='" .$row['id']."'> ".$row['tagText'] ."</button>";
                    //     endif;
                    // }
                ?>
            </fieldset>

            <br>
            <fieldset>
                <legend><?=$Language["Schedule"]?></legend>
                <label><em> </em><?=$Language["Availability"]?></label>

                <?php if ($foodbank->get_sunday_availability_start()) : ?>
                    <label><?=$Language["Sundays"]?></label>
                    <p><?php echo time24hTo12h($foodbank->get_sunday_availability_start()) . ' - ' . time24hTo12h($foodbank->get_sunday_availability_end()) ?></p>
                <?php endif ?>
                <?php if ($foodbank->get_monday_availability_start()) : ?>
                    <label><?=$Language["Mondays"]?></label>
                    <p><?php echo time24hTo12h($foodbank->get_monday_availability_start()) . ' - ' . time24hTo12h($foodbank->get_monday_availability_end()) ?></p>
                <?php endif ?>
                <?php if ($foodbank->get_tuesday_availability_start()) : ?>
                    <label><?=$Language["Tuedays"]?></label>
                    <p><?php echo time24hTo12h($foodbank->get_tuesday_availability_start()) . ' - ' . time24hTo12h($foodbank->get_tuesday_availability_end()) ?></p>
                <?php endif ?>
                <?php if ($foodbank->get_wednesday_availability_start()) : ?>
                    <label><?=$Language["Wednesdays"]?></label>
                    <p><?php echo time24hTo12h($foodbank->get_wednesday_availability_start()) . ' - ' . time24hTo12h($foodbank->get_wednesday_availability_end()) ?></p>
                <?php endif ?>
                <?php if ($foodbank->get_thursday_availability_start()) : ?>
                    <label><?=$Language["Thursdays"]?></label>
                    <p><?php echo time24hTo12h($foodbank->get_thursday_availability_start()) . ' - ' . time24hTo12h($foodbank->get_thursday_availability_end()) ?></p>
                <?php endif ?>
                <?php if ($foodbank->get_friday_availability_start()) : ?>
                    <label><?=$Language["Fridays"]?></label>
                    <p><?php echo time24hTo12h($foodbank->get_friday_availability_start()) . ' - ' . time24hTo12h($foodbank->get_friday_availability_end()) ?></p>
                <?php endif ?>
                <?php if ($foodbank->get_saturday_availability_start()) : ?>
                    <label><?=$Language["Saturdays"]?></label>
                    <p><?php echo time24hTo12h($foodbank->get_saturday_availability_start()) . ' - ' . time24hTo12h($foodbank->get_saturday_availability_end()) ?></p>
                <?php endif ?>

                <label><em> </em><?=$Language["Frequency"]?></label>
                <p><?php echo $foodbank->get_start_date() ?></p>
            </fieldset>
        </main>
    <?php endif; ?>
    <a href = "?lang=eng">English</a>
    <a href = "?lang=esp">Espanol</a>
    <a href = "?lang=dar">&#1583;&#1585;&#1740;</a>
</body>

</html>