<?php
/**
* 
*/
class Character
{
	// This means that can be accessed by this class or extended...
	protected $hp = 100;
	protected $dmg = 10;
	protected $armor = 10;

	protected function __construct()
	{
		echo "The Character was created";
	}

	public function Attack()
	{
		echo "We attacked for " . $this->dmg;
	}
}