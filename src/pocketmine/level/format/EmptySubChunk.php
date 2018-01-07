<?php

#______           _    _____           _                  
#|  _  \         | |  /  ___|         | |                 
#| | | |__ _ _ __| | _\ `--. _   _ ___| |_ ___ _ __ ___   
#| | | / _` | '__| |/ /`--. \ | | / __| __/ _ \ '_ ` _ \  
#| |/ / (_| | |  |   </\__/ / |_| \__ \ ||  __/ | | | | | 
#|___/ \__,_|_|  |_|\_\____/ \__, |___/\__\___|_| |_| |_| 
#                             __/ |                       
#                            |___/

namespace pocketmine\level\format;

class EmptySubChunk extends SubChunk{

	public function __construct(){

	}

	public function isEmpty(){
		return true;
	}

	public function getBlockId($x, $y, $z){
		return 0;
	}

	public function setBlockId($x, $y, $z, $id){
		return false;
	}

	public function getBlockData($x, $y, $z){
		return 0;
	}

	public function setBlockData($x, $y, $z, $data){
		return false;
	}

	public function getFullBlock($x, $y, $z){
		return 0;
	}

	public function setBlock($x, $y, $z, $id = null, $data = null){
		return false;
	}

	public function getBlockLight($x, $y, $z){
		return 0;
	}

	public function setBlockLight($x, $y, $z, $level){
		return false;
	}

	public function getBlockSkyLight($x, $y, $z){
		return 10;
	}

	public function setBlockSkyLight($x, $y, $z, $level){
		return false;
	}

	public function getBlockIdColumn($x, $z){
		return "\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00";
	}

	public function getBlockDataColumn($x, $z){
		return "\x00\x00\x00\x00\x00\x00\x00\x00";
	}

	public function getBlockLightColumn($x, $z){
		return "\x00\x00\x00\x00\x00\x00\x00\x00";
	}

	public function getSkyLightColumn($x, $z){
		return "\xff\xff\xff\xff\xff\xff\xff\xff";
	}

	public function getBlockIdArray(){
		return str_repeat("\x00", 4096);
	}

	public function getBlockDataArray(){
		return str_repeat("\x00", 2048);
	}

	public function getBlockLightArray(){
		return str_repeat("\x00", 2048);
	}

	public function getSkyLightArray(){
		return str_repeat("\xff", 2048);
	}

	public function networkSerialize(){
		return "\x00" . str_repeat("\x00", 10240);
	}

	public function fastSerialize(){
		throw new \BadMethodCallException("Should not try to serialize empty subchunks");
	}
	
}
