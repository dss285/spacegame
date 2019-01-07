<?php
class Stellarbodies {
	public $mass,$resources,$gravity,$type, $name, $class;

	public function Stellarbodies($mass, $resources, $gravity,$type,$name) {
		$this->mass 		= $mass;
		$this->resources 	= $resources;
		$this->gravity 		= $gravity;
		$this->type 		= $type;
		$this->name			= $name;
		$this->class 		= "stellar";
	}
	public function toString() {
		return sprintf("Name: %s\nMass: %d\nType:%s\n", $this->name, $this->mass, $this->type);
	}
}
?>