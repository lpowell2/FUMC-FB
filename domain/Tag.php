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

class Person {
	private $id;         // id (unique key) = first_name . phone1
	private $start_date; // format: 99-03-12
	private $venue;      // portland or bangor
	private $first_name; // first name as a string
	private $last_name;  // last name as a string

	private $fbName;
	private $address;   // address - string
	private $address2;
	private $city;    // city - string
	private $county; //county - string
	private $state;   // state - string
	private $zip;    // zip code - integer
	private $website;
	private $altServices;
	private $tag;

  	private $profile_pic; // image link
	private $phone1;   // primary phone -- home, cell, or work
	private $phone1type; // home, cell, or work
	private $phone2;   // secondary phone -- home, cell, or work
	private $phone2type; // home, cell, or work
	private $birthday;     // format: 64-03-12
	private $email;   // email address as a string
	private $shirt_size;   // t-shirt size
	private $computer;   // computer - yes or no
	private $camera;   // camera - yes or no
	private $transportation;   // transportation - yes or no
	private $contact_name;   // emergency contact name
	private $contact_num;   // emergency cont. phone number
	private $relation;   // relation to emergency contact
	private $contact_time; //best time to contact volunteer
	private $cMethod;    // best contact method for volunteer (email, phone, text)
	private $position;    // job title or "student"
	private $credithours; // hours required if volunteering for academic credit; otherwise blank
	private $howdidyouhear;  // about RMH; internet, family, friend, volunteer, other (explain)
	private $commitment;  // App: "year" or "semester" (if student) or N/A (guest chef, events, or projects)
	private $motivation;   // App: why interested in RMH?
	private $specialties;  // special training or skills
	private $convictions;  // App: ever convicted of a felony?  "yes" or blank
	private $type;       // array of "volunteer", "weekendmgr", "sub", "guestchef", "events", "projects", "manager"
	private $access_level;
	private $status;     // a person may be "active" or "inactive"
	private $availability; // array of day:hours:venue triples; e.g., Mon:9-12:bangor, Sat:afternoon:portland
	private $schedule;     // array of scheduled shift ids; e.g., 15-01-05:9-12:bangor
	private $hours;        // array of actual hours logged; e.g., 15-01-05:0930-1300:portland:3.5
	private $notes;        // notes that only the manager can see and edit
	private $password;     // password for calendar and database access: default = $id
	// Volunteer availability start and end for each week day in 24h format, hh:mm
	private $sundaysStart;
	private $sundaysEnd;
	private $mondaysStart;
	private $mondaysEnd;
	private $tuesdaysStart;
	private $tuesdaysEnd;
	private $wednesdaysStart;
	private $wednesdaysEnd;
	private $thursdaysStart;
	private $thursdaysEnd;
	private $fridaysStart;
	private $fridaysEnd;
	private $saturdaysStart;
	private $saturdaysEnd;
	private $mustChangePassword;
	private $gender;


	//Person constructor; also construct food banks
	function __construct($e, $tag) {

		$this->id = $e;

		$this->tag = $ta;
	}




	

	function get_id() {
		return $this->id;
	}

	function get_tag() {
		return $this->tag;
	}

  
}