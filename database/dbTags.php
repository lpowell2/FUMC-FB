<?php
/*
 * Copyright 2013 by Jerrick Hoang, Ivy Xing, Sam Roberts, James Cook, 
 * Johnny Coster, Judy Yang, Jackson Moniaga, Oliver Radwan, 
 * Maxwell Palmer, Nolan McNair, Taylor Talmage, and Allen Tucker. 
 * This program is part of RMH Homebase, which is free software.  It comes with 
 * absolutely no warranty. You can redistribute and/or modify it under the terms 
 * of the GNU General Public License as published by the Free Software Foundation
 * (see <http://www.gnu.org/licenses/ for more information).
 * 
 */

/**
 * @version March 1, 2012
 * @author Oliver Radwan and Allen Tucker
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

function add_tag($tag) {

    //id = " " will be autoincremented by table
    $id = " ";

    if (!$tag instanceof Tag)
        die("Error: add_tag type mismatch");
    $con=connect();
    $query = "SELECT * FROM dbTags WHERE tag = '" . $tag->get_tag() . "'";
    $result = mysqli_query($con,$query);
    //if there's no entry for this id, add it, if tag already exists result is > 0
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_query($con,'INSERT INTO dbTags VALUES("' .
            $id . '","' .
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