<?php
    //echo isset($_POST['id']);

    if (isset($_POST['id'])) {
        require_once('include/input-validation.php');
        $args = sanitize($_POST);

        //view variables and their values in post
        //print_r($_POST);

        $con = connect();
        $query = 'DELETE FROM dbTags WHERE tagID = "' . $_POST['id'] . '"';
        $resulting = mysqli_query($con, $query);
        if($resulting){
            echo "<p>Tag deleted successfully!</p>";

            //if successful, also remove from junction table
            $con = connect();
            $query = 'DELETE FROM dbFBTags WHERE ID = "' . $_POST['id'] . '"';
            $result2 = mysqli_query($con, $query);
        }else{
            echo "<p>Failed to delete tag.</p>";
        }
        header("Location: viewtags.php");
    }
?>