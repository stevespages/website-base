<?php
/*
 * admin-index-common.php
 *
 * this file contains information required by both admin.php and index.php. The information is not site specific
 *
 * the Page_Data class sets up variables to handle different aspects of the pages that will be displayed by index.php and admin.php.
 *
 * both the admin and public (index.php) parts of the site are based on the MVC. $contrl is assigned a value either from GET query strings generated from anchor elements or from the action attribute of forms. The value of $contrl is used to access files which have the same name and to append to the value of the title element. So, in admin.php we have $pageData->content .= include_once "controllers/admin/$contrl.php" whereas in index.php we have $pageData->content .= include_once "controllers/$contrl.php".
 */

//put error reporting statements here (will come after session_start() in admin.php). These should be commented out on going to production

include_once "models/Page_Data.class.php";

//this function returns the name of the controller file. Same name is used for navigation href values and in title elements.
function getControllerName() {
		//Determines if a navigation link was clicked
	$navigationIsClicked = isset( $_GET['page'] );
	if ( $navigationIsClicked ) {
    	//prepare to load corresponding controller
    	$contrl = $_GET['page'];
	} else {
    	//prepare to load default controller
    	$contrl = "home";
	}
	return $contrl;
}
 
$pageData = new Page_Data();
