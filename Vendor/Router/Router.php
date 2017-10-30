<?php
class Route{
	public function Get($URL,$Action){
		if($_SERVER['REQUEST_METHOD'] == 'GET')
		{
			if($_SERVER['REQUEST_URI'] == $URL)
			{
				$Controller = explode('@',$Action);
				call_user_func_array($Controller);
			}
			else
			{
				$Router = strstr($URL,'(',true);
				$Len = strlen($Router);
				$Value = explode('/',substr($_SERVER['REQUEST_URI'], $Len));
				$Controller = explode('@',$Action);
				call_user_func_array($Controller, $Value);
			}
		}
		else
		{
			echo "Router Unexist !";
		}
	}
	
	public function Post($URL,$Action){
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			if($_SERVER['REQUEST_URI'] == $URL)
			{
				$Controller = explode('@',$Action);
				call_user_func_array($Controller);
			}
			else
			{
				$Router = strstr($URL,'(',true);
				$Len = strlen($Router);
				$Value = explode('/',substr($_SERVER['REQUEST_URI'], $Len));
				$Controller = explode('@',$Action);
				call_user_func_array($Controller, $Value);
			}
		}
		else
		{
			echo "Router Unexist!";
		}
	}
}
?>
