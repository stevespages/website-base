<?php
/*
 * admin.php
 *
 * also see the comments in site-config.php and admin-index-common.php
 *
 * the code relating to sessions implents password protection for the admin part of the site.
 */

session_start();

include_once "admin-index-common.php";
include_once "site-config.php";

$pageData->addCSS("");

//detects if a session has started. If not $_SESSION['valid'] set to "No"
if(!isset($_SESSION['valid'])) {
	$_SESSION['valid'] = "No";
}

//if login.php was posted the correct password it set $_SESSION['valid']="Yes"
if($_SESSION['valid'] == "Yes") {
	$contrl = getControllerName();
	//only include navigation links if logged in ie. not on the login page itself
	$pageData->content = include_once "views/admin/navigation.php";
	}	else {
			$contrl = "login";
		}

$pageData->title .= " Admin: $contrl";

$pageData->content .= include_once "controllers/admin/$contrl.php";

$page = include_once "views/page.php";

echo $page;
