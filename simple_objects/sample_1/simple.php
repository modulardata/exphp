<?php
/*
 * Some Simple Class
 */
 class a{
 	// Function in a Class and for All Extend Classs etc...
     function test(){
         echo "a::test called" . "<br>";
     }
     function func()
     {
     	echo "a::func called" . "<br>";
     }     
 }

/**
* Extends Class a
*/
class b extends a{
	function test()
	{
		echo "b::test called" . "<br>";
	}
}

/**
* Extends Class b
*/
class c extends b{
	function test()
	{
		parent::test();
	}
}
/**
* Extends Class c and ets
*/
class d extends c{
	function test()
	{
		b::test();
	}
}
$a = new a();
$b = new b();
$c = new c();
$d = new d();
$a->test(); // Outputs "a::test called"
$b->test(); // Outputs "b::test called"
$b->func(); // Outputs "a::func called"
$c->test(); // Outputs "b::test called"
$d->test(); // Outputs "b::test called"
