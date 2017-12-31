<?php

namespace pocketmine\entity\animal\walking;

use pocketmine\entity\animal\WalkingAnimal;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\entity\Creature;
use pocketmine\entity\Shearable;

class Mooshroom extends WalkingAnimal implements Shearable{
	
	const NETWORK_ID = self::MOOSHROOM;

	public $width = 1.45;
	public $height = 1.12;

	public function getName(){
		return "Mooshroom";
	}

	public function initEntity(){
		parent::initEntity();

		$this->setMaxHealth(10);
	}

	public function targetOption(Creature $creature, $distance){
		if($creature instanceof Player){
			return $creature->spawned && $creature->isAlive() && !$creature->closed && $creature->getInventory()->getItemInHand()->getId() == Item::WHEAT && $distance <= 39;
		}
		return false;
	}

	public function getDrops(){
		$drops = [];
		if($this->lastDamageCause instanceof EntityDamageByEntityEvent){
			  $drops[] = Item::get(Item::MUSHROOM_STEW, 0, 1);
		}
		return $drops;
	}
}