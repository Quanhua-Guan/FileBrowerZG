<?php

//字符集设定
header('Content-Type:text/html;charset=utf-8');

//时区设置	
date_default_timezone_set('PRC');

//根目录设置
@define('ROOT', dirname(__FILE__).'/');
@define('APP_CLASS_PATH', ROOT.'lib/');//
@define('UPLOAD_PATH', ROOT.'public/uploads/');
@define('STYLE_PATH', 'style/');//css样式目录

//错误报告设置
error_reporting(E_ALL);

//Smarty的设置
@define('TEMPLATE_PATH', ROOT.'tpl/');                           //模板存放目录
@define('TEMPLATE_COMPILE_PATH', ROOT.'lib/Smarty/template_c/'); //编译目录
@define('TEMPLATE_CACHE_START', 0);				 //缓存是否开启
@define('TEMPLATE_CACHE_LIFETIME', 60*60*24);                    //缓存保存时间
@define('TEMPLATE_CACHE_PATH', ROOT.'lib/Smarty/cache/');	 //缓存目录
@define('LEFT_DELIMITER', '<{');				 //左定界符
@define('RIGHT_DELIMITER', '}>');				 //右定界符

//主题
$iconThemes = array('sketch', 'blue');
