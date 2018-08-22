<?php
###########################################################
/*
GuestBook Script
Copyright (C) StivaSoft ltd. All rights Reserved.



/* Define MySQL connection details and database table name */ 
$SETTINGS["hostname"] = 'localhost';
$SETTINGS["mysql_user"] = 'adminweb';
$SETTINGS["mysql_pass"] = '9l0tIHgHft6g';
$SETTINGS["mysql_database"] = 'negocioweb';
$SETTINGS["USERS"] = 'php_users_login'; // this is the default table name that we used

/* Connect to MySQL */
$connection = mysql_connect($SETTINGS["hostname"], $SETTINGS["mysql_user"], $SETTINGS["mysql_pass"]) or die ('Unable to connect to MySQL server.<br ><br >Please make sure your MySQL login details are correct.');
$db = mysql_select_db($SETTINGS["mysql_database"], $connection) or die ('request "Unable to select database."');
?>