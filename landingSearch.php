<?php
    // Template for new VMS pages. Base your new page on this one

    // Make session information accessible, allowing us to associate
    // data with the logged-in user.
    session_cache_expire(30);
    session_start();


?>
<!DOCTYPE html>
<html>
    <head>
        <?php //require_once('universal.inc') ?>
        <title>FUMC/HAC Food Bank Finder</title>

        <style>
            img {
                display: block;
                width: 200px;
                height: 200px;
                margin: 0 auto;
            }
            .headings-all {
                margin: 0 auto;
                width: 500px
            }
            .foodbank-search {
            width: 500px;
            margin: 0 auto;
            }


            .search-fields {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
            }

            .submit-buttons {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            }

            .foodbank-search input,
            .foodbank-search button,
            .foodbank-search a {
                width: 100%;
                margin-bottom: 10px;
            }
            body {
            background-color: #D0D4C8;
            }
            

    </style>
        <img src="images/food_pic.png" alt="My Image">
    </head>
    <body>
        <?php //require_once('header.php') ?>
        <div class="headings-all">
        <h1>Search for Foodbanks in Area</h1>
        </div>
        <form id="person-search" class="general" method="get">
            <div class="headings-all">
            <h2> </h2>
            <?php 
                if (isset($_GET['county'])) {
                    require_once('include/input-validation.php');
                    require_once('database/dbPersons.php');
                    $args = sanitize($_GET);
                    $required = ['county', 'zipCode', 'tags'];
                    if (!wereRequiredFieldsSubmitted($args, $required, true)) {
                        echo 'Missing expected form elements';
                    }
                    $name = null;
                    //$id = $args['id'];
                    //$county = $_GET['county'];
					$county = $args['county'];
                    $zipCode = $args['zipCode'];
                    $tags = $args['tags'];
                    if (!($zipCode || $county || $tags)) {
                        echo '<div class="error-toast">At least one search criterion is required.</div>';
                    
                    } else {
                        echo "<h3>Search Results</h3>";
                       // var_dump($county);
                        $foodbanks = find_fbank2($name,$zipCode, $tags, $county);
                        //var_dump($county);w
                        //var_dump($tags);
                        //var_dump($zipCode);
                        require_once('include/output.php');
                        if (count($foodbanks) > 0) {
                            echo '
                            <div class="table-wrapper">
                                <table class="general">
                                    <thead>
                                        <tr>
                                            <th>Name </th>
                                            <th>| Phone Number |</th>
											<th> Zip Code |</th>
                                        
                                            <th> City</th>
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
                                            <td>' . $foodbank->get_city() . '</td>
                                        
                                            <td> <a class="button" href="viewfoodbank.php?id=' . $foodbank->get_id() . '">View</a></td>

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
            <p>Use the fields bellow to find food or food assistance in your area.</p>
            <div class="foodbank-search">
                <div class="search-fields">
                    <label for="county">County</label>
                    <input type="text" id="county" name="county" placeholder="Enter the county">

                    <label for="zipCode">Zip Code</label>
                    <input type="text" id="zipCode" name="zipCode" placeholder="Enter the zip code">

                    <label for="tags">Keywords (Tags)</label>
                    <input type="text" id="tags" name="tags" placeholder="Enter keywords or tags">
                </div>
                <div class="submit-buttons">
                    <input type="submit" value="Search">
                    
                    
                </div>
            </div>
        </div>    
        </form>
    </body>
</html>