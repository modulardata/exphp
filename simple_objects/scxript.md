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
	+ interact with classes without knowing which class it is =>this is a programming language feature that allows value diffrent data types to be handled using a uniform interface.

##### 1.2 Why are objects useful ?
 
* Code organization and maintainability
* Add calarity, reduce complexity
* Simple rules allow complex interactions
* Emp[hasizes data over procedure
* Code modularrity
* Code reusability
* Well-suited for databases

##### 1.3 Acces Modifiers

* public = Everywhere
* private = This class only
* protected = This class and subclass


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

### 4.Accessing Classes without Instantiation (Using Static Word or method)

###### Facts

* single connections for databases or services
* avoids need for global scope (before PHP 5.3 version)
* single instance of a class
* no need to instantiaste member class
* properties are stored at class level
* static to regular method similarities
	- naming convention
	- scope
	- returns a value
* static to regular method diffrences
	- cannot use $this 
		-fatal error
	- use self
		- ``self::$property``

######  Leveraging scope resolution operators

* scope resolution operator 
	- ``'::'``
		- ``Class::method()``
		- ``Class::$property``

######  Setting constant values

* class constants
	* implementation
		- ``ALL_CAPS_SEPARATED_BY_UNDERSCORES``
		- should only contain simple values
		- ``const NAME_NO_DOLLAR_SIGN = 44;``
	* properties that never change ...
		- error codes
		- data structure names

### 5. OOP Database and inproved extension

* For example MySqli or PDO
* both object-oriented and procedural API
* interacts with a database
* usully optimal to have one connection at the time


### 6. Inheritance

* fundamental object-oriented principle
* is a relationship between classes and instances
	- subclass (child) of another class (parent)
	- define common functionality
	- child extends parent

###### Usage

* a class must be defined to be extended
* autoloading can be used to include missing class definitions

######  Extending

* can only extend one class's methods/properties at a time
* cannot specify multiple classes at a time
* can extend a class that extends another class
* use 'extends' keyword 

###### Abstracting

* introduced in PHP 5
* abstract classes cannot be instantiated
* when extending, abstract methods must also be abstract
	- if a class has an abstract method, then the class must be abstract
* provides behavior of child classes

###### Approaches to initialization

* ``Abstract__construct`` - fragile, unwiedly
* ``Abstract__init`` - call from class constructor

###### Abstract scope

* methods implementing must have some or less-restrictive scope
	- public must stay public
	- private can be made public
	- prevents unexpected behavior

markdown
###### Object interface

* specifies methods that a class must implement
* is similar to abstract class
* every method is abstract and public 
* can extend another interface
* ``sharing common API``
	+ polymorphism		