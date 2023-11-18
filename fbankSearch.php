<?php
    // Template for new VMS pages. Base your new page on this one

    // Make session information accessible, allowing us to associate
    // data with the logged-in user.
    session_cache_expire(30);
    session_start();

    $loggedIn = false;
    $accessLevel = 0;
    $userID = null;
    if (isset($_SESSION['_id'])) {
        $loggedIn = true;
        // 0 = not logged in, 1 = standard user, 2 = manager (Admin), 3 super admin (TBI)
        $accessLevel = $_SESSION['access_level'];
        $userID = $_SESSION['_id'];
    }
    // admin-only access
    if ($accessLevel < 2) {
        header('Location: index.php');
        die();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once('universal.inc') ?>
        <title>Gwyneth's Gift VMS | FoodBank Search</title>
    </head>
    <body>
        <?php require_once('header.php') ?>
        <h1>Search for Foodbanks in Area</h1>
        <form id="person-search" class="general" method="get">
            <h2>Find Foodbank</h2>
            <?php 
                if (isset($_GET['name']) || isset($_GET['zipCode']) || isset($_GET['tag']) || isset($_GET['county'])) {
                    require_once('include/input-validation.php');
                    require_once('database/dbPersons.php');
                    $args = sanitize($_GET);
                    $required = ['name', 'zipCode', 'tag', 'county'];
                    if (!wereRequiredFieldsSubmitted($args, $required, true)) {
                        echo 'Missing expected form elements';
                    }
                    $name = $args['name'];
                    //$id = $args['id'];
					$zipCode = $args['zipCode'];
                    $tag = $args['tag'];
                    $county = $args['county'];
                    if (!($name || $zipCode || $tag || $county)) {
                        echo '<div class="error-toast">At least one search criterion is required.</div>';
                    
                    } else {
                        echo "<h3>Search Results</h3>";
                        $foodbanks = find_fbank2($name, $zipCode, $tag, $county);
                        
                        require_once('include/output.php');
                        if (count($foodbanks) > 0) {
                            echo '
                            <div class="table-wrapper">
                                <table class="general">
                                    <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>Phone Number</th>
											<th>Zip Code</th>
                                            <th>County</th>
                                            <th>City</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="standout">';
                            foreach ($foodbanks as $foodbank) {
                                echo '
                                        <tr>
                                            <td>' . $foodbank->get_first_name(). '</td>
                                            <td><a href="tel:' . $foodbank->get_phone1() . '">' . formatPhoneNumber($foodbank->get_phone1()) .  '</td>
											<td>' . $foodbank->get_zip() . '</td>
                                            <td>' . $foodbank->get_county() . '</td>
                                            <td>' . $foodbank->get_city() . '</td>
                                            <td> <a class="button" href="viewfoodbank.php?id=' . $foodbank->get_id() . '">View</a></td>
                                            <td> <a class="button" href="editfoodbank.php?id=' . $foodbank->get_id() . '">Edit</a></td>

                                        </a></tr>';
                            }
                            echo '
                                    </tbody>
                                </table>
                            </div>';

                        } else {
                            echo '<div class="error-toast">Your search returned no results.</div>';
                        }
                    }
                    echo '<h3>Search Again</h3>';
                }
            ?>
            <p>Use the form below to find available foodbanks in a specific area. At least one search criterion is required.</p>
            <label for="name">Foodbank Name</label>
            <input type="text" id="name" name="name" placeholder="Enter the foodbank name">

             <label for="zipCode">Zip Code</label>
            <input type="text" id="zipCode" name="zipCode" placeholder="Enter the zip code">

            <label for="tag">Tag</label>
            <input type="text" id="tag" name="tag" placeholder="Enter the tag">

            <label for="county">County</label>
            <input type="text" id="county" name="county" placeholder="Enter the county">

            <input type="submit" value="Search">
            <a class="button cancel" href="index.php">Return to Dashboard</a>

        </form>
    </body>
</html>