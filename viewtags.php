<?php
// Make session information accessible, allowing us to associate
// data with the logged-in user.
session_cache_expire(30);
session_start();

$loggedIn = false;
$accessLevel = 0;
$isAdmin = false;
if (!isset($_SESSION['access_level']) || $_SESSION['access_level'] < 1) {
    header('Location: login.php');
    die();
}
if (isset($_SESSION['_id'])) {
    $loggedIn = true;
    // 0 = not logged in, 1 = standard user, 2 = manager (Admin), 3 super admin (TBI)
    $accessLevel = $_SESSION['access_level'];
    $isAdmin = $accessLevel >= 2;
} else {
    header('Location: login.php');
    die();
}
require_once('database/dbTags.php');
$con = connect();

$resulting = mysqli_query($con, "SELECT tagID, tagText FROM dbTags");
$tags;
while ($row = mysqli_fetch_array($resulting)) {
    $tags[] = $row;
}




?>
<!DOCTYPE html>
<html>

<head>
    <?php require_once('universal.inc') ?>
    <title>Food Bank Management | View Tags</title>
</head>

<body>
    <?php
    require_once('header.php');
    require_once('include/output.php');
    ?>
    <h1>View Tags</h1>
    <main class="general">
        <?php if (count($tags) > 0) : ?>
            <div class="table-wrapper">
                <table class="general">
                    <thead>
                        <tr>
                            <th>Tag Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="standout">
                    <?php 
                        foreach($tags as $tag){
                            echo('<tr><td>'.$tag['tagText'].'</td>
                            <td> <form action=deletetag.php method="post">
                            <input type="hidden" name="id" value="'.$tag['tagText'].'">
                            <input type="submit" class="button" value="Delete Food Bank">
                        </form> </td>
                            </tr>');
                            
                        }
                    ?>
                </tbody>
        </table>
                <?php else : ?>
                    <div class="error-toast">No Tags Found</div>
                <?php endif; ?>
    </main>
</body>

</html>