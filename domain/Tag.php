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
 * Created on Mar 28, 2008
 * @author Oliver Radwan <oradwan@bowdoin.edu>, Sam Roberts, Allen Tucker
 * @version 3/28/2008, revised 7/1/2015
 */

$accessLevelsByRole = [
	'volunteer' => 1,
	'admin' => 2,
	'superadmin' => 3
];

class Tag {
	//private $id;
	private $tag;



	//Person constructor; also construct food banks
	function __construct($ta) {


		//tag value
		$this->tag = $ta;
	}

	function get_tag() {
		return $this->tag;
	}

  
}