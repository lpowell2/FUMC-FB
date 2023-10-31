<!-- admins viewing food bank details-->
<!-- click on food bank, open new page/popup -> new page displays detailed info -->
<!-- Part 1: setting up
     Add all food bank variables, getting from dbPersons -->

<!-- Food Bank vars for reference
id, fb_name, address, address2, city, county, state, zip, phone1, website, alt_services, tag, notes,
sunday_availability_start, sunday_availability_end, monday_availability_start, monday_availability_end, tuesday_availability_start , tuesday_availability_end , wednesday_availability_start , wednesday_availability_end,
thursday_availability_start , thursday_availability_end , friday_availability_start , friday_availability_end , saturday_availability_start , saturday_availability_end()-->

<?php


     // Show all information, defaults to INFO_ALL
     phpinfo();

     // Show just the module information.
     // phpinfo(8) yields identical results.
     phpinfo(INFO_MODULES);



     // Ensure user is logged in
     session_cache_expire(30);
     session_start();

     $loggedIn = false;
     $accessLevel = 0;
     $userID = null;
     $isAdmin = false;
     //if not admin, die
     if (!isset($_SESSION['access_level']) || $_SESSION['access_level'] < 2) {
        header('Location: ../login.php');
        die();
     }
     //if admin, continue
     if (isset($_SESSION['_id'])) {
        $loggedIn = true;
        // 0 = not logged in, 1 = standard user, 2 = manager (Admin), 3 super admin (TBI)
        $accessLevel = $_SESSION['access_level'];
        $isAdmin = $accessLevel >= 2;
        $userID = $_SESSION['_id'];
     // otherwise, die
     } else {
        header('Location: ../login.php');
        die();
     }
     //get user's id if admin
     if ($isAdmin && isset($_GET['id'])) {
        require_once('../include/input-validation.php');
        $args = sanitize($_GET);
        $id = strtolower($args['id']);
     } else {
        $id = $userID;
     }

     //get food bank's variables from dbPersons
     include_once('../database/dbPersons.php');
     //for each food bank existing, set "$user_x = retrieve_person($id);", then print those details
          //easier to have a single variable that is constantly reassigned, but would be nice to have some way to set a varying number of variables

     ?>

     <!DOCTYPE html>
     <html>
          <head>
               <?php require_once('../universal.inc') ?>
               <!-- <link rel="stylesheet" href="css/editprofile.css" type="text/css" /> -->
               <title>HAC Food Banks | View Food Banks</title>
          </head>
          <body>
               <?php 
                    require_once('../header.php'); 
                    require_once('../include/output.php');
               ?>
               <h1>Food Banks</h1>
          </body>
     </html>
          