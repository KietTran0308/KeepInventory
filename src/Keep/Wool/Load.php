<?php
declare(strict_types=1);

namespace Keep\Wool;

use pocketmine\{
  Server, Player
}
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use pocketmine\event\player\PlayerDeathEvent;

class Load extends PluginBase implements Listener{

  public function onEnable(): void{
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }

  public function Keep(PlayerDeathEvent $e){
    $e->setKeepInventory(true);
  }
}
