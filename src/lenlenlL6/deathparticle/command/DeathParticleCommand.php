<?php

namespace lenlenlL6\deathparticle\command;

use pocketmine\plugin\Plugin;
use pocketmine\player\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginOwned;
use lenlenlL6\deathparticle\DeathParticle;

class DeathParticleCommand extends Command implements PluginOwned{

  public $main;
  
  public function __construct(DeathParticle $main){
    $this->main = $main;
    parent::__construct("deathparticle", "Turn on or off DeathParticle", null, ["deathparticle"]);
    $this->setPermission("deathparticle.command.use");
  }
  
  public function execute(CommandSender $player, String $label, array $args): bool{
    if($this->testPermission($player)){
    if(isset($args[0])){
      switch($args[0]){
        case "on":
          $this->main->getConfig()->set("active", true);
          $this->main->getConfig()->save();
          $player->sendMessage("§a> Enabled Death Particle");
          break;
          
          case "off":
            $this->main->getConfig()->set("active", false);
          $this->main->getConfig()->save();
          $player->sendMessage("§a> Disabled Death Particle");
            break;
      }
    }else{
      $player->sendMessage("§c> Usage: /deathpartice [on | off]");
    }
}
    return true;
  }
  
  public function getOwningPlugin() : Plugin{
    return $this->main;
  }
}
