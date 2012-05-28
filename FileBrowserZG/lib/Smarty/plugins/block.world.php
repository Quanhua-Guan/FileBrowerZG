<?php
	function smarty_block_world($args, $content, &$smarty){
		$html='';

		for($i=0; $i<$args["num"]; $i++){
			$html.='<font color="'.$args["color"].'" size="'.$args["size"].'">'.$content.'</font>';
		}

		return $html;	
	}
