<?php
class Render{
	public function View($Template,$Value=NULL,$Array=NULL){
		if($Value == NULL || $Array == NULL)
		{
			Smarty::display($Template.".blade.php");
		}
		else
		{
			Smarty::assign($Value,$Array);
			Smarty::display($Template.".blade.php");
		}
	}
}
?>
