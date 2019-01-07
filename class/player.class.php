<?php
class Player {
	public $tech,$name,$power,$conquered,$resources;
	public function Player($name, $power, $conquered, $resources, $tech) {
		$this->name			= $name;
		$this->power		= $power;
		$this->conquered 	= $conquered;
		$this->resources 	= $resources;
		$this->tech			= $tech;
	}
	public function toString() {
		echo sprintf("Name: %s\n",$this->name);
		echo sprintf("Power: %s\n",$this->power);
	}
}
?>