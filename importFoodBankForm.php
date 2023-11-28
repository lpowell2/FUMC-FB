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
     $accessLevel = $_SESSION['access_level'];
 }
 if ($accessLevel < 1) {
    header('Location: login.php');
    echo '<div class="error-toast"><p> Improper access level </p> </div>';
    die();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once('universal.inc') ?>
        <title>Hunger Actions Coalition | Import Food Bank <?php if ($loggedIn) echo ' Import Food Bank'?></title>
    </head>
    <body>
        <main class="general">
            <?php require_once('header.php') ?>
            <h1>Import a Food Bank</h1>
            <form class="form-horizontal" action="importFoodBank.php" method="post" name="upload_excel" enctype="multipart/form-data">
            <fieldset>
                <legend>Import Information</legend>
                <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
            </fieldset>
            </form>
        </main>
    </body>
</html>