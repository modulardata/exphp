# Programmer Interview Scope Scxripts 
	 Section PDO - PHP Data Objects

#### 1. Explain Prepared Statements ?

* Template for SQL query that uses values from user input
* Placeholders for values stored in varibles
	- Can be used for column values
	- Cannot be used for column names or operators
	- Non-numeric values are automatically wrapped in quotes
* Prevents SQL injection
* More efficient when same query is reused
* Can bind results to named varibles


#### 2. Explain Using Prepared Statements ?

* Prepare and validate the SQL with placeholders
* Bind values to the placeholders
* Execute the statement
* Bind output values to varibles (optonal)
* Fetch the results


#### 3. What is a Transaction ?

* Set of SQL queries executed as a unit
* Operation is committed only if all parts succeed
* Transaction can be rolled back if an erroe occurs
* Particularly useful for financial transfers
* Prevents rows being modified by another connection