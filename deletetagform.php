<?php
session_cache_expire(30);
session_start();

require_once('include/input-validation.php');
include_once('database/dbTags.php');

$loggedIn = false;
$tagID = null;
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
$tag = NULL;
if (isset($_POST["id"])) {
    $tagID = $_POST["id"];
    $con = connect();
    $query = "SELECT tagID, tagText FROM dbTags WHERE tagID = " . $tagID;
    $resulting = mysqli_query($con, $query);
    $tag = mysqli_fetch_array($resulting);
    if ($tag == false) {
        echo '<div class = "error-toast"><p>Incorrect tag given</p></div>';
    }
} else {
    //this will be changed to error checking
    echo '<div class= "error-toast"><p> No tag given </p> </div>';
}

?>
<!DOCTYPE html>
<html>

<head>
    <?php require_once('universal.inc') ?>
    <title>Hunger Actions Coalition | Delete Tag <?php if ($loggedIn) echo ' Delete tag' ?></title>
</head>

<body>
    <main class="general">
        <?php require_once('header.php') ?>
        <h1>Delete a tag</h1>
        <?php if ($tag) : ?>
            <fieldset>
                <legend>Delete Information</legend>
                <?php
                
                ?>
                <h2>Are you sure you want to delete "<?php echo $tag['tagText'] ?>"?</h2>
                <a class="button" href="viewtags.php">Cancel</a>
                <form method="post" action="deletetagcode.php">
                    <input type="submit" name="submit" value="Delete">
                    <input type="hidden" name="id" value="<? echo ($tag['tagID']) ?>">
                </form>
            </fieldset>
        <?php endif; ?>
    </main>
</body>

</html>