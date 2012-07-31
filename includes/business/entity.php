<?php

// Title:		Entity
// Description:	Entity class represents a D&D entity
// Author: 		David Hoyt

class Entity {

	public $id;					// int
	public $name;				// string
	public $sheetLocation;		// int
	public $comment;			// string
	public $effects = array();	// Effects array

	public function fromJSON() {
		// Description:	Loads JSON values into entity object
		// Parameters:
		//	$JSON (string, req, Default:none) - JSON encoded string with effect data
		$entity = json_decode($JSON);

		// This seems like a silly way but it works...
		$this->id				= $entity->id;
		$this->name				= $entity->name;
		$this->sheetLocation	= $entity->sheetLocation;
		$this->comment			= $entity->effect;
		$this->effects			= array();

		$i = 0;
		foreach ($entity->effects as $effect) {
			$this->effects[$i]					= New Effect;
			$this->effects[$i]->id				= $effect->id;
			$this->effects[$i]->effectType		= $effect->effectType;
			$this->effects[$i]->effect			= $effect->effect;
			$this->effects[$i]->valueType		= $effect->valueType;
			$this->effects[$i]->value			= $effect->value;
			$this->effects[$i]->modifierType	= $effect->modifierType;
			$this->effects[$i]->isConditional	= $effect->isConditional;
			$this->effects[$i]->condition		= $effect->condition;
			$i++;
		} // end loop Effects
	}

	public function toJSON() {
		// Description:	Generates JSON packet from entity object
		// Returns:		Returns JSON encoded string
		return json_encode($this);
	}

	public function save() {
		// Description:	Saves Entity object to the database
		// Returns:		Boolean, True on success, False on failure
		return DataLibrary::saveEntity($this);
	}

} // End class Entity

?>