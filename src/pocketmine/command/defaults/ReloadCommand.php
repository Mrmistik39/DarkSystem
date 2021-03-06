<?php

#______           _    _____           _                  
#|  _  \         | |  /  ___|         | |                 
#| | | |__ _ _ __| | _\ `--. _   _ ___| |_ ___ _ __ ___   
#| | | / _` | '__| |/ /`--. \ | | / __| __/ _ \ '_ ` _ \  
#| |/ / (_| | |  |   </\__/ / |_| \__ \ ||  __/ | | | | | 
#|___/ \__,_|_|  |_|\_\____/ \__, |___/\__\___|_| |_| |_| 
#                             __/ |                       
#                            |___/

namespace pocketmine\command\defaults;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\TranslationContainer;
use pocketmine\utils\TextFormat;

class ReloadCommand extends VanillaCommand{

	public function __construct($name){
		parent::__construct(
			$name,
			"%pocketmine.command.reload.description",
			"%pocketmine.command.reload.usage"
		);
		$this->setPermission("pocketmine.command.reload");
	}

	public function execute(CommandSender $sender, $currentAlias, array $args){
		if(!$this->testPermission($sender)){
			return true;
		}

		//Command::broadcastCommandMessage($sender, new TranslationContainer(TextFormat::YELLOW . "%pocketmine.command.reload.reloading"));

		$sender->getServer()->reload();
		
		Command::broadcastCommandMessage($sender, new TranslationContainer(TextFormat::YELLOW . "%pocketmine.command.reload.reloaded"));

		return true;
	}
}