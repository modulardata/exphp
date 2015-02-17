# Programmer Interview Scope Scxripts 
	 Section OOP

### 1. What Are Objects ?

* Data type that can store and manipulate values
* Class defines what an object can do
* Class is a collection of releted functions and values
* Functions are called methods
* Valuse stored by an object are called properties

### 2. What are magic methods and how are they used, prons and cons ?

PHP functions that start with a double underscore – a “__” – are called magic functions (and/or methods) in PHP. They are functions that are always defined inside classes, and are not stand-alone (outside of classes) functions. The magic functions available in PHP are: __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __toString(), __invoke(), __set_state(), __clone(), and __autoload().

* The definition of a magic function is provided by the programmer.
* Programmer must actually write the code that defines what the magic function will do automatically by PHP ‘behind the scenes’.

This is why they are called ‘magic’ functions – because they are never directly called, and they allow the programmer to do some pretty powerful things.

##### 2.1 Facts

###### PHP overloading:

	* Dynamically create property or method that:
		- has not been declared
		- is not visible
	* Dynamic entities processed using "magic methods"

###### Prons: Why use magic mehod? 
	* trigger custom behavior
		- attept to access missing property
		- missing method
	* customize object creation
	* default behavior like current time, login user...

###### Cons for using magic methods:
		
	- 3-20 times slower method call
	- ignores scope
	- breaks IDE code completion
