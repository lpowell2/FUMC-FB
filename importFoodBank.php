<?php 
    require_once('include/input-validation.php');
    include_once('database/dbPersons.php');
    $con=connect();
    if(isset($_POST["Import"])){
        $filename=$_FILES["file"]["tmp_name"];

        if($_FILES["file"]["size"]>0){
            $file = fopen($filename,"r");
            while(($getData = fgetcsv($file,10000,","))!==FALSE){
                    $day = $getData[10];
                    $arry=array("(",")","-");
                    $phone=str_replace($arry,'', $getData[6]);
                    $name= $getData[0];
                    $namephone=$name . $phone;
                    $id=$namephone . $getData[1];
                    switch($day){
                        case "Sunday":
                            $sql = "INSERT into dbpersons (id,first_name,address,address2,city,state,zip,phone1,notes,alt_services,sundays_start,sundays_end,start_date,county,venue,email,position,type,status,password,schedule,hours)
                                values ('".$id."','".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$phone."','".$getData[8]."','".$getData[9]."','".$getData[11]."','".$getData[12]."','".$getData[17]."','".$getData[18]."','portland','".$id."','foodbank','volunteer','Active','fb','','')";
                                $result = mysqli_query($con, $sql);
                                break;
                        case "Monday":
                            $sql = "INSERT into dbpersons (id,first_name,address,address2,city,state,zip,phone1,notes,alt_services,mondays_start,mondays_end,start_date,county,venue,email,position,type,status,password,schedule,hours)
                            values ('".$id."','".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$phone."','".$getData[8]."','".$getData[9]."','".$getData[11]."','".$getData[12]."','".$getData[17]."','".$getData[18]."','portland','".$id."','foodbank','volunteer','Active','fb','','')";
                            $result = mysqli_query($con, $sql);
                            break;
                        case "Tuesday":
                            $sql = "INSERT into dbpersons (id,first_name,address,address2,city,state,zip,phone1,notes,alt_services,tuesdays_start,tuesdays_end,start_date,county,venue,email,position,type,status,password,schedule,hours)
                            values ('".$id."','".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$phone."','".$getData[8]."','".$getData[9]."','".$getData[11]."','".$getData[12]."','".$getData[17]."','".$getData[18]."','portland','".$id."','foodbank','volunteer','Active','fb','','')";
                            $result = mysqli_query($con, $sql);
                            break;
                        case "Wednesday":
                            $sql = "INSERT into dbpersons (id,first_name,address,address2,city,state,zip,phone1,notes,alt_services,wednesdays_start,wednesdays_end,start_date,county,venue,email,position,type,status,password,schedule,hours)
                            values ('".$id."','".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$phone."','".$getData[8]."','".$getData[9]."','".$getData[11]."','".$getData[12]."','".$getData[17]."','".$getData[18]."','portland','".$id."','foodbank','volunteer','Active','fb','','')";
                            $result = mysqli_query($con, $sql);
                            break;
                        case "Thursday":
                            $sql = "INSERT into dbpersons (id,first_name,address,address2,city,state,zip,phone1,notes,alt_services,thursdays_start,thursdays_end,start_date,county,venue,email,position,type,status,password,schedule,hours)
                            values ('".$id."','".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$phone."','".$getData[8]."','".$getData[9]."','".$getData[11]."','".$getData[12]."','".$getData[17]."','".$getData[18]."','portland','".$id."','foodbank','volunteer','Active','fb','','')";
                            $result = mysqli_query($con, $sql);
                            break;
                        case "Friday":
                            $sql = "INSERT into dbpersons (id,first_name,address,address2,city,state,zip,phone1,notes,alt_services,fridays_start,fridays_end,start_date,county,venue,email,position,type,status,password,schedule,hours)
                            values ('".$id."','".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$phone."','".$getData[8]."','".$getData[9]."','".$getData[11]."','".$getData[12]."','".$getData[17]."','".$getData[18]."','portland','".$id."','foodbank','volunteer','Active','fb','','')";
                            $result = mysqli_query($con, $sql);
                            break;
                        case "Saturday":
                            $sql = "INSERT into dbpersons (id,first_name,address,address2,city,state,zip,phone1,notes,alt_services,saturdays_start,saturdays_end,start_date,county,venue,email,position,type,status,password,schedule,hours)
                            values ('".$id."','".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$phone."','".$getData[8]."','".$getData[9]."','".$getData[11]."','".$getData[12]."','".$getData[17]."','".$getData[18]."','portland','".$id."','foodbank','volunteer','Active','fb','','')";
                            $result = mysqli_query($con, $sql);
                            break;
                        default:
                        echo "foodbank not added";
                    }
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

        
    