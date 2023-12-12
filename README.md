# FUMC Food Bank Search and Management Site (VMS)
## Purpose
This project is the result of one semester of collaboration among UMW students. The goal of the project was to create a web application that Fredericksburg United Methodist Church (FUMC) and the Hunger Actions Coaltiion (HAC) could use to provide food bank information to those in need of food services. At-a-glance features include a search page, and the ability for FUMC/HAC administrators to maintain a database of food banks.

## Authors
The VMS is based on an old open source project named "Homebase". [Homebase](https://a.link.will.go.here/) was originally developed for the Ronald McDonald Houses in Maine and Rhode Island by Oliver Radwan, Maxwell Palmer, Nolan McNair, Taylor Talmage, and Allen Tucker.

Modifications to the original Homebase code were made by the Fall 2022 semester's group of students. That team consisted of Jeremy Buechler, Rebecca Daniel, Luke Gentry, Christopher Herriott, Ryan Persinger, and Jennifer Wells. Further modifications were made by the Spring 2023 semester group.  This team consisted of Lauren Knight, Zack Burnley, Matt Nguyen, Rishi Shankar, Alip Yalikun, and Tamra Arant.

Another major overhaul to the existing system took place during the Fall 2023 semester, throwing out and restructuring many of the existing database tables to accomodate the requests of the new client, Fredericksburg United Methodist Church. This team consisted of Nick Annunziata, James Cochran, Genevieve Jones, Grace Ordonez, and Sarah Harrington. Nearly every page and feature of the app was changed by this team, including the addition of new pages and removal of existing ones.

## User Types
There are three types of users (also referred to as 'roles') within the VMS.
* General Users
* Admins
* SuperAdmins

General users can only utilize the search functionality available on the landing page of this site.

Admin and SuperAdmins have the ability to manage users, generate reports, assign users to events, reset user passwords, and modify a user's status.

Only a SuperAdmin can modify a user's access level, create new admin accounts, and remove admin accounts.

There is also a root admin account with username 'vmsroot'. The default password for this account is 'vmsroot', but it must be changed upon initial log in. This account has hardcoded SuperAdmin privileges but cannot be assigned to events and does not have a user profile. It is crucial that this account be given a strong password and that the password be easily remembered, as it cannot easily be reset. This account should be used for system administration purposes only.

## Features
Below is an in-depth list of features that were implemented within the system
* User registration and log in
* Dashboard
* User Management
  * Change own password
  * Modify profile
  * Modify user status (Super Admin only)
  * Modify user role (AKA access level) (Super Admin only)
  * Reset password (Admin/Super Admin only)
  * User search (Super Admin only)
  * Add and delete admin accounts (Super Admin only)
* Food Bank Information Management
  * Add food banks to the system
  * Edit food bank information existing in the system
  * Delete food banks from the system
  * Multiple tags can be associated with a food bank entry
* Tags
  * Tags can be added and deleted 
* Upload from File
  * Upload food banks into system from a csv file
* Change search page language
  * Landing search page language can be changed to Spanish or Dari
* Search For Food Banks
  * Criteria can be input to search the system for food banks

### Video Tour of Features
A video demo of the system's features is available as an unlisted YouTube video. Please contact Dr. Polack for access to the video.

## Design Documentation
Several types of diagrams describing the design of the VMS, including sequence diagrams and use case diagrams, are available. Please contact Dr. Polack for access.

## "localhost" Installation
Below are the steps required to run the project on your local machine for development and/or testing purposes.
1. [Download and install XAMPP](https://www.apachefriends.org/download.html)
2. Open a terminal/command prompt and change directory to your XAMPP install's htdocs folder
  * For Mac, the htdocs path is `/Applications/XAMPP/xamppfiles/htdocs`
  * For Ubuntu, the htdocs path is `/opt/lampp/htdocs/`
  * For Windows, the htdocs path is `C:\xampp\htdocs`
3. Clone the VMS repo by running the following command: `git clone https://github.com/lpowell2/FUMC-FB`
4. Start the XAMPP MySQL server and Apache server
5. Open the PHPMyAdmin console by navigating to [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/)
6. Create a new database named `homebasedb`. With the database created, navigate to it by clicking on it in the lefthand pane
7. Import the `vms.sql` file located in `htdocs/FUMC-FB/sql` into this new database
8. Create a new user by navigating to `Privileges -> New -> Add user account`
9. Enter the following credentials for the new user:
  * Name: `homebasedb`
  * Hostname: `Local`
  * Password: `homebasedb`
  * Leave everything else untouched
10. Navigate to [http://localhost/FUMC-FB/login.php](http://localhost/FUMC-FB/login.php) 
11. Log into the root user account using the username `vmsroot` with password `vmsroot`
12. Change the root user password to a strong password

Installation is now complete.

## Reset root user credentials
In the event of being locked out of the root user, the following steps will allow resetting the root user's login credentials:
1. Using the PHPMyAdmin console, delete the `vmsroot` user row from the `dbPersons` table
2. Clear the SiteGround dynamic cache [using the steps outlined below](#clearing-the-siteground-cache)
3. Navigate to gwyneth/insertAdmin.php. You should see a message that says `ROOT USER CREATION SUCCESS`
4. You may now log in with the username and password `vmsroot`

## Platform
Dr. Polack chose SiteGround as the platform on which to host the project. Below are some guides on how to manage the live project.

### SiteGround Dashboard
Access to the SiteGround Dashboard requires a SiteGround account with access. Access is managed by Dr. Polack.

### Remoting into SiteGround via SSH
Terminal access is required to easily update the code on the live website.

Below are the steps needed to gain terminal access to the SiteGround virtual machine.
1. Within the SiteGround dashboard, click "Devs -> SSH Keys Manager"
2. Create a new SSH key using the form
  * Provide a memorable string as the Key Name
  * Provide a strong password. This cannot be retrieved, so be sure to remember it
3. The new key will appear below the form, under 'Manage SSH Keys'. Click the '...' under Actions and choose 'Private Key'

The following steps are for Mac and Linux users:

5. Copy the key and save it somewhere on your system, such as your home directory. Remember the filename you save it as
6. Click '...' under Actions again. This time, choose 'SSH Credentials'
7. Note the hostname, username, and port number
8. Run the following command: `ssh -i KEYFILENAME USERNAME@HOSTNAME -pPORT`, with `KEYFILENAME`, `USERNAME`, `HOSTNAME`, and `PORT` being replaced with the information you obtained in the steps above
9. Enter the password for the account that you created in step 3
10. You now have SSH access into SiteGround
11. The repo is located in `~/www/SITEGROUNDURL/public-html/FUMC_FB/`, where `SITEGROUNDURL` is the domain of the SiteGround website

On PC, use the following tutorial to set up SSH access:
[https://www.siteground.com/tutorials/ssh/putty/](https://www.siteground.com/tutorials/ssh/putty/)

### Clearing the SiteGround cache
There may occasionally be a hiccup if the caching system provided by SiteGround decides to cache one of the application's pages in an erroneous way. The cache can be cleared via the Dashboard by navigating to Speed -> Caching on the lefthand side of the control panel, choosing the DYNAMIC CACHE option in the center of the screen, and then clicking the Flush Cache option with a small broom icon under Actions.

## External Libraries and APIs
The only outside library utilized by the VMS is the jQuery library. The version of jQuery used by the system is stored locally within the repo, within the lib folder. jQuery was used to implement form validation and the hiding/showing of certain page elements.

## Potential Improvements
Below is a list of improvements that could be made to the system in subsequent semesters.
* The system has remaining functionalities that were not completed this semester. These include:
  * adding, editing, and deleting events
  * searching by multiple criteria
* The landing search page could be improved, such as removing the logo's white background.

## License
The project remains under the [GNU General Public License v3.0](https://www.gnu.org/licenses/gpl.txt).

## Acknowledgements
Thank you to Dr. Polack and Trish/ FUMC for the chance to work on this exciting project. A lot of love went into making it!
