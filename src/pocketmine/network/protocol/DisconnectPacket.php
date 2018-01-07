<?php

namespace pocketmine\network\protocol;

class DisconnectPacket extends PEPacket{
	
	const NETWORK_ID = Info::DISCONNECT_PACKET;
	const PACKET_NAME = "DISCONNECT_PACKET";

	public $hideDisconnectReason = false;
	public $message = "";

	public function reset($playerProtocol = 0){
		if(isset(self::$packetsIds[$playerProtocol])){
			$this->buffer = chr(self::$packetsIds[$playerProtocol][$this::PACKET_NAME]);
		}else{
			$this->buffer = chr(Info::DISCONNECT_PACKET);
		}
		
		$this->offset = 0;
		if($playerProtocol >= Info::PROTOCOL_120){
			$this->buffer .= "\x00\x00";
			$this->offset = 2;
		}
	}
	
	public function decode($playerProtocol){
		$this->getHeader($playerProtocol);
		$this->hideDisconnectReason = $this->getByte();
		if($this->hideDisconnectReason === false){
			$this->message = $this->getString();
		}
	}

	public function encode($playerProtocol){
		$this->reset($playerProtocol);
		$this->putByte($this->hideDisconnectReason);
		if($this->hideDisconnectReason === false){
			$this->putString($this->message);
		}
	}
}
