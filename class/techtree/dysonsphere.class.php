<?php
class DysonSphere {
	public $power,$gentick,$star, $efficiency, $status, $name;
	public function DysonSphere($power, $gentick, $star, $efficiency, $name) {
		$this->power		= $power;
		$this->gentick		= $gentick;
		$this->star			= $star;
		$this->efficiency 	= $efficiency;
		$this->status		= 1;
		$this->name 		= $name;
	}
	public function powerGen($times, $forced=false) {
		for($i = 0;$i<$times;$i++) {
			if ($this->star->mass-3000 > 0) {
				$this->power += $this->gentick * $this->efficiency;
				$this->star->mass -= 3000;
			} 
			elseif ($forced==true) {
				if ($this->star->weightType() == 1) {
					$this->status = 0;
				}
			} else {
				break;
			}
		}
	}
	public function toString() {
		return sprintf("%s\nStar attached to: %s\nEfficiency: %f\nCapacity: %d\nGenerator pwr/tick: %d", $this->name,$this->star->returnName(), $this->efficiency, $this->power, $this->gentick);
	}
}
?>