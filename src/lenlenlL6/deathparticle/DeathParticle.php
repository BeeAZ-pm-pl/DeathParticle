<?php

namespace lenlenlL6\deathparticle;

use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDeathEvent;
use pocketmine\world\Position;
use pocketmine\world\particle\HeartParticle; 
use pocketmine\world\particle\InkParticle;
use pocketmine\world\particle\LavaParticle;
use pocketmine\world\particle\AngryVillagerParticle;
use pocketmine\world\particle\EndermanTeleportParticle;
use pocketmine\world\particle\CriticalParticle;
use pocketmine\world\particle\ExplodeParticle;
use pocketmine\world\particle\HappyVillagerParticle;
use pocketmine\world\particle\PortalParticle;
use pocketmine\world\particle\RedstoneParticle;
use pocketmine\world\particle\SnowballPoofParticle;
use pocketmine\world\particle\SmokeParticle;
use pocketmine\world\particle\WaterDripParticle;
use lenlenlL6\deathparticle\command\DeathParticleCommand;

class DeathParticle extends PluginBase implements Listener {
  
  public function onEnable() : void{
    $this->getLogger()->info("
      ____             _   _       ____            _   _      _      
 |  _ \  ___  __ _| |_| |__   |  _ \ __ _ _ __| |_(_) ___| | ___ 
 | | | |/ _ \/ _` | __| '_ \  | |_) / _` | '__| __| |/ __| |/ _ \
 | |_| |  __/ (_| | |_| | | | |  __/ (_| | |  | |_| | (__| |  __/
 |____/ \___|\__,_|\__|_| |_| |_|   \__,_|_|   \__|_|\___|_|\___|
 ");
 $this->getLogger()->info("Plugin Now Enable");
 $this->getLogger()->info("Author: lenlenlL6\nVersion: 1.0.0\Api: 4.0.0");
 $this->saveDefaultConfig();
 $this->getServer()->getPluginManager()->registerEvents($this, $this);
 $this->getServer()->getCommandMap()->register("Command", new DeathParticleCommand($this));
  }
  
  public function onDisable() : void{
    $this->getLogger()->info("
      ____             _   _       ____            _   _      _      
 |  _ \  ___  __ _| |_| |__   |  _ \ __ _ _ __| |_(_) ___| | ___ 
 | | | |/ _ \/ _` | __| '_ \  | |_) / _` | '__| __| |/ __| |/ _ \
 | |_| |  __/ (_| | |_| | | | |  __/ (_| | |  | |_| | (__| |  __/
 |____/ \___|\__,_|\__|_| |_| |_|   \__,_|_|   \__|_|\___|_|\___|
 ");
 $this->getLogger()->info("Plugin Now Disable");
  }
  
  public function onDeath (EntityDeathEvent $event){
    $entity = $event->getEntity();
    $pos = $entity->getPosition();
    $world = $entity->getWorld();
    if($this->getConfig()->get("active") === true){
      if($this->getConfig()->get("HeartParticle") === true){
        $world->addParticle($pos, new HeartParticle(1, $pos));
        $world->addParticle($pos, new HeartParticle(1, $pos));
        $world->addParticle($pos->add(1, 0, 0), new HeartParticle(1, $pos->add(1, 0, 0)));
        $world->addParticle($pos->add(0, 1, 0), new HeartParticle(1, $pos->add(0, 1, 0)));
        $world->addParticle($pos->add(0, 0, 1), new HeartParticle(1, $pos->add(0, 0, 1)));
      }
      if($this->getConfig()->get("InkParticle") === true){
        $world->addParticle($pos, new InkParticle(1, $pos));
        $world->addParticle($pos, new InkParticle(1, $pos));
        $world->addParticle($pos->add(1, 0, 0), new InkParticle(1, $pos->add(1, 0, 0)));
        $world->addParticle($pos->add(0, 1, 0), new InkParticle(1, $pos->add(0, 1, 0)));
        $world->addParticle($pos->add(0, 0, 1), new InkParticle(1, $pos->add(0, 0, 1)));
      }
      if($this->getConfig()->get("LavaParticle") === true){
        $world->addParticle($pos, new LavaParticle($pos));
        $world->addParticle($pos, new LavaParticle($pos));
        $world->addParticle($pos->add(1, 0, 0), new LavaParticle($pos->add(1, 0, 0)));
        $world->addParticle($pos->add(0, 1, 0), new LavaParticle($pos->add(0, 1, 0)));
        $world->addParticle($pos->add(0, 0, 1), new LavaParticle($pos->add(0, 0, 1)));
      }
      if($this->getConfig()->get("AngryVillagerParticle") === true){
        $world->addParticle($pos, new AngryVillagerParticle($pos));
        $world->addParticle($pos, new AngryVillagerParticle($pos));
        $world->addParticle($pos->add(1, 0, 0), new AngryVillagerParticle($pos->add(1, 0, 0)));
        $world->addParticle($pos->add(0, 1, 0), new AngryVillagerParticle($pos->add(0, 1, 0)));
        $world->addParticle($pos->add(0, 0, 1), new AngryVillagerParticle($pos->add(0, 0, 1)));
      }
      if($this->getConfig()->get("EndermanTeleportParticle") === true){
        $world->addParticle($pos, new EndermanTeleportParticle($pos));
        $world->addParticle($pos, new EndermanTeleportParticle($pos));
        $world->addParticle($pos->add(1, 0, 0), new EndermanTeleportParticle($pos->add(1, 0, 0)));
        $world->addParticle($pos->add(0, 1, 0), new EndermanTeleportParticle($pos->add(0, 1, 0)));
        $world->addParticle($pos->add(0, 0, 1), new EndermanTeleportParticle($pos->add(0, 0, 1)));
      }
      if($this->getConfig()->get("CriticalParticle") === true){
        $world->addParticle($pos, new CriticalParticle(1, $pos));
        $world->addParticle($pos, new CriticalParticle(1, $pos));
        $world->addParticle($pos->add(1, 0, 0), new CriticalParticle(1, $pos->add(1, 0, 0)));
        $world->addParticle($pos->add(0, 1, 0), new CriticalParticle(1, $pos->add(0, 1, 0)));
        $world->addParticle($pos->add(0, 0, 1), new CriticalParticle(1, $pos->add(0, 0, 1)));
      }
      if($this->getConfig()->get("ExplodeParticle") === true){
        $world->addParticle($pos, new ExplodeParticle($pos));
        $world->addParticle($pos, new ExplodeParticle($pos));
        $world->addParticle($pos->add(1, 0, 0), new ExplodeParticle($pos->add(1, 0, 0)));
        $world->addParticle($pos->add(0, 1, 0), new ExplodeParticle($pos->add(0, 1, 0)));
        $world->addParticle($pos->add(0, 0, 1), new ExplodeParticle($pos->add(0, 0, 1)));
      }
      if($this->getConfig()->get("HappyVillagerParticle") === true){
        $world->addParticle($pos, new HappyVillagerParticle($pos));
        $world->addParticle($pos, new HappyVillagerParticle($pos));
        $world->addParticle($pos->add(1, 0, 0), new HappyVillagerParticle($pos->add(1, 0, 0)));
        $world->addParticle($pos->add(0, 1, 0), new HappyVillagerParticle($pos->add(0, 1, 0)));
        $world->addParticle($pos->add(0, 0, 1), new HappyVillagerParticle($pos->add(0, 0, 1)));
      }
      if($this->getConfig()->get("PortalParticle") === true){
        $world->addParticle($pos, new PortalParticle($pos));
        $world->addParticle($pos, new PortalParticle($pos));
        $world->addParticle($pos->add(1, 0, 0), new PortalParticle($pos->add(1, 0, 0)));
        $world->addParticle($pos->add(0, 1, 0), new PortalParticle($pos->add(0, 1, 0)));
        $world->addParticle($pos->add(0, 0, 1), new PortalParticle($pos->add(0, 0, 1)));
      }
      if($this->getConfig()->get("RedstoneParticle") === true){
        $world->addParticle($pos, new RedstoneParticle(3, $pos));
        $world->addParticle($pos, new RedstoneParticle(3, $pos));
        $world->addParticle($pos->add(1, 0, 0), new RedstoneParticle(3, $pos->add(1, 0, 0)));
        $world->addParticle($pos->add(0, 1, 0), new RedstoneParticle(3, $pos->add(0, 1, 0)));
        $world->addParticle($pos->add(0, 0, 1), new RedstoneParticle(3, $pos->add(0, 0, 1)));
      }
      if($this->getConfig()->get("SnowballPoofParticle") === true){
        $world->addParticle($pos, new SnowballPoofParticle($pos));
        $world->addParticle($pos, new SnowballPoofParticle($pos));
        $world->addParticle($pos->add(1, 0, 0), new SnowballPoofParticle($pos->add(1, 0, 0)));
        $world->addParticle($pos->add(0, 1, 0), new SnowballPoofParticle($pos->add(0, 1, 0)));
        $world->addParticle($pos->add(0, 0, 1), new SnowballPoofParticle($pos->add(0, 0, 1)));
      }
      if($this->getConfig()->get("SmokeParticle") === true){
        $world->addParticle($pos, new SmokeParticle(1, $pos));
        $world->addParticle($pos, new SmokeParticle(1, $pos));
        $world->addParticle($pos->add(1, 0, 0), new SmokeParticle(1, $pos->add(1, 0, 0)));
        $world->addParticle($pos->add(0, 1, 0), new SmokeParticle(1, $pos->add(0, 1, 0)));
        $world->addParticle($pos->add(0, 0, 1), new SmokeParticle(1, $pos->add(0, 0, 1)));
      }
      if($this->getConfig()->get("WaterDripParticle") === true){
        $world->addParticle($pos, new WaterDripParticle($pos));
        $world->addParticle($pos, new WaterDripParticle($pos));
        $world->addParticle($pos->add(1, 0, 0), new WaterDripParticle($pos->add(1, 0, 0)));
        $world->addParticle($pos->add(0, 1, 0), new WaterDripParticle($pos->add(0, 1, 0)));
        $world->addParticle($pos->add(0, 0, 1), new WaterDripParticle($pos->add(0, 0, 1)));
      }
    }
  }
}
