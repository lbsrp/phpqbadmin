<?php
//Session Information
session_start();
$sid = SID;
$dbinfo = array();
// Database Configuration Begins
$dbinfo['username'] = "root"; // MySQL user name
$dbinfo['password'] = "MySQLisAQu33n!"; // MySQL Password
$dbinfo['host'] = "localhost"; // MySQL Server Address
$dbinfo['dbname'] = "phpqbadmin"; // Database Name
$lang = "English"; // Set default language -- Currently only English is Supported
define('RESOURCES', 'C:/Program Files/fxserver-live/txData/QBCoreFramework/resources'); // Set Path to Resources Folder
//***** DO NOT MODIFY THESE VARIABLES *****//
define('VEHICLES',RESOURCES.'/[qb]/qb-core/shared/vehicles.lua');
define('ITEMS',RESOURCES.'/[qb]/qb-core/shared/items.lua');
define('GARAGES',RESOURCES.'/[qb]/qb-garages/config.lua');
define('SHOPS',RESOURCES.'/[qb]/qb-shops/config.lua');
$messages = array();
?>
