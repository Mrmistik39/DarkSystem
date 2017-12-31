<img src="https://raw.githubusercontent.com/DarkSystem-PE/DarkSystem/master/resources/logo.png" alt="DarkSystem Logo" title="Aimeos" align="center" height="90"> <img src="https://raw.githubusercontent.com/DarkSystem-PE/DarkSystem/master/resources/banner.png" alt="DarkSystem Banner" title="Aimeos" align="center" height="105"> <img src="https://raw.githubusercontent.com/DarkSystem-PE/DarkSystem/master/resources/turkish_flag.png" alt="Turkish Flag" title="Aimeos" align="center" height="90">


**DarkSystem is a server software for Minecraft: PE/BE with many features**

[![License](https://img.shields.io/github/license/DarkSystem-PE/DarkSystem.svg)](https://github.com/DarkSystem-PE/DarkSystem/blob/master/LICENSE)
[![GitHub contributors](https://img.shields.io/github/contributors/DarkSystem-PE/DarkSystem.svg)](https://github.com/DarkSystem-PE/DarkSystem/graphs/contributors)
[![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/DarkSystem-PE/DarkSystem.svg)](http://isitmaintained.com/project/DarkSystem-PE/DarkSystem "Average time to resolve an issue")
[![Percentage of issues still open](http://isitmaintained.com/badge/open/DarkSystem-PE/DarkSystem.svg)](http://isitmaintained.com/project/DarkSystem-PE/DarkSystem "Percentage of issues still open")

| Direct Phar Download | Travis CI | Discord Chat Server |
| :---: | :---: | :---: |
[![Download](https://img.shields.io/badge/download-latest-blue.svg)](http://jenkins.haniokasai.com/job/DarkSystem-PMMP_12/lastSuccessfulBuild/artifact/artifacts/DarkSystem_PMMP1-2.phar) | [![Build Status](https://travis-ci.org/DarkSystem-PE/DarkSystem.svg?branch=master)](https://travis-ci.org/DarkSystem-PE/DarkSystem) | [![Discord](https://camo.githubusercontent.com/455152269a0ed38255ed15e375084d4dd08e0c98/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f636861742d6f6e253230646973636f72642d3732383944412e737667)](https://discord.gg/4TewN6v) | 

### DarkSystem Special Android APP
You can download it [here](http://bit.do/darksystem_apk).<br>
**NOTE:** Language of app is Turkish, does not support English. Will be added soon.<br>

### DarkSystem Test Server
You can test DarkSystem before download.<br>
IP: **dts.kro.kr**<br>
PORT: **19130**<br>

# Features:
- [x] DarkSystem is **# 1** about speed & no-lag.
  * We think so
- [x] Based on **old** PocketMine-MP for best performance and stability.
- [x] Loads chunks region-to-region.
  * It uses less CPU resources & loads chunks fast.
- [x] Cached chunk loading
  * Loads chunks and levels with cache for speed.
- [x] MobAI Support
  * Almost all mobs can move & attack.
  * Support Attacking Movement.
- [x] Smooth Movement
  * Players don't glitch or clip through the floor (if they are not in 1.2) while moving.
  * Does not throw players back.
- [x] MCPE 1.2 Support
  * DarkSystem is compatible with MC: Bedrock Edition/Better together update (aka 1.2).
- [ ] Auto Updater
  * DarkSystem is automatically updated from GitHub.
- [x] More Biomes & Advanced Generator
  * DarkSystem supports more biomes than others softwares.
  * DarkSystem loads levels fast.
- [x] Anti-BOT (Bot Protection)
  * Blocks MCPE Bots joining from same ips. (Ex. MineBot)
- [x] Anti-COOP Play
- [x] Advanced RakNet
  * Like bot protection
- [x] Themes!
  * You can change theme in **server.properties**.
  * Available themes: **classic, dark, light, metal, energy, uranium**
- [x] Ender Biome Support
- [x] Advanced Fly Checker
  * Can be activated from config.
  * Checks if player is in the air better
  * **May cause lag when moving.**
- [x] No Bad Packets!
  * Players only can send a few packets before logging in.
  * Only LoginPacket, Resource and Behavior packs packets, and 1-2 required packets can be sent.
  * Blocks AdventureSettingsPacket and SetPlayerGameType packet.
- [x] **InventoryAPI!**
  * You can create customizable virtual inventories!
  * *For developers* **InventoryAPI::createInventory(...)**
- [x] More commands!
  * /ping
    * Get quality of player's connection.
  * /xyz
    * Gets player's position.
  * /createinv
    * Opens virtual inventories.
  * /world
    * You can teleport to another world without a plugin, only with a simple command!
  * /addui
    * Allows to create fully customizable menus
    * *Usage:* /addui {player} {type: shop/alert/image/slider/dropdown/input/mix}
    * **Only works with 1.2+**
  * /operator
    * Instead of /op 
    * You easily can enable/disable this command from **pocketmine_advanced.yml**.
  * More commands:
    * /clear
    * /tpall
    * /clearchat
    * /cave
    * /summon
    * /chunkinfo
- [x] Custom 1.2 and WIN10 Inventories
- [x] More Mobs/Entities 
   * Parrot,
   * NPC,
   * Chalkboard,
   * Learn To Code Mascot.
- [x] Extended Plugin API (It is an api called as DarkAPI :D lol)
  * Support Compound & CompoundTag etc.
- [x] Compatible with newest plugins
  * API 3.x.x
- [x] Custom Query
  * When server starts, sets up a MySQL connection to specified host from config.
  * Can be disabled from **server.properties**.
- [x] MySQLManager
  * You can send data to website of your server about players' kills, deaths, money etc. quickly.
  * *For developers* **utils\MySQLManager**
- [x] Colored & Clean Console
  * Console is really clean, does not send junk messages like:
    * plugin enabling,
    * XBOX offline mode warn,
    * etc.
- [x] AntiForceOP
  * Hackers cannot access to OP command, you are safe :)
- [x] Floating Text as Entity
  * On DarkSystem, floating text isn't a particle, it is an entity.
  * It blocks floating text hack or other.
  * Dissappearing floating texts is impossible!
- [x] Auto Lag Cleaner: How does it work?
  * It automatically removes items and arrows from ground without occuping CPU.
- [x] Weather
  * Supports:
    * snow,
    * rain,
    * thunder.
- [ ] **DarkRCON!**
  * An advanced rcon client for managing DarkSystem servers.
  * Fully protected with password.
  * 100% safe.
  * Works on Android, Windows And more...
- [x] Fully Turkish Language
  * DarkSystem Supports 79% Turkish Language.
  * How to set language to Turkish?
    * Simple, choose language to **tur** on set-up wizard.
    * After set **language:** to **tur** on **pocketmine.yml**)
- [ ] Greek language coming soon
    * progress 10%
- [x] MultiVersion® support: **What is this?**
  * We support:
    * **1.0.x**
    * **1.1.x**
    * **1.2.x**
- [x] Always up-to-date.
  * We always add new blocks and items to DarkSystem.
  * You can always find new things here when they are out!
- [x] No junk tasks/threads on background. Anything cannot occupy the CPU resources and performance.
- [x] TextUtils
  * Idea from MiNET
  * Code taken from Turanic.
  * Allows to create more beautiful texts.
  * *For developers* Example: **TextUtils::center($message)** ---> makes the message in center.
- [ ] BlockLauncher join Blocking
  * If you hate hackers, this is for you.
  * How to use? - It is fully automatic.
- [x] Code is clean, FAST and SAFE, coded in PHP.
- [x] Advanced Config **(pocketmine_advanced.yml)**
- [x] DarkBot (Uncontinued)
  * Virtual Intelligent Bot;
    * It can talk,
    * move,
    * etc.
- Other features:
 * [ ] Piston (indev)
 * [x] Banner (1.2 only)
 * [x] Parrots (1.2 only)
 * [ ] Rideable Car (indev)
 * [ ] Rideable Horse (indev)
 * [ ] Behavior Support (indev)
 * [ ] Armor Stand (1.2 only) (indev) (works as tile, we will make it as entity) (progress 10%)
 * [x] Writable & Written Books (1.2 only)
 * [x] Jukebox & Music Discs (1.2 only)
 * [ ] Working Command Block (indev) (progress 40%) 

# TODO List:
- Checked item boxes mean we are working on them **OR** they are in-dev, empty mean that will we work soon on them!
- [x] **Command Block (indev)**
- [ ] **Experience System (working)**
- [ ] **Map**
- [x] **Horse**
- [ ] **Fireworks (%60)**
- [x] **Armor Stand**
- [x] **Throwing Potions**
- [x] **Writable & Written Books**
- [x] **Fully Working CustomUI**
- [ ] **Riding Minecart and Boat**
- [x] **Fully Redstone System**
- [x] **Multi-core**
- [x] **Jukebox**
- [x] **Pistons**
- [x] **Fully Multi-Language**
- [ ] **Mob Spawner**
- [x] **Item Frame**
- [x] **Auto lag cleaner**

# Known Bugs:
- Respawn & Movement bug on 1.2
- DarkSystem's experience system does not work correctly. (Well its not a HUGE problem :D)

# Known Bugs in 1.2:
- Moving is glitchy. (Seen on Android OS & 32-bit machines)
- AvailableCommandsPacket issues

# Notes:
- DarkSystem does not support PMAnvil map format, it only supports Anvil and McRegion.
- DarkSystem's language is currently Turkish, but you can change it in pocketmine.yml (Supports 20+ Languages)
- Some strings, messages and lines may be in Turkish, we are adding translation to them on every update.
- DarkSystem is 68% stable now.It will be 90%+ in future
- /op command is renamed to /operator and you easily can enable/disable this command from **pocketmine_advanced.yml**.
- Mob spawners are not supported yet. Sorry for this, they will be added soon...

# Test Server
- **COMING SOON**

# Get DarkSystem:
- Download the latest build from [Jenkins](http://jenkins.haniokasai.com/job/DarkSystem-PMMP_12).
- PHP Binaries [here](https://github.com/LeverylTeam/PHP7-Binaries).
<!--* Installation instructions can be found in the [wiki](https://github.com/iTXTech/Genisys/wiki).-->
NOTE: **The master branch is the only officially supported.**
_All other branches are in testing and may be unstable. Do not use builds from other branches unless you are sure you understand the risks._

# Tools:
- [DevTools](https://github.com/pmmp/PocketMine-DevTools) - Plugin and server development tools plugin
- [Pocket Server](https://github.com/fengberd/MinecraftPEServer) - Run DarkSystem on Android devices
- [DarkSystem Android APP](http://bit.do/darksystem_apk) - DarkSystem Special Android APP for Android

# Resources
Your DarkSystem Server needs Visual Studio C++ Redistributable 2015 (For Windows).<br>
It can be downloaded [here](https://www.microsoft.com/en-us/download/details.aspx?id=48145)<br>

# Converting to .phar
- Download DevTools plugin.
- Start your server 
- Run `makeserver` command in the console.

It will drop a .phar file into DevTools data folder.

# License:
```
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
```

# Third-party Libraries/Protocols Used:
* __[PHP Sockets](http://php.net/manual/en/book.sockets.php)__
* __[PHP mbstring](http://php.net/manual/en/book.mbstring.php)__
* __[PHP SQLite3](http://php.net/manual/en/book.sqlite3.php)__
* __[PHP BCMath](http://php.net/manual/en/book.bc.php)__
* __[PHP pthreads](http://pthreads.org/)__: Threading for PHP - Share Nothing, Do Everything.
* __[PHP YAML](https://code.google.com/p/php-yaml/)__: The Yaml PHP Extension provides a wrapper to the LibYAML library.
* __[LibYAML](http://pyyaml.org/wiki/LibYAML)__: A YAML 1.1 parser and emitter written in C.
* __[cURL](http://curl.haxx.se/)__: cURL is a command line tool for transferring data with URL syntax
* __[Zlib](http://www.zlib.net/)__: A Massively Spiffy Yet Delicately Unobtrusive Compression Library
* __[Source RCON Protocol](https://developer.valvesoftware.com/wiki/Source_RCON_Protocol)__
* __[UT3 Query Protocol](http://wiki.unrealadmin.org/UT3_query_protocol)__
* __[PHP OpenSSL](http://php.net/manual/en/book.openssl.php)__: Cryptography and SSL/TLS Toolkit

DarkSystem is not affiliated with Mojang. All brands and trademarks belong to their respectfull owners DarkSystem is not a Mojang-approved software.