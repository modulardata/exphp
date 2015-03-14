<?php

/**
* 	File Logger scxript workout
*/
class Log
{

	private $_FileName;
	private $_Text;

	/**
	*	@desc  Wrirtes to a file
	* 	@param str $fileName The name of the file
	* 	$param str $text  Data to be appended to file.
	* */
	public function Write($fileName, $text)
	{
		// Set Class Vars
		$this->_FileName = $fileName;
		$this->_Text = $text;

		// Check Data
		$this->_CheckPremission();
		$this->_CheckText();


		// Write the File
		$handle = fopen($fileName, 'a+');

		fwrite($handle, "\r" . $text);
		fclose($handle);
	}	

	public function Read($fileName)
	{
		$this->_FileName = $fileName;

		$this->_CheckExists();

		// handle open and read 
		  $handle = fopen($fileName, 'r');
		// return via file get contents
		  return file_get_contents($fileName);
	}

	private function _CheckExists()
	{
		if (!file_exists($this->_FileName)) 
		{
			die('The file does not exists');				
		}
	}

	private function _CheckPremission()
	{
		// Check file premmissions 
		if (!is_writeable($this->_FileName)) 
		{
			die('Change your CHMOD premissions to ' . $this->_FileName);
		}
	}
	private function _CheckText()
	{
		if (strlen($this->_Text) < 1) 
		{
			die('You must have more than one character for data ');
		}
	}


}

// $log = new Log;
// Create a file
// $log->Write('note.txt', 'This is a scxript fiction');
//Use the <pre> element when displaying text with unusual formatting, or some sort of computer code.
echo "<pre>"; 
// Read a note.txt file and echo in browser
// echo $log->Read('note.txt');