# Programmer Interview Scope Scxripts 
	 Section OOP_PHP

Object-orientation has become a key concept behind proper PHP software design. All business logic (the rules that drive how an application behaves) should be object oriented.The only exception is when small scxripts act as a
view or a way to display data returned from other objects.

### 1. What Are Objects ?

* Data type that can store and manipulate values
* Class defines what an object can do
* Class is a collection of releted functions and values
* Functions are called methods
* Values stored by an object are called properties

##### 1.1 Features

* organize large projects into manageable pieces (makes it easy to extend the functionality of existing code).
* allows for established design patterns to be used to solve common software design problems
and makes debugging much easier.
* abstraction (functionality, restricts access)
	+ defines data and structures
	+ hides implementation
* hierarchy
	+ inherited attributes and behavior
	+ incremental development
* modularity
	+ functionality is broken into task specific pieces
* polymorphism
	+ interact with classes without knowing which class it is

### 2. What is a class?
	
* bluprint of attributes and behaviors that make up object
* objects are instances of the class
	+ instances have attributes and behaviors of class
* classes modularize program functions

### 3. What are magic methods and how are they used, prons and cons ?

PHP functions that start with a double underscore – a “__” – are called magic functions (and/or methods) in PHP. They are functions that are always defined inside classes, and are not stand-alone (outside of classes) functions. The magic functions available in PHP are: __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __toString(), __invoke(), __set_state(), __clone(), and __autoload().

* The definition of a magic function is provided by the programmer.
* Programmer must actually write the code that defines what the magic function will do automatically by PHP ‘behind the scenes’.

This is why they are called ‘magic’ functions – because they are never directly called, and they allow the programmer to do some pretty powerful things.

##### 3.1 Facts

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
