<?php 
    require_once('include/input-validation.php');
    include_once('database/dbPersons.php');
    $con=connect();
    if(isset($_POST["Import"])){
        $filename=$_FILES["file"]["tmp_name"];

        /* reading in file */
        if($_FILES["file"]["size"]>0){
            $file = fopen($filename,"r");
            while(($getData = fgetcsv($file,10000000,","))!==FALSE){
                    $day = $getData[10];
                    /* getting rid of (,), and - in phone number field */
                    $arry=array("(",")","-"," ");
                    $phone=str_replace($arry,'', $getData[6]);
                    /* creating id from food bank name, phone #, and address and parsing apostrophes (') from name and notes */
                    $name= $getData[0];
                    $parsename=str_replace("'","", $name);
                    $notes=str_replace("'","",$getData[8]);
                    $namephone=$parsename . $phone;
                    $id=$namephone . $getData[1];
                    var_dump($id);

                    /* checking if id is in database */
                    $sql = "SELECT id FROM dbpersons WHERE id='$id'";
                    $idresult = mysqli_query($con,$sql);
                    
                    /* updating only the days and times of foodbanks already in the database */
                    if(mysqli_num_rows($idresult) >0){
                        switch($day){
                            case "Sunday":
                                $sql = "UPDATE dbpersons SET sundays_start = '".$getData[11]."', sundays_end = '".$getData[12]."' WHERE id = '".$id."'";
                                $result = mysqli_query($con, $sql);
                                break;
                            case "Monday":
                                $sql = "UPDATE dbpersons SET mondays_start = '".$getData[11]."', mondays_end = '".$getData[12]."' WHERE id = '".$id."'";
                                $result = mysqli_query($con, $sql);
                                break;
                            case "Tuesday":
                                $sql = "UPDATE dbpersons SET tuesdays_start = '".$getData[11]."', tuesdays_end = '".$getData[12]."' WHERE id = '".$id."'";
                                $result = mysqli_query($con, $sql);
                                break;
                            case "Wednesday":
                                $sql = "UPDATE dbpersons SET wednesdays_start = '".$getData[11]."', wednesdays_end = '".$getData[12]."' WHERE id = '".$id."'";
                                $result = mysqli_query($con, $sql);
                                break;
                            case "Thursday":
                                $sql = "UPDATE dbpersons SET thursdays_start = '".$getData[11]."', thursdays_end = '".$getData[12]."' WHERE id = '".$id."'";
                                $result = mysqli_query($con, $sql);
                                break;
                            case "Friday":
                                $sql = "UPDATE dbpersons SET fridays_start = '".$getData[11]."', fridays_end = '".$getData[12]."' WHERE id = '".$id."'";
                                $result = mysqli_query($con, $sql);
                                break;
                            case "Saturday":
                                $sql = "UPDATE dbpersons SET saturdays_start = '".$getData[11]."', saturdays_end = '".$getData[12]."' WHERE id = '".$id."'";
                                $result = mysqli_query($con, $sql);
                                break;
                            default:
                                echo "foodbank not added";
                        }
                    /* food bank not already in the database added based off of time and day of the week */
                    }else{
                        switch($day){
                            case "Sunday":
                                /* inserting new foodbank into database */
                                $sql = "INSERT into dbpersons (id,first_name,address,address2,city,state,zip,phone1,notes,alt_services,sundays_start,sundays_end,start_date,county,venue,email,position,type,status,password,schedule,hours)
                                values ('".$id."','".$parsename."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$phone."','".$notes."','".$getData[9]."','".$getData[11]."','".$getData[12]."','".$getData[17]."','".$getData[18]."','portland','".$id."','foodbank','volunteer','Active','fb','','')";
                                $result = mysqli_query($con, $sql);
                                break;
                            case "Monday":
                                $sql = "INSERT into dbpersons (id,first_name,address,address2,city,state,zip,phone1,notes,alt_services,mondays_start,mondays_end,start_date,county,venue,email,position,type,status,password,schedule,hours)
                                values ('".$id."','".$parsename."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$phone."','".$notes."','".$getData[9]."','".$getData[11]."','".$getData[12]."','".$getData[17]."','".$getData[18]."','portland','".$id."','foodbank','volunteer','Active','fb','','')";
                                $result = mysqli_query($con, $sql);
                                break;
                            case "Tuesday":
                                $sql = "INSERT into dbpersons (id,first_name,address,address2,city,state,zip,phone1,notes,alt_services,tuesdays_start,tuesdays_end,start_date,county,venue,email,position,type,status,password,schedule,hours)
                                values ('".$id."','".$parsename."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$phone."','".$notes."','".$getData[9]."','".$getData[11]."','".$getData[12]."','".$getData[17]."','".$getData[18]."','portland','".$id."','foodbank','volunteer','Active','fb','','')";
                                $result = mysqli_query($con, $sql);
                                break;
                            case "Wednesday":
                                $sql = "INSERT into dbpersons (id,first_name,address,address2,city,state,zip,phone1,notes,alt_services,wednesdays_start,wednesdays_end,start_date,county,venue,email,position,type,status,password,schedule,hours)
                                values ('".$id."','".$parsename."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$phone."','".$notes."','".$getData[9]."','".$getData[11]."','".$getData[12]."','".$getData[17]."','".$getData[18]."','portland','".$id."','foodbank','volunteer','Active','fb','','')";
                                $result = mysqli_query($con, $sql);
                                break;
                            case "Thursday":
                                $sql = "INSERT into dbpersons (id,first_name,address,address2,city,state,zip,phone1,notes,alt_services,thursdays_start,thursdays_end,start_date,county,venue,email,position,type,status,password,schedule,hours)
                                values ('".$id."','".$parsename."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$phone."','".$notes."','".$getData[9]."','".$getData[11]."','".$getData[12]."','".$getData[17]."','".$getData[18]."','portland','".$id."','foodbank','volunteer','Active','fb','','')";
                                $result = mysqli_query($con, $sql);
                                break;
                            case "Friday":
                                $sql = "INSERT into dbpersons (id,first_name,address,address2,city,state,zip,phone1,notes,alt_services,fridays_start,fridays_end,start_date,county,venue,email,position,type,status,password,schedule,hours)
                                values ('".$id."','".$parsename."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$phone."','".$notes."','".$getData[9]."','".$getData[11]."','".$getData[12]."','".$getData[17]."','".$getData[18]."','portland','".$id."','foodbank','volunteer','Active','fb','','')";
                                $result = mysqli_query($con, $sql);
                                break;
                            case "Saturday":
                                $sql = "INSERT into dbpersons (id,first_name,address,address2,city,state,zip,phone1,notes,alt_services,saturdays_start,saturdays_end,start_date,county,venue,email,position,type,status,password,schedule,hours)
                                values ('".$id."','".$parsename."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$phone."','".$notes."','".$getData[9]."','".$getData[11]."','".$getData[12]."','".$getData[17]."','".$getData[18]."','portland','".$id."','foodbank','volunteer','Active','fb','','')";
                                $result = mysqli_query($con, $sql);
                                break;
                            /* ability to add foodbanks without days or times */
                            //case "":
                                //$sql = "INSERT into dbpersons (id,first_name,address,address2,city,state,zip,phone1,notes,alt_services,start_date,county,venue,email,position,type,status,password,schedule,hours)
                                //values ('".$id."','".$parsename."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$phone."','".$notes."','".$getData[9]."','".$getData[17]."','".$getData[18]."','portland','".$id."','foodbank','volunteer','Active','fb','','')";
                                //$result = mysqli_query($con, $sql);
                                //break;
                            default:
                                echo "foodbank not added";
                        }
                    }
                    /* pop up results */
                    if(!isset($result)){
                        echo "<script type=\"text/javascript\">
                        alert(\"Invalid File:Please Upload CSV File.\");
                        window.location = \"index.php\"
                        </script>";    

                    } else {
                        echo "<script type=\"text/javascript\">
                        alert(\"CSV File has been successfully Imported.\");
                        window.location = \"index.php\"
                        </script>";
                    }
            }
            fclose($file); 
        }
    }
?>

        
    