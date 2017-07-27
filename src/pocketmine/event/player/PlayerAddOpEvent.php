<?php

namespace pocketmine\event\player;

use pocketmine\event\Cancellable;
use pocketmine\OfflinePlayer;

/**
 * Called when a player is given op
 */
class PlayerAddOpEvent extends PlayerEvent implements Cancellable{
	public static $handlerList = null;

	/**
	 * @param OfflinePlayer   $player
	 */
	public function __construct(OfflinePlayer $player){
		$this->player = $player;
	}
}
