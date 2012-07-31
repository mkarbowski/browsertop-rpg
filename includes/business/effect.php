<?php

// Title:		Effect
// Description:	Effect class represents a D&D a single effect of an entity
// Author: 		David Hoyt

class Effect {

	public $id;				// int
	public $effectType;		// int
	public $effect;			// int
	public $valueType;		// int
	public $value;			// mixed
	public $modifierType;	// int
	public $isConditional;	// bool
	public $condition;		// string

	public function fromJson($JSON) {
		// Description:	Loads JSON values into effect object
		// Parameters:
		//	$JSON (string, req, Default:none) - JSON encoded string with effect data
		$effect = json_decode($JSON);

		// This seems like a silly way but it works...
		$this->id				= $effect->id;
		$this->effectType		= $effect->effectType;
		$this->effect			= $effect->effect;
		$this->valueType		= $effect->valueType;
		$this->value			= $effect->value;
		$this->modifierType		= $effect->modifierType;
		$this->isConditional	= $effect->isConditional;
		$this->condition		= $effect->condition;
	}

	public function toJson() {
		// Description:	Generates JSON packet from effect object
		// Returns:		Returns JSON encoded string
		return json_encode($this);
	}

	public function save() {
		// Description:	Saves Effect object to the database
		// Returns:		Boolean, True on success, False on failure
		return DataLibrary::saveEffect($this);
	}

} // End class Effect

?>