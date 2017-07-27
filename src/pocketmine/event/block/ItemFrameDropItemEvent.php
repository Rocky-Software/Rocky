<?php

namespace pocketmine\event\block;

use pocketmine\block\Block;
use pocketmine\event\Cancellable;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\tile\ItemFrame;

class ItemFrameDropItemEvent extends BlockEvent implements Cancellable {

	public static $handlerList = null;
	/** @var  Block */
	protected $block;
	/** @var  Player */
	private $player;
	/** @var  Item */
	private $item;
	/** @var  ItemFrame */
	private $itemFrame;

	/**
	 * ItemFrameDropItemEvent constructor.
	 *
	 * @param Player    $player
	 * @param Block     $block
	 * @param ItemFrame $itemFrame
	 * @param Item      $item
	 */
	public function __construct(Player $player, Block $block, ItemFrame $itemFrame, Item $item){
		$this->player = $player;
		$this->block = $block;
		$this->itemFrame = $itemFrame;
		$this->item = $item;
	}

	/**
	 * @return Player
	 */
	public function getPlayer(){
		return $this->player;
	}

	/**
	 * @return ItemFrame
	 */
	public function getItemFrame(){
		return $this->itemFrame;
	}

	/**
	 * @return Item
	 */
	public function getItem(){
		return $this->item;
	}

	/**
	 * @return Block
	 */
	public function getBlock(){
		return $this->block;
	}

	/**
	 * @return EventName|string
	 */
	public function getName(){
		return "ItemFrameDropItemEvent";
	}

}
