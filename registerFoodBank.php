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
    <title>Hunger Actions Coalition | Add Food Bank <?php if ($loggedIn) echo ' New Food Bank' ?></title>
</head>


<body>
    <?php
        require_once('header.php');
        require_once('domain/Person.php');
        require_once('database/dbPersons.php');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // make every submitted field SQL-safe except for password
            $ignoreList = array('password');
            $args = sanitize($_POST, $ignoreList);

            // echo "<p>The form was submitted:</p>";
            // foreach ($args as $key => $value) {
            //     echo "<p>$key: $value</p>";
            // }

            $required = array(
                'fb-name', 'phone', 'website', 'address', 'address2', 'city', 'county', 'state', 'zip', 'opnotes', 'adtl-services', 'tag',
                'available-sundays', 'available-mondays', 'available-tuesdays', 'available-wednesday', 'available-thursdays', 'available-fridays',
                'available-saturdays' 
            );

            $errors = false;
            if (!wereRequiredFieldsSubmitted($args, $required)) {
                //TODO put back error check, need to fix required fields
            }


            $fbName = $args['fb-name'];
           

            $phone = validateAndFilterPhoneNumber($args['phone']);
            if (!$phone) {
                $errors = true;
                echo 'bad phone';
            }

            $website = $args['website'];

            $address = $args['address'];

            if($args['address2'] == "" || $args['address2'] == null){
                $address2 = null;
            }else{
                $address2 = $args['address2'];
            }

            $city = $args['city'];

            $county = $args['county'];

            $state = $args['state'];
            if (!valueConstrainedTo($state, array('AK', 'AL', 'AR', 'AZ', 'CA', 'CO', 'CT', 'DC', 'DE', 'FL', 'GA',
                    'HI', 'IA', 'ID', 'IL', 'IN', 'KS', 'KY', 'LA', 'MA', 'MD', 'ME',
                    'MI', 'MN', 'MO', 'MS', 'MT', 'NC', 'ND', 'NE', 'NH', 'NJ', 'NM',
                    'NV', 'NY', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX',
                    'UT', 'VA', 'VT', 'WA', 'WI', 'WV', 'WY'))) {
                $errors = true;
            }
            $zipcode = $args['zip'];
            if (!validateZipcode($zipcode)) {
                $errors = true;
                echo 'bad zip';
            }
           
            //$notes = $args['opnotes'];

            if($args['opnotes'] == "" || $args['opnotes'] == null){
                $notes = null;
            }else{
                $notes = $args['opnotes'];
            }

            //$altServices = $args['adtl-services'];

            if($args['adtl-services'] == "" || $args['adtl-services'] == null){
                $altServices = null;
            }else{
                $altServices = $args['adtl-services'];
            }

            $tag = $args['tag'];
            if (!valueConstrainedTo($tag, ['Male', 'Female', 'Other'])) {
                $errors = true;
                echo 'bad tag';
            }

            $startDate = $args['frequency'];

            $days = array('sundays', 'mondays', 'tuesdays', 'wednesdays', 'thursdays', 'fridays', 'saturdays');
            $availability = array();
            $availabilityCount = 0;
            foreach ($days as $day) {
                if (isset($args['available-' . $day])) {
                    $startKey = $day . '-start';
                    $endKey = $day . '-end';
                    if (!isset($args[$startKey]) || !isset($args[$endKey])) {
                        $errors = true;
                    }
                    $start = $args[$startKey];
                    $end = $args[$endKey];
                    // $range24h = validate12hTimeRangeAndConvertTo24h($start, $end);
                    $range24h = null;
                    if (validate24hTimeRange($start, $end)) {
                        $range24h = [$start, $end];
                    }
                    if (!$range24h) {
                        $errors = true;
                        echo "bad $day availability";
                    }
                    $availability[$day] = $range24h;
                    $availabilityCount++;
                } else {
                    $availability[$day] = null;
                }
            }
            if ($availabilityCount == 0) {
                $errors = true;
                echo 'bad availability - none chosen';
            }
            $sundaysStart = '';
            $sundaysEnd = '';
            if ($availability['sundays']) {
                $sundaysStart = $availability['sundays'][0];
                $sundaysEnd = $availability['sundays'][1];
            }
            $mondaysStart = '';
            $mondaysEnd = '';
            if ($availability['mondays']) {
                $mondaysStart = $availability['mondays'][0];
                $mondaysEnd = $availability['mondays'][1];
            }
            $tuesdaysStart = '';
            $tuesdaysEnd = '';
            if ($availability['tuesdays']) {
                $tuesdaysStart = $availability['tuesdays'][0];
                $tuesdaysEnd = $availability['tuesdays'][1];
            }
            $wednesdaysStart = '';
            $wednesdaysEnd = '';
            if ($availability['wednesdays']) {
                $wednesdaysStart = $availability['wednesdays'][0];
                $wednesdaysEnd = $availability['wednesdays'][1];
            }
            $thursdaysStart = '';
            $thursdaysEnd = '';
            if ($availability['thursdays']) {
                $thursdaysStart = $availability['thursdays'][0];
                $thursdaysEnd = $availability['thursdays'][1];
            }
            $fridaysStart = '';
            $fridaysEnd = '';
            if ($availability['fridays']) {
                $fridaysStart = $availability['fridays'][0];
                $fridaysEnd = $availability['fridays'][1];
            }
            $saturdaysStart = '';
            $saturdaysEnd = '';
            if ($availability['saturdays']) {
                $saturdaysStart = $availability['saturdays'][0];
                $saturdaysEnd = $availability['saturdays'][1];
            }

            if ($errors) {
                echo '<p>Your form submission contained unexpected input.</p>';
                die();
            }

            $email=$fbName . $phone . $address;

            // need to incorporate availability here
            $newperson = new Person($fbName, " ", 'portland', 
                $address, $city, $state, $zipcode, "",
                $phone, null, null, null, $email, 
                null, null, "", "", "", "", "", 
                "", "volunteer", 'Active', null, "food bank", null,
                null, null, null, null, 
                $availability, '', '', 
                null, $startDate, null, $notes, "fb",
                $sundaysStart, $sundaysEnd, $mondaysStart, $mondaysEnd,
                $tuesdaysStart, $tuesdaysEnd, $wednesdaysStart, $wednesdaysEnd,
                $thursdaysStart, $thursdaysEnd, $fridaysStart, $fridaysEnd,
                $saturdaysStart, $saturdaysEnd, 0, "", 

                $address2, $county, $website, $altServices, $tag
            );

            $result = add_Person($newperson);

            if (!$result) {
                echo '<p>Failed to add food bank.</p>';
            } else {
                echo '<p>Food bank added successfully!</p>';
            }
        } else {
            require_once('addFoodBankForm.php'); 
        }
    ?>
</body>
</html>
