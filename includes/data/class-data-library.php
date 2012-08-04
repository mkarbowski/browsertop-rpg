<?php
// Title:		DataLibrary
// Description:	Data layer stores data to MySQL database from php objects, and converts MySQL date into php objects
// Author: 		David Hoyt

class DataLibrary {

	public static function fetchCategoryOpts($cat, $constraint = NULL) {
		// Description:	Loads options from database into array of strings
		// Parameters:
		//	$cat (string, req, Default:none) - String representing the category list to populate
		//	$constraint (string, opt, Default:NULL) - Extra contraint in MySQL query format
		// Returns:		1D array of strings where the keys are the option id and the values are the option name

		// Access global connection object
		global $mysqli;

		// Determine correct table
		switch ($cat) {
			case "effect types":
				$catTbl = TBLPREFIX . "c_effect_type";
				break;
			case "effects":
				$catTbl = TBLPREFIX . "c_effect";
				break;
			case "effect value types":
				$catTbl = TBLPREFIX . "c_effect_value_type";
				break;
			case "modifier types":
				$catTbl = TBLPREFIX . "c_modifier_type";
				break;
			case "sheet locations":
				$catTbl = TBLPREFIX . "c_sheet_location";
				break;
			default:
				return False;
		}

		// Initialize array
		$opts = array();

		// Query db
		if (!is_null($constraint)) {
			$query = "SELECT * FROM `$catTbl` WHERE (`id` > 1) AND ($constraint) ORDER BY `order` ASC";
		} else {
			$query = "SELECT * FROM `$catTbl` WHERE `id` > 1 ORDER BY `order` ASC";
		}
		$result	= $mysqli->query($query);

		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$id			= $row["id"];
			$order		= $row["order"];
			$name		= $row["name"];
			$opts[$id]	= array("order" => $order, "name" => $name);
		}

		// Free result object
		$result->free();

		return $opts;
	}

	public static function saveUser($user) {
		// Description:	Saves user object to the database
		// Parameters:
		//	$user (User, req, Default:none) - User object to save
		// Returns:		Boolean, true on success, false on failure
	}

	public static function fetchUser($id) {
		// Description:	Loads user object from the database
		// Parameters:
		//	$id (int, req, Default:none) - The sql id of the user to load
		// Returns:		User object
	}

	public static function saveCharacter($char) {
		// Description:	Saves character object to the database
		// Parameters:
		//	$char (Character, req, Default:none) - Character object to be saved
		// Returns:		Boolean, true on success, false on failure
	}

	public static function fetchCharacter($id) {
		// Description:	Loads character object from the database
		// Parameters:
		//	$id (int, req, Default:none) - The sql id of the character to load
		// Returns:		Character object

		// Access global connection object
		global $mysqli;

		// Initialize object
		$char = New Character;

		// Query db for character properties
		$query	= "SELECT * FROM `rpg_character` WHERE `id` = $id";
		$result	= $mysqli->query($query);

		// Set object values
		$row				= $result->fetch_array(MYSQLI_ASSOC);
		$char->id			= $id;
		$char->name			= $row["name"];
		$char->experience	= $row["experience"];

		// Free result object
		$result->free();

		// Query db for associated entities
		$query	= "SELECT `id` FROM `rpg_entity` WHERE `linked_character` = $id";
		$result	= $mysqli->query($query);

		// Fetch entity for each id
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$char->entities[] = self::fetchEntity($row["id"]);
		}

		// Free result object
		$result->free();

		return $char;
	}

	public static function saveEntity($entity) {
		// Description:	Saves entity object to the database
		// Parameters:
		//	$entity (Entity, req, Default:none) - Entity object to be saved
		// Returns:		Boolean, true on success, false on failure
	}

	public static function fetchEntity($id) {
		// Description:	Loads entity object from the database
		// Parameters:
		//	$id (int, req, Default:none) - The sql id of the entity to load
		// Returns:		Entity object

		// Access global connection object
		global $mysqli;

		// Initialize object
		$entity = New Entity;

		// Query db for character properties
		$tbl = TBLPREFIX . "entity";
		$query	= "SELECT * FROM `$tbl` WHERE `id` = $id";
		$result	= $mysqli->query($query);

		// Set object values
		$row					= $result->fetch_array(MYSQLI_ASSOC);
		$entity->id				= $id;
		$entity->name			= $row["name"];
		$entity->sheetLocation	= $row["sheet_location"];
		$entity->comment		= $row["comment"];

		// Free result object
		$result->free();

		// Query db for associated entities
		$tbl = TBLPREFIX . "entity_effect";
		$query	= "SELECT `id` FROM `$tbl` WHERE `linked_entity` = $id";
		$result	= $mysqli->query($query);

		// Fetch entity for each id
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$entity->effects[] = self::fetchEffect($row["id"]);
		}

		// Free result object
		$result->free();

		return $entity;
	}

	public static function saveEffect($effect) {
		// Description:	Saves effect object to the database
		// Parameters:
		//	$effect (Effect, req, Default:none) - Effect object to be saved
		// Returns:		Boolean, true on success, false on failure
	}

	public static function fetchEffect($id) {
		// Description:	Loads effect object from the database
		// Parameters:
		//	$id (int, req, Default:none) - The sql id of the effect to load
		// Returns:		Effect object

				// Access global connection object
		global $mysqli;

		// Initialize object
		$effect = New Effect;

		// Query db for character properties
		$tbl = TBLPREFIX . "entity_effect";
		$query	= "SELECT * FROM `$tbl` WHERE `id` = $id";
		$result	= $mysqli->query($query);

		// Set object values
		$row					= $result->fetch_array(MYSQLI_ASSOC);
		$effect->id				= $id;
		$effect->effectType		= $row["effect_type"];
		$effect->effect			= $row["effect"];
		$effect->valueType		= $row["value_type"];
		$effect->value			= $row["value"];
		$effect->modifierType	= $row["mod_type"];
		$effect->isConditional	= (bool)$row["is_conditional"];
		$effect->condition		= $row["condition"];

		// Free result object
		$result->free();

		return $effect;
	}

	public static function saveAttack($attack) {
		// Description:	Saves attack object to the database
		// Parameters:
		//	$attack (Attack, req, Default:none) - Attack object to be saved
		// Returns:		Boolean, true on success, false on failure
	}

	public static function fetchAttack($id) {
		// Description:	Loads attack object from the database
		// Parameters:
		//	$id (int, req, Default:none) - The sql id of the attack to load
		// Returns:		Attack object
	}

} // End class DataLibrary

?>