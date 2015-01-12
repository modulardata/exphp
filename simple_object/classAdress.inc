<!-- /.inc extension is something like php include file but not executed on it's own / --> 
<?php 
/** Classes
* Physical address.
*/
class Address { 

	//Street address
	public $street_address_1;
	public $street_address_2;

	// Name of the City
	public $city_name;

	//Neme of the subdivision.
	public $subdivision_name;

	//Postal code.
	public $postal_code;

	// Name of the Country.
	public $country_name;
	
// Primary key of an Address
	protected $_address_id;

//When the record was creted and last updated
	protected $_time_created;
	protected $_time_updated;
 
/*FIRST METHOD
 *Display an address in HTML format
 *@return string 
*/
	function display(){
		$output = '';

		//Street address
		$output .= $this->street_address_1;
		if ($this->street_address_2) {
			$output .= '<br/>' . $this->street_address_2;
		}

		//City Subdivision Postal
		$output .='<br/>';
		$output .= $this->city_name . ', ' . $this->subdivision_name;
		$output .= ' ' . $this->postal_code;

		// Country
		$output .= '<br/>';
		$output .= $this->country_name;


		return  $output;
	}

}

?>