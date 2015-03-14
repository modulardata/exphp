<?php
/**
* 
*/
class Human extends Abstracts
{
	public function Attack()
	{
		echo 1;
		$this->Setup(500, 300);
	}

	// You must have these to work like template
	public function Defend(){}
	public function Sleep(){}
}