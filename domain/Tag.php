<?php
/*
 * Copyright 2013 by Allen Tucker. 
 * This program is part of RMHC-Homebase, which is free software.  It comes with 
 * absolutely no warranty. You can redistribute and/or modify it under the terms 
 * of the GNU General Public License as published by the Free Software Foundation
 * (see <http://www.gnu.org/licenses/ for more information).
 * 
 */

/*
 * 
 */

//unsure if this is needed, leftover from Persons.php, but these do not necessarily need their own access levels
$accessLevelsByRole = [
	'volunteer' => 1,
	'admin' => 2,
	'superadmin' => 3
];

class Tag {
	private $tagID;
	private $tag;



	//Person constructor; also construct food banks
	function __construct( $ta) {
		//$this->tagID = $id;
		$this->tag = $ta;
	}

	function get_tag() {
		return $this->tag;
	}
	function get_id(){
		return $this->tagID;
	}

  
}
?>