<?php  
/**
*	Define autoloader
* 	@param string $class name
* */
function __autoload($class_name){
	include 'class.' . $class_name . '.inc';	
}

echo '<h2>Instantiating AddressResidence</h2>';
$address_residence = new AddressResidence;


// Setting properties of Adress
echo "<h2>Setting properties</h2>";
$address_residence->street_address_1 = '555 X Street';
$address_residence->city_name = 'Repocity';
$address_residence->subdivision_name = 'State';
$address_residence->country_name = 'Imagiery';
$address_residence->address_type_id = 1;
echo $address_residence;


echo '<tt><pre>' . var_export($address_residence, TRUE) . '</pre></tt>';


echo "<h2>Testing Address __construct with array</h2>";
$address_2 = new Address(array(
								'street_address_1' => 'class 0101', 
								'city_name' => 'BitCity', 
								'subdivision_name' => 'Trion', 
								'country_name' => 'Republic', 
								));

echo $address_2;

