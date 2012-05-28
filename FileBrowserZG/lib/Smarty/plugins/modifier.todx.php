<?php
	function smarty_modifier_todx($str, $xx){
		switch($xx){
			case "lower":
				$str=strtolower($str);
				break;
			case "upper":
				$str=strtoupper($str);
				break;

			case "first":
				$str=ucfirst($str);
				break;

		}

		return $str;
	}
