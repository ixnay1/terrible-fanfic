<?php
/*
Page:           _config-rating.php
Created:        Aug 2006
Last Mod:       Mar 18 2007
Holds info for connecting to the db, and some other vars
--------------------------------------------------------- 
ryan masuga, masugadesign.com
ryan@masugadesign.com 
--------------------------------------------------------- */

	//Connect to  your rating database
	$rating_dbhost        = 'localhost';
	$rating_dbuser        = 'kaction_kaction';
	$rating_dbpass        = 'kaction0548';
	$rating_dbname        = 'kaction_com';
	$rating_tableName     = 'bff_ratings';
	$rating_path_db       = ''; // the path to your db.php file (not used yet!)
	$rating_path_rpc      = ''; // the path to your rpc.php file (not used yet!)
	
	$rating_unitwidth     = 16; // the width (in pixels) of each rating unit (star, etc.)
	// if you changed your graphic to be 50 pixels wide, you should change the value above
	
$rating_conn = mysql_connect($rating_dbhost, $rating_dbuser, $rating_dbpass) or die  ('Error connecting to mysql');
	//mysql_select_db($rating_dbname);

?>