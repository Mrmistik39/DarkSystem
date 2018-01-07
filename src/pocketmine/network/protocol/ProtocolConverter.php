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

interface ProtocolConverter extends ProtocolAPI{
	
	/** MCPE 1.0.x **/
	const PROTOCOL_105 = 105;
	const PROTOCOL_106 = 106;
	const PROTOCOL_107 = 107;
	/** MCPE 1.1.x **/
	const PROTOCOL_110 = 110;
	const PROTOCOL_111 = 111;
	const PROTOCOL_112 = 112;
	const PROTOCOL_113 = 113;
	/** MCPE 1.2.x **/
	const PROTOCOL_120 = 120;
	const PROTOCOL_121 = 121;
	const PROTOCOL_130 = 130;
	const PROTOCOL_131 = 131;
	const PROTOCOL_132 = 132;
	const PROTOCOL_133 = 133;
	const PROTOCOL_134 = 134;
	const PROTOCOL_135 = 135;
	const PROTOCOL_136 = 136;
	const PROTOCOL_137 = 137;
	const PROTOCOL_138 = 138;
	const PROTOCOL_139 = 139;
	const PROTOCOL_140 = 140;
	const PROTOCOL_141 = 141;
	const PROTOCOL_150 = 150;
	const PROTOCOL_160 = 160;
	/** Undefined Protocols **/
	const PROTOCOL_170 = 170;
	/** .__. **/
	const PROTOCOL_414 = 414; //Who sit on keyboard? #blamemojang
	
}
