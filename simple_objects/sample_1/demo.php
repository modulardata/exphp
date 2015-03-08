<?php  
require 'classAdress.inc';

echo '<h2>Instantiating Address</h2>';
$address = new Address;

echo '<h2>Empty Address</h2>';
// var_export => Outputs or returns a parsable string representation of a variable. 
echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>'; 

// Setting properties of Adress
echo "<h2>Setting properties</h2>";
$address->street_address_1 = '555 X Street';
$address->street_address_2 = '311 X Street';
$address->city_name = 'Repocity';
$address->subdivision_name = 'State';
$address->postal_code = '12345';
$address->country_name = 'Imagiery';
$address->address_type_id = 1;
// var_export => Outputs or returns a parsable string representation of a variable. 
echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>'; 

// Dislaying address by display method
echo "<h2>Display address...</h2>";
echo $address->display();

echo '<h2>Testing magic __get and __set</h2>';
unset($address->postal_code);
echo $address->display();

echo "<h2>Testing Address __construct with array</h2>";
$address_2 = new Address(array(
								'street_address_1' => 'class 0101', 
								'city_name' => 'BitCity', 
								'subdivision_name' => 'Trion', 
								'postal_code' => '101010', 
								'country_name' => 'Republic', 
								));

echo $address_2->display();

echo "<h2>Address __toString </h2>";
echo $address_2;

echo "<h2>Displaying address types...</h2>";
echo '<tt><pre>' . var_export(Address::$valid_address_types, TRUE) . '</pre></tt>';

echo '<h2>Testing address type ID validation</h2>';
for ($id= 0; $id <= 4 ; $id++) { 
	echo "<div>$id: ";
	echo Address::isValidAddressTypeId($id) ? 'Valid' : 'Invalid';
	echo "</div>";

}



?>