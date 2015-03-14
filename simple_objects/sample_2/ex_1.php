<?php

/**
* 	File Logger scxript workout
*/
class Log
{
	/**
	*	@desc  Wrirtes to a file
	* 	@param str $fileName The name of the file
	* 	$param str $text  Data to be appended to file.
	* */
	public function Write($fileName, $text)
	{
		// Check file premmissions 
		if (!is_writeable($fileName)) {
			die('Change your CHMOD premissions to ' . $fileName);
		}
		// This will create a text file note
		$handle = fopen($fileName, 'a+');

		fwrite($handle, "\r" . $text);
		fclose($handle);
	}	

	public function Read($fileName)
	{
	// handle open and read 
	  $handle = fopen($fileName, 'r');
	// return via file get contents
	  return file_get_contents($fileName);
	}
}

$log = new Log;
// Create a file
$log->Write('note.txt', 'This is a scxript fiction');
//Use the <pre> element when displaying text with unusual formatting, or some sort of computer code.
echo "<pre>"; 
// Read a note.txt file and echo in browser
echo $log->Read('note.txt');
