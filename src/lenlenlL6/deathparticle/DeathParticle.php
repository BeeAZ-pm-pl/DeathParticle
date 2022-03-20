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
 $this->saveDefaultConfig();
 $this->getServer()->getPluginManager()->registerEvents($this, $this);
 $this->getServer()->getCommandMap()->register("DeathParticle", new DeathParticleCommand($this));
  }
  
  public function onDisable() : void{
   $this->getConfig()->save();
  }
  
  public function onDeath (EntityDeathEvent $event){
    $entity = $event->getEntity();
    $pos = $entity->getPosition();
    $world = $entity->getWorld();
    if($this->getConfig()->get("active") === true){
      if($this->getConfig()->get("HeartParticle") === true){
        $world->addParticle($pos, new HeartParticle(1));
        $world->addParticle($pos, new HeartParticle(1));
        $world->addParticle($pos->add(1, 0, 0), new HeartParticle(1));
        $world->addParticle($pos->add(0, 1, 0), new HeartParticle(1));
        $world->addParticle($pos->add(0, 0, 1), new HeartParticle(1));
      }
      if($this->getConfig()->get("InkParticle") === true){
        $world->addParticle($pos, new InkParticle(1));
        $world->addParticle($pos, new InkParticle(1));
        $world->addParticle($pos->add(1, 0, 0), new InkParticle(1));
        $world->addParticle($pos->add(0, 1, 0), new InkParticle(1));
        $world->addParticle($pos->add(0, 0, 1), new InkParticle(1));
      }
      if($this->getConfig()->get("LavaParticle") === true){
        $world->addParticle($pos, new LavaParticle($pos));
        $world->addParticle($pos, new LavaParticle($pos));
        $world->addParticle($pos->add(1, 0, 0), new LavaParticle());
        $world->addParticle($pos->add(0, 1, 0), new LavaParticle());
        $world->addParticle($pos->add(0, 0, 1), new LavaParticle());
      }
      if($this->getConfig()->get("AngryVillagerParticle") === true){
        $world->addParticle($pos, new AngryVillagerParticle());
        $world->addParticle($pos, new AngryVillagerParticle());
        $world->addParticle($pos->add(1, 0, 0), new AngryVillagerParticle());
        $world->addParticle($pos->add(0, 1, 0), new AngryVillagerParticle());
        $world->addParticle($pos->add(0, 0, 1), new AngryVillagerParticle());
      }
      if($this->getConfig()->get("EndermanTeleportParticle") === true){
        $world->addParticle($pos, new EndermanTeleportParticle());
        $world->addParticle($pos, new EndermanTeleportParticle());
        $world->addParticle($pos->add(1, 0, 0), new EndermanTeleportParticle());
        $world->addParticle($pos->add(0, 1, 0), new EndermanTeleportParticle());
        $world->addParticle($pos->add(0, 0, 1), new EndermanTeleportParticle());
      }
      if($this->getConfig()->get("CriticalParticle") === true){
        $world->addParticle($pos, new CriticalParticle(1));
        $world->addParticle($pos, new CriticalParticle(1));
        $world->addParticle($pos->add(1, 0, 0), new CriticalParticle(1));
        $world->addParticle($pos->add(0, 1, 0), new CriticalParticle(1));
        $world->addParticle($pos->add(0, 0, 1), new CriticalParticle(1));
      }
      if($this->getConfig()->get("ExplodeParticle") === true){
        $world->addParticle($pos, new ExplodeParticle());
        $world->addParticle($pos, new ExplodeParticle());
        $world->addParticle($pos->add(1, 0, 0), new ExplodeParticle());
        $world->addParticle($pos->add(0, 1, 0), new ExplodeParticle());
        $world->addParticle($pos->add(0, 0, 1), new ExplodeParticle());
      }
      if($this->getConfig()->get("HappyVillagerParticle") === true){
        $world->addParticle($pos, new HappyVillagerParticle());
        $world->addParticle($pos, new HappyVillagerParticle());
        $world->addParticle($pos->add(1, 0, 0), new HappyVillagerParticle());
        $world->addParticle($pos->add(0, 1, 0), new HappyVillagerParticle());
        $world->addParticle($pos->add(0, 0, 1), new HappyVillagerParticle());
      }
      if($this->getConfig()->get("PortalParticle") === true){
        $world->addParticle($pos, new PortalParticle());
        $world->addParticle($pos, new PortalParticle());
        $world->addParticle($pos->add(1, 0, 0), new PortalParticle());
        $world->addParticle($pos->add(0, 1, 0), new PortalParticle());
        $world->addParticle($pos->add(0, 0, 1), new PortalParticle());
      }
      if($this->getConfig()->get("RedstoneParticle") === true){
        $world->addParticle($pos, new RedstoneParticle(3));
        $world->addParticle($pos, new RedstoneParticle(3));
        $world->addParticle($pos->add(1, 0, 0), new RedstoneParticle(3));
        $world->addParticle($pos->add(0, 1, 0), new RedstoneParticle(3));
        $world->addParticle($pos->add(0, 0, 1), new RedstoneParticle(3));
      }
      if($this->getConfig()->get("SnowballPoofParticle") === true){
        $world->addParticle($pos, new SnowballPoofParticle());
        $world->addParticle($pos, new SnowballPoofParticle());
        $world->addParticle($pos->add(1, 0, 0), new SnowballPoofParticle());
        $world->addParticle($pos->add(0, 1, 0), new SnowballPoofParticle());
        $world->addParticle($pos->add(0, 0, 1), new SnowballPoofParticle());
      }
      if($this->getConfig()->get("SmokeParticle") === true){
        $world->addParticle($pos, new SmokeParticle(1));
        $world->addParticle($pos, new SmokeParticle(1));
        $world->addParticle($pos->add(1, 0, 0), new SmokeParticle(1));
        $world->addParticle($pos->add(0, 1, 0), new SmokeParticle(1));
        $world->addParticle($pos->add(0, 0, 1), new SmokeParticle(1));
      }
      if($this->getConfig()->get("WaterDripParticle") === true){
        $world->addParticle($pos, new WaterDripParticle());
        $world->addParticle($pos, new WaterDripParticle());
        $world->addParticle($pos->add(1, 0, 0), new WaterDripParticle());
        $world->addParticle($pos->add(0, 1, 0), new WaterDripParticle());
        $world->addParticle($pos->add(0, 0, 1), new WaterDripParticle());
      }
    }
  }
}
