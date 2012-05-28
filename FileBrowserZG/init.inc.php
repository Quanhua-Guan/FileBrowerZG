<?php
session_start();

require('config.inc.php');

//自动加载类
function __autoload($className) {
	if ($className == 'Smarty') {
            include APP_CLASS_PATH.'Smarty/'.$className.'.class.php';
	} elseif (strstr($className,'Router')){
            include APP_CLASS_PATH.'Router/'.$className.'.class.php';
        } elseif (strstr($className,'Model')){
            include APP_CLASS_PATH.'Model/'.$className.'.class.php';
        } else {
            include APP_CLASS_PATH.'Public/'.$className.'.class.php';
	}
}
