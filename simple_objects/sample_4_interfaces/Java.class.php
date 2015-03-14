<?php 
class JavaInterface implements DotSyntax, Compiled
{
	
	public function __construct()
	{
		echo 'Java was created';
		$this->UsesDotSyntax();
	}

	public function UsesDotSyntax()
	{
		echo 'Yes';
	}

	public function isCompiled()
	{
		echo "Yes IsComplied, it creates jar files";
	}
}