<?php
    require_once('database/dbPersons.php');
    if (isset($_POST['submit'])) { 
        $id = $_POST['id']; 
        remove_person($id);
        header("Location: index.php");
    }
 ?>