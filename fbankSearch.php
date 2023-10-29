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
        <h1>User Search</h1>
        <form id="person-search" class="general" method="get">
            <h2>Find Foodbank</h2>
            <?php 
                if (isset($_GET['name'])) {
                    require_once('include/input-validation.php');
                    require_once('database/dbPersons.php');
                    $args = sanitize($_GET);
                    $required = ['fbName', 'id', 'zip', 'county', 'city'];
                    if (!wereRequiredFieldsSubmitted($args, $required, true)) {
                        echo 'Missing expected form elements';
                    }
                    $name = $args['fbName'];
                    $id = $args['id'];
                    
					$zip = $args['zip'];
                    $county = $args['county'];
                    $city = $args['city'];
                    if (!($fbName || $id || $zip || $county || $city)) {
                        echo '<div class="error-toast">At least one search criterion is required.</div>';
                    
                    } else {
                        echo "<h3>Search Results</h3>";
                        $persons = find_fbank($fbName, $id, $zip, $county, $city);
                        
                        require_once('include/output.php');
                        if (count($persons) > 0) {
                            echo '
                            <div class="table-wrapper">
                                <table class="general">
                                    <thead>
                                        <tr>
                                            <th>fbName</th>
                                            <th>Phone Number</th>
											<th>Zip Code</th>
                                            <th>County</th>
                                            <th>City</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="standout">';
                            foreach ($persons as $person) {
                                echo '
                                        <tr>
                                            <td>' . $person->get_fb_name(). '</td>
                                            <td><a href="tel:' . $person->get_phone1() . '">' . formatPhoneNumber($person->get_phone1()) .  '</td>
											<td>' . $person->get_zip() . '</td>
                                            <td>' . $person->get_county() . '</td>
                                            <td>' . $person->get_city() . '</td>
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
            <p>Use the form below to find a volunteer or staff member account. At least one search criterion is required.</p>
            <label for="fbName">Foodbank Name</label>
            <input type="text" id="fbName" name="fbName" placeholder="Enter the foodbank name">

             <label for="zipCode">Zip Code</label>
            <input type="text" id="zipCode" name="zipCode" placeholder="Enter the zip code">

            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="Enter the city">

            <label for="county">County</label>
            <input type="text" id="county" name="county" placeholder="Enter the county">

            <input type="submit" value="Search">
            <a class="button cancel" href="index.php">Return to Dashboard</a>

        </form>
    </body>
</html>