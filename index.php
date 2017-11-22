<?php
/*
 * index.php
 *
 * also see the comments in site-config.php and admin-index-common.php
 */

include_once "admin-index-common.php";
include_once "site-config.php"; 

$pageData->addCSS("");

$contrl = getControllerName();

$pageData->content = include_once "views/navigation.php";

$pageData->title .= ": $contrl";

$pageData->content .= include_once "controllers/$contrl.php";	
	
$page = include_once "views/page.php";

echo $page;
