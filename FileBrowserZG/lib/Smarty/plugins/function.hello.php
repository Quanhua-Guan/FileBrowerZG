<?php
	function smarty_function_hello($args, &$smarty){
		$html='';

		for($i=0; $i<$args["num"]; $i++){
			$html.='<font color="'.$args["color"].'" size="'.$args["size"].'">'.$args["content"].'</font><br>';
		}

		return $html;
	}
