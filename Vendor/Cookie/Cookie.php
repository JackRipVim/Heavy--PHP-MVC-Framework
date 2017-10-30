<?php

class Cookie{
	public function Set($item,$value,$time=NULL)
	{
		if($time == NULL)
		{
			setcookie($item,$value);
		}
		else
		{
			setcookie($item,$value,$time);
		}

	}

	public function Get($Value)
	{
		return $_COOKIE[$Value];
	}
}