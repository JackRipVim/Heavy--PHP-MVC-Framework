<?php
class Request{
	public function Get($Value)
	{
		return $_GET[$Value];
	}

	public function Post($Value)
	{
		return $_POST[$Value];
	}

	public function File($Name)
	{
		return $_POST[$Name];
	}

	public function Move($Path,$File)
	{

	}

	public function Redirect($URL)
	{

	}
}

?>