<?php
 session_cache_expire(30);
 session_start();

 require_once('include/input-validation.php');

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
                    <form action="deleteFoodBank.php" method="post"> 
                        <input type="hidden" name="id" value="<?php echo $fbID; ?>"> 
                        <input type="submit" name="submit" value="Delete"> 
                    </form> 
            </fieldset>
        </main>
    </body>
</html>
