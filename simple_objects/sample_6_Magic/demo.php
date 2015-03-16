<?php
/**
* Magic Methods simple Demo
*/
class Test
{
	// Property
	public $name;

	public function Hello()
	{
		echo 'Hello';
	}

	function __get($param)
	{
		echo '$pram does not exists';
	}

	function __set($name, $value)
	{
		echo "You were going to set a property of $name -> $value";
		$this->{$name} = $value;
	}

	function __call($param, $value)
	{
		echo "You were going to process $param";
		print_r($value);
	}

/*	function __construct()
	{
		echo "item created";
	}

	function __destruct()
	{
		echo "item erased";
	}

	function __toString()
	{
		return "string";
	}

	function __clone()
	{
		echo '1';
	}
*/
	function __invoke($vars)
	{
		echo 'Invoke this ...';
	}

}

$test = new Test();
// $test->Hello();
// $test->lastname; // get method executes
// $test->fiction = 12; // Seting property with __set 

//$test->SomethingThatDoesntExist('123', '578', '421'); // __call method
// echo $test; // __toString method
// $test2 = clone $test; //__clone method
// $test(2); // __invoke