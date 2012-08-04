function Character() {
	
	this.id;					// int
	this.name;					// string
	this.experience;			// int
	this.entities = new Array();// Entity array
	this.attacks = new Array();	// Attack array

	this.fromJSON = function(id) {
		// Description:	Loads JSON values into character object
		
		$.getJSON('/includes/business/json-from-data.php?type=character&id=' + id, function(char) {
			this.id = char.id;
			this.name = char.name;
			alert(this.id+" "+this.name);
		});

	};

	this.toJSON = function() {
		// Description:	Generates JSON packet from character object
	};

}