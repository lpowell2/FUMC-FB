<?php
                if (isset($_POST['submit'])) {
                    require_once('include/input-validation.php');

                    $con = connect();
                    $query = 'DELETE FROM dbTags WHERE tagID = "' . $_POST['id'] . '"';
                    $resulting = mysqli_query($con, $query);
                    header("Location: viewtags.php");
                }
                ?>