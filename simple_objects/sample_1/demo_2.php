<?php  

/**
*Define autoloader.
*@param string $class_name
*/
function __autoload($class_name){
	include 'class.' . $class_name . '.inc';
}

echo '<h2>Instantiating AddressResidence</h2>';
$address = new Address;


// Setting properties of Adress
echo "<h2>Setting properties...</h2>";
$address->street_address_1 = '555 X Street';
$address->city_name = 'Repocity';
$address->subdivision_name = 'State';
$address->country_name = 'Imagiery';
$address->address_type_id = 1;
echo $address;

echo "<h2>Testing Address __construct with array</h2>";
$address_2 = new Address(array(
	'street_address_1' => 'class 0101', 
	'city_name' => 'BitCity', 
	'subdivision_name' => 'Trion', 
	'country_name' => 'Republic', 
));

// echo $address_2->display();

// echo "<h2>Address __toString</h2>";
echo $address_2;

// echo '<tt><pre>' . var_export($address_2, TRUE) . '</pre></tt>';