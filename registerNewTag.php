
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
                'tag' 
            );

            $errors = false;
            if (!wereRequiredFieldsSubmitted($args, $required)) {
                //TODO put back error check, need to fix required fields
            }


            $tag = $args['tag'];
           

            

            // need to incorporate availability here
            $newTag = new Tag($tag);

            $result = add_Person($newperson);

            if (!$result) {
                echo '<div class="error-toast"><p>Failed to add food bank.</p></div>';
            } else {
                echo '<div class="happy-toast"<p>Food bank added successfully!</p></div>';
                Header("refresh:3;url=index.php");
                
            }   
        } else {
            require_once('addTagForm.php'); 
        }
    ?>
</body>
</html>