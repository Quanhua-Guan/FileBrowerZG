<?php
	function smarty_modifier_jieq($string, $start=0, $num=30, $hz="..."){
		return  substr($string, $start, $num).$hz;
	}
