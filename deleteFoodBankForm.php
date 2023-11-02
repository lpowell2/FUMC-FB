<?php
 session_cache_expire(30);
 session_start();

 require_once('include/input-validation.php');
 require_once('database/dbPersons.php');
 //require_once('database/dbPersons.php');

 $loggedIn = false;
 $fbID = null;
 if (isset($_SESSION['change-password'])) {
     header('Location: changePassword.php');
     die();
 }
 if (isset($_SESSION['_id'])) {
     $loggedIn = true;
     $fbID = $_GET['id'];

 }
 
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once('universal.inc') ?>
        <title>Hunger Actions Coalition | Delete Food Bank <?php if ($loggedIn) echo ' Delete Food Bank'?></title>
    </head>
    <body>
        <main class="general">
            <?php require_once('header.php') ?>
            <h1>Delete a Food Bank</h1>
            <fieldset>
                <legend>Delete Information</legend>
                    <h2>Are you sure you want to delete?</h2>
                    <a class="button" href="index.php">Cancel</a>
                    <a class="button cancel" onclick="<?php remove_person($fbID);?>" href="index.php">Continue</a>
            </fieldset>
        </main>
    </body>
</html>