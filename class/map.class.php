<?php
class Map {
	public $map;
	public function loadfromfile() {
		$obj = unserialize(file_get_contents("map.txt"));

		$this->map = $obj->map;
	}

	public function randmapdimension($size) {
		$map;
		for($i = 0;$i<$size;$i++) {
			for($l=0;$l<$size;$l++) {
				$number = rand(1,50);
				if($number >=40) {
					$map[$i][$l] = new Galaxy();
					$map[$i][$l]->setmap($this->randmapgalaxy(rand(1,3)));
				} else {
					$map[$i][$l] = 0;
				}
			}
		}
		$this->createfile($map);
		return $map;
	}
	private function randmapgalaxy($size) {
		$map;
		for($i = 0;$i<$size;$i++) {
			for($l=0;$l<$size;$l++) {
				$number = rand(1,50);
				if($number >=40) {
					$map[$i][$l] = new solarsystem();
					$map[$i][$l]->setmap($this->randmapsolarsystem(rand(1,12)));
				} else {
					$map[$i][$l] = 0;
				}
			}
		}
		return $map;
	}
	private function randmapsolarsystem($size) {
		$map;
		for($i = 0;$i<$size;$i++) {
			for($l=0;$l<$size;$l++) {
				$number = rand(1,50);
				if($number ==50) {
					$map[$i][$l] = new Star(rand(100000,5000000000), sprintf("Star %d",rand(0,3000)));
				} elseif($number >=48) {
					$map[$i][$l] = new Stellarbodies(rand(30000,30000000),["soonTM"],1,"planet",sprintf("Planet %d", rand(0,30000)));
				} elseif($number >=45) {
					$map[$i][$l] = new Stellarbodies(rand(3000,300000),["soonTM"],1,"moon",sprintf("Moon %d", rand(0,30000)));
				} else {
					$map[$i][$l] = 0;
				}
			}
		}
		return $map;
	}
	private function createfile($map) {
		
		$dimension = new dimension();
		$dimension->loadmap($map);
		$file = fopen("map.txt", "w+");
		fwrite($file, serialize($dimension));
		fclose($file);
	}
}