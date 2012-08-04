<?php
// Title:		JSON from data
// Description:	Prints a JSON encoded object from stored data
// Options:
//	type (REQUEST) - The type of object to query from db. Determines the fetch function to use.
//	id (REQUEST) - The db id of the stored object.
// Author: 		David Hoyt

$navLvl = "../../";

// Include program files
include $navLvl."includes/db-config.php";		// MySQL connection config
include $navLvl."includes/data/layer.php";		// Entire data layer
include $navLvl."includes/business/layer.php";	// Entire business layer

// Establish connection with MySQL database
$mysqli = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

// Set arguments from request (either get or post)
if (isset($_REQUEST["type"])) $objType = $_REQUEST["type"];
else $objType = NULL;
if (isset($_REQUEST["id"])) $id = $_REQUEST["id"];
else $id = NULL;

// Build object from database
switch ($objType) {
	case 'character':
		$obj = DataLibrary::fetchCharacter($id);
		break;
	case 'entity':
		$obj = DataLibrary::fetchEntity($id);
		break;
	case 'effect':
		$obj = DataLibrary::fetchEffect($id);
		break;
	default:
		// Error
		break;
}

// Write JSON object
echo $obj->toJSON();

// Close connection with MySQL database
$mysqli->close();
?>