<?php
/*
 * Spleef Plugin For RPE
 * Copyright (C) 2015 RektPE <https://github.com/RPE>
 *
*/
namespace RPE_Spleef;

use pocketmine/Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{
    	public function onEnable() {
      	$this->getServer()->getPluginManager()->registerEvents($this, $this);
      	$this->getLogger()->info(TEXTFORMAT::BLUE . "RPE-Spleef] " . TEXTFORMAT::GREEN . "I'm Enabled!");
    }
    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
		  if($sender instanceof Player) {
		    $player = $sender->getPlayer()->getName();
		    if(strtolower($command->getName('s')))
		      $sender->sendMessage("-----------------------------------------");
		      $sender->sendMessage("-------- RektPE SPLEEF COMMANDS: --------");
		      $sender->sendMessage("» /s help : Shows the of Spleef commands.");
		      $sender->sendMessage("» /s join : Join The Current Spleef Game.");
			    $sender->sendMessage("-----------------------------------------");
		        }elseif $
