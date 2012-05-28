<?php
	//Smarty的定制类
	class Stpl extends Smarty {
		function __construct() {	
			$this->template_dir = TEMPLATE_PATH;  		    //模板存放目录
			$this->compile_dir = TEMPLATE_COMPILE_PATH;     //编译目录
			$this->cache_dir = TEMPLATE_CACHE_PATH;         //缓存目录
			$this->caching = TEMPLATE_CACHE_START;          //缓存是否开启
			$this->cache_lifetime = TEMPLATE_CACHE_LIFETIME;//缓存保存时间
			$this->left_delimiter = LEFT_DELIMITER;         //左定界符
			$this->right_delimiter = RIGHT_DELIMITER;       //右定界符
		}
	}
