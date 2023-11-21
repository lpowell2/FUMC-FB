<?php
    session_cache_expire(30);
    session_start();

    date_default_timezone_set("America/New_York");
    
    //check session and access level
    if (!isset($_SESSION['access_level']) || $_SESSION['access_level'] < 1) {
        if (isset($_SESSION['change-password'])) {
            header('Location: changePassword.php');
        } else {
            header('Location: login.php');
        }
        die();
    }
        
    include_once('database/dbPersons.php');
    include_once('domain/Person.php');
    // Get date?
    if (isset($_SESSION['_id'])) {
        $person = retrieve_person($_SESSION['_id']);
    }
    $notRoot = $person->get_id() != 'vmsroot';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require('universal.inc'); ?>
        <title>Hunger Actions Coalition VMS | Manage Tags</title>
    </head>
    <body>
        <?php require('header.php'); ?>
        <h1>Dashboard</h1>

        <main class='dashboard'>
            <div id="dashboard">

                <?php if ($_SESSION['access_level'] >= 1): ?>
                    <div class="dashboard-item" data-link="registerFoodBank.php">
                        <img src="images/new-event.svg">
                        <span>Add Food Bank</span>
                    </div>

                    <div class="dashboard-item" data-link="importfoodbankform.php">
                        <img src="images/create-report.svg">
                        <span>Import Food Banks</span>
                    </div>
                    
                    <div class="dashboard-item" data-link="registernewtag.php">
                    <img src="images/plus.svg">
                    <span>Add Tag</span>
                    </div>

                <?php endif ?>

                <div class="dashboard-item" data-link="fBankSearch.php">
                    <img src="images/search.svg">
                    <span>Find Food Bank</span>
                </div>

                <?php if ($_SESSION['access_level'] >= 2): ?>
                    <div class="dashboard-item" data-link="fbankSearch.php">
                        <img src="images/person-search.svg">
                        <span>Find Person</span>
                    </div>
                    <div class="dashboard-item" data-link="register.php">
                        <img src="images/add-person.svg">
                        <span>Register Volunteer</span>
                    </div>
                    
                <?php endif ?>
                <?php if ($notRoot) : ?>
                    <div class="dashboard-item" data-link="viewProfile.php">
                        <img src="images/view-profile.svg">
                        <span>View Profile</span>
                    </div>
                    <div class="dashboard-item" data-link="editProfile.php">
                        <img src="images/manage-account.svg">
                        <span>Edit Profile</span>
                    </div>
                <?php endif ?>
                <?php if ($notRoot) : ?>
                    <div class="dashboard-item" data-link="volunteerReport.php">
                        <img src="images/volunteer-history.svg">
                        <span>View My Hours</span>
                    </div>
                <?php endif ?>
                <div class="dashboard-item" data-link="changePassword.php">
                    <img src="images/change-password.svg">
                    <span>Change Password</span>
                </div>
                <div class="dashboard-item" data-link="logout.php">
                    <img src="images/logout.svg">
                    <span>Log out</span>
                </div>
            </div>
        </main>
    </body>
</html>