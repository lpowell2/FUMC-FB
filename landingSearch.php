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
        <?php
        if(isset($_GET["lang"])){
            $_SESSION['lang']=$_GET["lang"];
            $lang=$_GET["lang"];
        }
        else if(isset($_SESSION['lang'])){
            $lang=$_SESSION['lang'];
        }
        else{
        $lang="eng";
        }
        $Language=parse_ini_file("languages/$lang.ini");
        require_once('universal.inc') ?>
        <?php require_once('database/dbinfo.php')?>
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
        <img src="images/Food_Services.png" alt="My Image">
    </head>
    <body>
        <?php //require_once('header.php') ?>
        <div class="headings-all">
        
                <h1><?=$Language["Search_for_Foodbanks_in_Area"]?></h1> 
                
                   
        
        </div>
        <form id="person-search" class="general" method="get">
            <div class="headings-all">
            <h2> </h2>
            <?php 
                if (isset($_GET['county'])) {
                    require_once('include/input-validation.php');
                    require_once('database/dbPersons.php');
                    $args = sanitize($_GET);
                    $required = ['county', 'zipCode', 'tag'];
                    if (!wereRequiredFieldsSubmitted($args, $required, true)) {
                        echo 'Missing expected form elements';
                    }
                    $name = null;
                    //$id = $args['id'];
                    //$county = $_GET['county'];
					$county = $args['county'];
                    $zipCode = $args['zipCode'];
                    $tag = $args['tag'];
                    $thName=$Language["Foodbank_Name"];
                    $thZip=$Language["Zip_Code"];
                    $thCounty=$Language["County"];
                    $thPhone=$Language["Phone_Number"];
                    $thCity=$Language["City"];
                    // echo "tag is".$tag;
                    // $thTag=$Language["Tags"];
                    if (!($zipCode || $county || $tag)) {
                        echo '<div class="error-toast">At least one search criterion is required.</div>';
                    
                    } else {
                        echo "<h3>Search Results</h3>";
                        $foodbanks = find_fbank2($name,$zipCode, $tag, $county);
                        require_once('include/output.php');
                        if (count($foodbanks) > 0) {
                            echo '
                            <div class="table-wrapper">
                                <table class="general">
                                    <thead>
                                        <tr>
                                            <th>'.$thName.'</th>
                                            <th>'.$thPhone.'</th>
											<th>'.$thZip.'</th>
                                            <th>'.$thCity.'</th>
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
                                            '
                                            ; 

                                            if (isset($_SESSION['id']) || isset($_SESSION['access_level'])){
                                               echo '<td> <a class="button" href="viewFoodBank.php?id=' . $foodbank->get_id() . '">'.$Language["View"].'</a></td>';
                                            }

                                        echo '</a></tr>';
                            }
                            echo '
                                    </tbody>
                                </table>
                            </div>';

                        } else {
                            echo '<div class="error-toast">'.$Language["Found_No_Results"].'</div>';
                        }
                    }
                    echo '<h3>'.$Language["Search"].'</h3>';
                }
            ?>
            <p><?=$Language["Use_the_form_below_to_find"]?></p>
            <div class="foodbank-search">
                <div class="search-fields">
                    <label for="county"><?=$Language["County"]?></label>
                    <input type="text" id="county" name="county" placeholder=<?=$Language["Enter_County"]?>>

                    <label for="zipCode"><?=$Language["Zip_Code"]?></label>
                    <input type="text" id="zipCode" name="zipCode" placeholder=<?=$Language["Enter_Zip_Code"]?>>

                   
                    <label for="tag"><em>* </em><?=$Language["Tag"]?></label>
                    <?php
                        $con=connect();

                        $resulting = mysqli_query($con, "SELECT tagID, tagText FROM dbTags");
                        $tagValue;
                        
                        echo "<html>";
                        echo "<body>";
                        echo "<select id='tag' name='tag'>";

                        if(($resulting->num_rows) <= 0){

                            echo '<option disabled>No Tags Available</option>';

                        }else{

                            echo '<option value="">Select A Tag</option>';

                            while ($row = $resulting->fetch_assoc()) {
                                $tagID = $row['tagID'];
                                $tagValue = $row['tagText']; 
                                echo '<option name= "tags" value="'.htmlspecialchars($tagValue).'">'.htmlspecialchars($tagValue).'</option>';
                            }

                            //if tag value is not selected
                          if(!$tagValue){
                            echo "Error: No tag selected.";
                          }
                        }
                        
                        echo "</select>";
                        echo "</body>";
                        echo "</html>";

                         

                        $selectedTag = filter_input(INPUT_GET, 'tag');
                        
                         //after search, get tag that's searched, get it's id, and get foodbanks from dbfbtags where it's connected
                        // if(isset($_GET['tag'])){
                        //     $result_tag=mysqli_query($con,"SELECT *
                        //     FROM dbTags b
                        //     INNER JOIN dbFBTags a
                        //     ON b.tagID = a.ID
                        //     INNER JOIN dbPersons c
                        //     ON c.id=a.userID");
                        //     while ($row = $result_tag->fetch_assoc()) {
                        //         if ($row['tagText']==$selectedTag){
                        //             $rowUser=$row['id'];
                        //             echo $rowUser;
                        //         }
                        //     }
                        // }

                          //mysqli_query($con, 'SELECT * FROM dbPersons WHERE tag ="'  . $selectedTag . '"');

                    ?>


                </div>
                <div class="submit-buttons">
                    <input type="submit" value=<?=$Language["Search"]?>>
                    
                    
                </div>
                
        
            </div>
        </div>    
        </form>
        <a href = "?lang=eng">English</a>
        <a href = "?lang=esp">Espanol</a>
        <a href = "?lang=dar">&#1583;&#1585;&#1740;</a>
        <?php
                        //if not logged in, display log in button
                        if (!isset($_SESSION['id']) && !isset($_SESSION['access_level'])) {
                            echo '<a class="button" href="login.php">Log In</a>';
                        }       
                    ?>
    </body>
</html>