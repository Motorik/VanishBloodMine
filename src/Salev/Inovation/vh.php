<?php

namespace Salev\Inovation;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\event\Listener;

class vh extends PluginBase implements CommandExecutor, Listener {

public function onEnable() {
$this->getServer()->getPluginManager()->registerEvents($this, $this);
}
public function onCommand(CommandSender $sender, Command $command, $label, array $params) {
  switch($command->getName()){
      case "v":
          switch(array_shift($params)){
              case "on":
                  $sender->sendMessage("§a》 §fТы §aвключил(а) §fневидимость.");
                  $sender->sendTitle("§7§l(§3Невидимость§7)","§a》 §fТы §aвключил(а) §fневидимость.");
                  $sender->addEffect(Effect::getEffect(INVISIBILITY)->setAmplifier(10)->setDuration(999999));
                  break;
              case "off":
                   $sender->sendMessage("§a》 §fТы §cвключил(а) §fневидимость.");
                   $sender->sendTitle("§7§l(§3Невидимость§7)","§a》 §fТы §cвключил(а) §fневидимость.");
                   $sender->removeEffect(Effect::INVISIBILITY);
                   break;
                   default:
                   $sender->sendMessage("§a》 §fИспользуй /v §aon §fили §coff");
                   break;
              }
      }
}
