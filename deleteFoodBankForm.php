<?php
 session_cache_expire(30);
 session_start();

 require_once('include/input-validation.php');
 include_once('database/dbPersons.php');

 $loggedIn = false;
 $fbID = null;
 if (isset($_SESSION['change-password'])) {
     header('Location: changePassword.php');
     die();
 }
 if (isset($_SESSION['_id'])) {
     $loggedIn = true;
     $accessLevel = $_SESSION['access_level'];
 }
 if ($accessLevel < 3) {
    header('Location: login.php');
    echo '<div class="error-toast"><p> Improper access level </p> </div>';
    die();
}
$foodbank=NULL;
if (isset($_POST["id"])) {
    $fbID = $_POST["id"];
    $foodbank = retrieve_person($fbID);
    if ($foodbank==false){
        echo '<div class = "error-toast"><p>Incorrect food bank given</p></div>';
    }
}
else {
    //this will be changed to error checking
    echo '<div class= "error-toast"><p> No food bank given </p> </div>';}

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
            <?php if($foodbank):?>
            <fieldset>
                <legend>Delete Information</legend>
                    <h2>Are you sure you want to delete "<?php echo $foodbank->get_first_name()?>"?</h2>
                    <a class="button" href="index.php">Cancel</a>
                    <form action="deleteFoodBank.php" method="post"> 
                        <input type="hidden" name="id" value="<?php echo $fbID; ?>"> 
                        <input type="submit" name="submit" value="Delete"> 
                    </form> 
            </fieldset>
            <?php endif; ?>
        </main>
    </body>
</html>
