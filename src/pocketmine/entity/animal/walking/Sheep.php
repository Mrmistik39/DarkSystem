<?php

namespace pocketmine\entity\animal\walking;

use pocketmine\entity\animal\WalkingAnimal;
use pocketmine\entity\Colorable;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\nbt\tag\ByteTag;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\entity\Creature;
use pocketmine\level\Level;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\entity\Shearable;

class Sheep extends WalkingAnimal implements Colorable, Shearable{
	
	const NETWORK_ID = self::SHEEP;
	
	const DATA_COLOR_INFO = 16;
	
	public $width = 1.45;
	public $height = 1.12;

	public function getName(){
		return "Sheep";
	}
	
	public function __construct(Level $level, CompoundTag $nbt)
    {
        if(!isset($nbt->Color)){
            $nbt->Color = new ByteTag("Color", self::getRandomColor());
        }
        
        parent::__construct($level, $nbt);

        $this->setDataProperty(self::DATA_COLOR_INFO, self::DATA_TYPE_BYTE, $this->getColor());
    }
    
	public function initEntity(){
		parent::initEntity();

		$this->setMaxHealth(8);
	}
	
	public static function getRandomColor()
    {
        $rand = "";
        $rand .= str_repeat(Wool::WHITE . " ", 20);
        $rand .= str_repeat(Wool::ORANGE . " ", 5);
        $rand .= str_repeat(Wool::MAGENTA . " ", 5);
        $rand .= str_repeat(Wool::LIGHT_BLUE . " ", 5);
        $rand .= str_repeat(Wool::YELLOW . " ", 5);
        $rand .= str_repeat(Wool::GRAY . " ", 10);
        $rand .= str_repeat(Wool::LIGHT_GRAY . " ", 10);
        $rand .= str_repeat(Wool::CYAN . " ", 5);
        $rand .= str_repeat(Wool::PURPLE . " ", 5);
        $rand .= str_repeat(Wool::BLUE . " ", 5);
        $rand .= str_repeat(Wool::BROWN . " ", 5);
        $rand .= str_repeat(Wool::GREEN . " ", 5);
        $rand .= str_repeat(Wool::RED . " ", 5);
        $rand .= str_repeat(Wool::BLACK . " ", 10);
        $arr = explode(" ", $rand);
        return intval($arr[mt_rand(0, count($arr) - 1)]);
    }

    public function getColor()
    {
        return (int) $this->namedtag["Color"];
    }

    public function setColor($color)
    {
        $this->namedtag->Color = new ByteTag("Color", $color);
    }
    
	public function targetOption(Creature $creature, $distance){
		if($creature instanceof Player){
			return $creature->spawned && $creature->isAlive() && !$creature->closed && $creature->getInventory()->getItemInHand()->getId() == Item::WHEAT && $distance <= 39;
		}
		return false;
	}

	public function getDrops(){
		if($this->lastDamageCause instanceof EntityDamageByEntityEvent){
			return [Item::get(Item::WOOL, mt_rand(0, 15), 1)];
		}
		return [];
	}
	
}
