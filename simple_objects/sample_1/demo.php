<?php  
require 'classAdress.inc';
require 'class.Database.inc';

echo '<h2>Instantiating Address</h2>';
$address = new Address;


// Setting properties of Adress
echo "<h2>Setting properties</h2>";
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

echo $address_2;

