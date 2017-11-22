<?php
/**
 * views/navigation.php
 *
 * The href attribute value for the home page anchor element does
 * not have a query string. Maybe it should have and it should be '?page=home'?
 *
 * Query strings for other anchor elements are named 'page' and their values are the name
 * of the controller php file they call on. The values are also used as part of the content
 * for page title elements.
 *
 */

$navigation =	"<p><nav id='navigation'>
					<a href='index.php'>Home</a> | 
					<a href='index.php?page=page-1'>Page 1</a> | 
					<a href='index.php?page=page-2'>Page 2</a> | 
					</p></nav>";

return $navigation;
