<?php
//$dsn = 'mysql:host=localhost;dbname=databse_name'; // Connection for mysql database
//$dsn = 'mysql:host=localhost;dbname=databse_name;port=8889'; // Connection for mac 
// $dsn = 'sqlite:C:/xampp/htdocs/sqlite/database_name.db'; // Sqlite Connection
//$dsn = 'sqlite:/Applications/MAMP/htdocs/sqlite/databse_name.db'; // Mamp connection  
// More on PDO manual drivers

$db = new PDO($dsn, 'user_name', 'password');