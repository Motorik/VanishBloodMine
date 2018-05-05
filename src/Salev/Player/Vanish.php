<?php

namespace Salev\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;

use pocketmine\entity\Effect;

/*
 *  ___    ____ _    _    ___   __    __
 * / __|  /    | |  | |  / _ \  \ \  / /
 * \__ \  | () | |  | |  | __/   \ \/ /
 * |___/  \____|_|  |_|  \___|    \__/
 *
 *
 * @author salev
 * @link https://vk.com/salevpro
 * @github: https://github.com/Motorik/VanishBloodMine
 *
 */
 
 class Vanish extends PluginBase implements CommandExecutor {
 
       publuc function onEnable() {
          $this->getLogger()->info("=================================");
          $this->getLogger()->info(" Author: Salev");
          $this->getLogger()->info(" Web: https://vk.com/salevpro");
          $this->getLogger()->info(" Resource: https://github.com/Motorik/VanishBloodMine ");
          $this->getLogger()->info(" Main: Load...");
          $this->getLogger()->info(" Version: 1.1");
          $this->getLogger()->info(" Status: Online");
          $this->getLogger()->info("=================================");
          }
          public function onCommand(CommandSender $sender, Command $cmd, $label, array $params) {
                       switch($cmd->getName()){
                           case "v":
                               switch(array_shift($params)){
                                   case "on":
                                       $sender->sendMessage("§a》 §fТы §aвключил(а) §fневидимость.");
                                       $sender->sendTitle("§7§l(§3Невидимость§7)","§a》 §fТы §aвключил(а) §fневидимость.");
                                       $sender->addEffect(Effect::getEffect(14)->setAmplifier(10)->setDuration(999999999999999));
                                       break;
                                   case "off":
                                       $sender->sendMessage("§a》 §fТы §cвключил(а) §fневидимость.");
                                       $sender->sendTitle("§7§l(§3Невидимость§7)","§a》 §fТы §cвключил(а) §fневидимость.");
                                       $sender->removeEffect(Effect::getEffect(14)->setAmplifier(10)->setDuration(999999999999999));
                                       break;
                                       default:
                                       $sender->sendMessage("§a》 §fИспользуй /v §aon §fили §coff");
                                       break;
                            }
              }
}
