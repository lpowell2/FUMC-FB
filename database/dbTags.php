<?php
/*
 * This program is based off of the RMH codebase.
 */

/**
 * @version November 13, 2023
 * @author Sarah Harrington and Nick Annunziata
 */
include_once('dbinfo.php');
include_once(dirname(__FILE__).'/../domain/Tag.php');


function make_a_tag($result_row) {
	/*
	 ($f, $l, $v, $a, $c, $s, $z, $p1, $p1t, $p2, $p2t, $e, $ts, $comp, $cam, $tran, $cn, $cpn, $rel,
			$ct, $t, $st, $cntm, $pos, $credithours, $comm, $mot, $spe,
			$convictions, $av, $sch, $hrs, $bd, $sd, $hdyh, $notes, $pass)
	 */

    $theTag = new Tag(
                    $result_row['id'],

                    $result_row['tag']
                );   
    return $theTag;
}



/*
 * add a person to dbPersons table: if already there, return false
 * essentially creating a new Person object
 */
function create_tag($tag) {
    $connection = connect();
    $tagText = $tag;
    $query = "
        insert into dbTags (tagText)
        values ('$tagText')
    ";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        return null;
    }
    $id = mysqli_insert_id($connection);
    mysqli_commit($connection);
    mysqli_close($connection);
    return $id;
}

function make_tag($result_row){


}

function add_tag($tag) {

    //id will autoincrement in table
    $id = " ";
    
    if (!$tag instanceof Tag)
        die("Error: add_tag type mismatch, not an instance of Tag");
    $con=connect();
    $query = "SELECT * FROM dbTags WHERE tagText = '" . $tag->get_tag() . "'";
    $result = mysqli_query($con,$query);
    //if there's no entry for this id, add it
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_query($con,'INSERT INTO dbTags VALUES("' .
            $id. '","' .
            $tag->get_tag() . 
            '");'
        );							
        mysqli_close($con);
        return true;
    }
    mysqli_close($con);
    return false;
}


/*
 * remove a tag from dbTags table.  If already there, return false
 */

function remove_tag($id) {
    $con=connect();
    $query = 'SELECT * FROM dbTags WHERE id = "' . $id . '"';
    $result = mysqli_query($con,$query);
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_close($con);
        return false;
    }
    $query = 'DELETE FROM dbTags WHERE id = "' . $id . '"';
    $result = mysqli_query($con,$query);
    mysqli_close($con);
    return true;
}

/*
 * @return a Tag from dbTags table matching a particular id.
 * if not in table, return false
 */

function retrieve_tag($id) {
    $con=connect();
    $query = "SELECT * FROM dbTags WHERE id = '" . $id . "'";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) !== 1) {
        mysqli_close($con);
        return false;
    }
    $result_row = mysqli_fetch_assoc($result);
    // var_dump($result_row);
    $theTag = make_a_tag($result_row);
//    mysqli_close($con);
    return $theTag;
}