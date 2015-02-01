# Programmer Interview Scope

###### 1. What are magic methods and how are they used, prons and cons ?

PHP functions that start with a double underscore – a “__” – are called magic functions (and/or methods) in PHP. They are functions that are always defined inside classes, and are not stand-alone (outside of classes) functions. The magic functions available in PHP are: __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __toString(), __invoke(), __set_state(), __clone(), and __autoload().

* The definition of a magic function is provided by the programmer.
* Programmer must actually write the code that defines what the magic function will do automatically by PHP ‘behind the scenes’.

This is why they are called ‘magic’ functions – because they are never directly called, and they allow the programmer to do some pretty powerful things.

* Cons for using magic methods
	* 3-20 times slower method call
	* ignores scope
	* breaks IDE code completion
