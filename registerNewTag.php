<?php
    // Author: Sarah Harrington
    // Description: Registration page for new food banks 
    session_cache_expire(30);
    session_start();
    
    require_once('include/input-validation.php');

    $loggedIn = false;
    if (isset($_SESSION['change-password'])) {
        header('Location: changePassword.php');
        die();
    }
    if (isset($_SESSION['_id'])) {
        $loggedIn = true;
    }

    // if (isset($_SESSION['_id'])) {
    //     header('Location: index.php');
    // } else {
    //     $_SESSION['logged_in'] = 1;
    //     $_SESSION['access_level'] = 0;
    //     $_SESSION['venue'] = "";
    //     $_SESSION['type'] = "";
    //     $_SESSION['_id'] = "guest";
    //     header('Location: personEdit.php?id=new');
    // }
?>

<!DOCTYPE html>
<html>


<head>
    <?php require_once('universal.inc'); ?>
    <title>Hunger Actions Coalition | Add New Tag <?php if ($loggedIn) echo ' New Tag' ?></title>
</head>

<body>
    <?php
        require_once('header.php');
        require_once('domain/Tag.php');
        require_once('database/dbTags.php');
        require_once('include/input-validation.php');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // make every submitted field SQL-safe except for password
            $ignoreList = array('password');
            $args = sanitize($_POST, $ignoreList);

            // echo "<p>The form was submitted:</p>";
            // foreach ($args as $key => $value) {
            //     echo "<p>$key: $value</p>";
            // }


            //this may be unnecessary
            $required = array(
                'tag' 
            );

            $errors = false;
            if (!wereRequiredFieldsSubmitted($args, $required)) {
                //TODO put back error check, need to fix required fields
            }


            $tag = $args['tag'];

           

            

            // need to incorporate availability here
            $newTag = create_tag($tag);
            //possibly redundant, based off of EVENTS structure
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