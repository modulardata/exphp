<?php

/**
* Calculator Simple example of objects
*/
class Calc
{	

	public $input;
	public $input2;
	public $output;

	function setInput($int)
	{
		$this->input = (int) $int;
	}

	function setInput2($int)
	{
		$this->input2 = (int) $int;
	}

	function calculate()
	{
		$this->output = $this->input * $this->input2 ;
	}

	function getResult()
	{
		return $this->output;
	}
}

$calco = new Calc;
$calco->setInput(6);
$calco->setInput2(10);
$calco->Calculate();
echo $calco->getResult();



