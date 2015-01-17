<?php  
class person{
	var $name = "Stefan";
	
	function get_name(){
		
		echo $this->name;	
	}
}
	$stefan = new person();
	$stefan->get_name();
?>