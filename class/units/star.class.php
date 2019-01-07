<?php
class Star {
	public $mass, $alive, $originalmass, $name, $class;

	public function Star($mass, $name) {
		$this->name = $name;
		$this->mass = $mass;
		$this->originalmass = $mass;
		$this->alive = true;
		$this->class = "star";
	}
	public function returnName() {
		return $this->name;
	}
	public function weightType() {
		if ($this->originalmass > 5000000) {
			return 0;
		} else if($this->originalmass > 3000000) {
			return 1;
		} else if($this->originalmass > 1500000) {
			return 2;
		} else if($this->originalmass > 750000) {
			return 3;
		} else {
			return 4;
		}
	}
	public function setName($name) {
		$this->name = $name;
	}
	public function toString() {
		return sprintf("Name: %s\nMass: %d\nType:%d", $this->name,$this->mass,$this->weightType());
	}
}
?>