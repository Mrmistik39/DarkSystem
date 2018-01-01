<?php

#______           _    _____           _                  
#|  _  \         | |  /  ___|         | |                 
#| | | |__ _ _ __| | _\ `--. _   _ ___| |_ ___ _ __ ___   
#| | | / _` | '__| |/ /`--. \ | | / __| __/ _ \ '_ ` _ \  
#| |/ / (_| | |  |   </\__/ / |_| \__ \ ||  __/ | | | | | 
#|___/ \__,_|_|  |_|\_\____/ \__, |___/\__\___|_| |_| |_| 
#                             __/ |                       
#                            |___/

namespace pocketmine;

use darksystem\language\Language;

class Translate{
	
	const ENG = "eng";
	const TUR = "tur";
	
	private $server;
	
	public function __construct(Server $server){
		$this->server = $server;
	}
	
    public static function checkTurkish(){
    	$isTurkish = "no";
    	if(!file_exists(\pocketmine\DATA . "sunucu.properties")){
    	    $isTurkish = "no";
    	}elseif(file_exists(\pocketmine\DATA . "sunucu.properties")){
    	    $isTurkish = "yes";
    	}
    	return $isTurkish;
    }
    
    public static function getServer(){
    	return $this->server;
    }
    
}
