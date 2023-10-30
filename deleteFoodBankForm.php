<?php
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
 
?>
<!DOCTYPE html>
<html>
    <head>
    <?php require_once('universal.inc') ?>
        <title>Hunger Actions Coalition | Delete Food Bank <?php if ($loggedIn) echo ' Delete Food Bank'?></title>
    </head>
    <body>
        <?php require_once('header.php') ?>
        <h1>Delete a Food Bank</h1>