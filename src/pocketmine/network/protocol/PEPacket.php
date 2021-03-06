<?php

#______           _    _____           _                  
#|  _  \         | |  /  ___|         | |                 
#| | | |__ _ _ __| | _\ `--. _   _ ___| |_ ___ _ __ ___   
#| | | / _` | '__| |/ /`--. \ | | / __| __/ _ \ '_ ` _ \  
#| |/ / (_| | |  |   </\__/ / |_| \__ \ ||  __/ | | | | | 
#|___/ \__,_|_|  |_|\_\____/ \__, |___/\__\___|_| |_| |_| 
#                             __/ |                       
#                            |___/

namespace pocketmine\network\protocol;

abstract class PEPacket extends DataPacket{
	
	public $senderID = 0;
	public $targetID = 0;
	
	abstract public function encode($playerProtocol);

	abstract public function decode($playerProtocol);
	
	protected function checkLength($len){
		if($this->offset + $len > strlen($this->buffer)){
			throw new \Exception(get_class($this) . ": Try get {$len} bytes, offset = " . $this->offset . ", bufflen = " . strlen($this->buffer) . ", buffer = " . bin2hex(substr($this->buffer, 0, 250)));
		}
	}
	
	protected function getHeader($playerProtocol = 0){
		if($playerProtocol >= Info::PROTOCOL_120){
			$this->senderID = $this->getByte();
			$this->targetID = $this->getByte();
			if($this->senderID > 4 || $this->targetID > 4){
				throw new \Exception(get_class($this) . ": Packet decode headers error");
			}
		}
	}
 
	public function reset($playerProtocol = 0){
		$this->buffer = chr(PEPacket::$packetsIds[$playerProtocol][$this::PACKET_NAME]);
		$this->offset = 0;
		if($playerProtocol >= Info::PROTOCOL_120){
			$this->buffer .= "\x00\x00";
			$this->offset = 2;
		}
	}
	
	public final static function convertProtocol($protocol){
		switch($protocol){
			case Info::PROTOCOL_120:
			case Info::PROTOCOL_121;
			case Info::PROTOCOL_130;
			case Info::PROTOCOL_131;
			case Info::PROTOCOL_132;
			case Info::PROTOCOL_133;
			case Info::PROTOCOL_134;
			case Info::PROTOCOL_135;
			case Info::PROTOCOL_136;
			case Info::PROTOCOL_137;
			case Info::PROTOCOL_138;
			case Info::PROTOCOL_139;
			case Info::PROTOCOL_140;
			case Info::PROTOCOL_141;
			case Info::PROTOCOL_150;
			case Info::PROTOCOL_160;
			case Info::PROTOCOL_170; //Hmm
			case Info::PROTOCOL_414; //Really, someone sit on keyboard :P
				return Info::PROTOCOL_120;
			case Info::PROTOCOL_110:
			case Info::PROTOCOL_111:
			case Info::PROTOCOL_112:
			case Info::PROTOCOL_113:
				return Info::PROTOCOL_110;
			case Info::PROTOCOL_105:
			case Info::PROTOCOL_106:
			case Info::PROTOCOL_107:
				return Info::PROTOCOL_105;
				default;
				return Info::BASE_PROTOCOL;
		}
	}
}
