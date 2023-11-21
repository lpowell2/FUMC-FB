<?php
    // Author: Sarah Harrington
    // Description: Registration page for new tags 
    require_once('universal.inc');
    require_once('include/input-validation.php');
    require_once('header.php');
    require_once('domain/Tag.php');
    require_once('database/dbTags.php');
    require_once('include/input-validation.php');
  
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
    if ($accessLevel < 1) {
        header('Location: login.php');
        echo '<div class="error-toast"><p> Improper access level </p> </div>';
        die();
    }
?>

<!DOCTYPE html>
<html>


<head>
    
    <title>Hunger Actions Coalition | Add New Tag</title>
</head>

<body>
    <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // make every submitted field SQL-safe except for password
            $ignoreList = array('password');
            $args = sanitize($_POST, $ignoreList);

            // echo "<p>The form was submitted:</p>";
            // foreach ($args as $key => $value) {
            //     echo "<p>$key: $value</p>";
            // }

            $required = array(
                'tag' 
            );

            $errors = false;
            if (!wereRequiredFieldsSubmitted($args, $required)) {
                //TODO put back error check, need to fix required fields
            }

            //set it to next autoincrement value

            $tag = $args['tag'];

            $newTag = new Tag($tag);

            $result = add_tag($newTag);

            if (!$result) {
                echo '<div class="error-toast"><p>Failed to add tag.</p></div>';
            } else {
                echo '<div class="happy-toast"<p>New tag added successfully!</p></div>';
                Header("refresh:3;url=index.php");
                
            }   
        } else {
            require_once('addTagForm.php'); 
        }
    ?>
</body>
</html>