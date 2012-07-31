<?php

// Title:		Character
// Description:	Character class represents a D&D player character
// Author: 		David Hoyt

class Character {

	public $id;					// int
	public $name;				// string
	public $experience;			// int
	public $entities = array();	// Entity array
	public $attacks = array();	// Attack array

	public function fromJSON($JSON) {
		// Description:	Loads JSON values into character object
		// Parameters:
		//	$JSON (string, req, Default:none) - JSON encoded string with effect data
		$char = json_decode($JSON);

		// This seems like a silly way but it works...
		$this->id			= $char->id;
		$this->name			= $char->name;
		$this->experience	= $char->experience;
		$this->entities		= array();
		$this->attacks		= array();

		$i = 0;
		foreach ($char->entities as $entity) {
			$this->entities[$i]					= New Entity;
			$this->entities[$i]->id				= $entity->id;
			$this->entities[$i]->name			= $entity->name;
			$this->entities[$i]->sheetLocation	= $entity->sheetLocation;
			$this->entities[$i]->comment		= $entity->comment;
			$this->entities[$i]->effects		= array();
			
			$j = 0;
			foreach ($entity->effects as $effect) {
				$this->entities[$i]->effects[$j]				= New Effect;
				$this->entities[$i]->effects[$j]->id			= $effect->id;
				$this->entities[$i]->effects[$j]->effectType	= $effect->effectType;
				$this->entities[$i]->effects[$j]->effect		= $effect->effect;
				$this->entities[$i]->effects[$j]->valueType		= $effect->valueType;
				$this->entities[$i]->effects[$j]->value			= $effect->value;
				$this->entities[$i]->effects[$j]->modifierType	= $effect->modifierType;
				$this->entities[$i]->effects[$j]->isConditional	= $effect->isConditional;
				$this->entities[$i]->effects[$j]->condition		= $effect->condition;
				$j++;
			} // end loop Effects

			$i++;
		} // end loop entities
	}

	public function toJSON() {
		// Description:	Generates JSON packet from character object
		// Returns:		Returns JSON encoded string
		return json_encode($this);
	}

	public function save() {
		// Description:	Saves Character object to the database
		// Returns:		Boolean, True on success, False on failure
		return DataLibrary::saveCharacter($this);
	}

} // End class Character

?>