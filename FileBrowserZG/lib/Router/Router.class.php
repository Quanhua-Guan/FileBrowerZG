<?php

/*
 * ****************************************
 * FileName : Router.class.php
 * Author : Quanhua
 * Creation Time : 2012-5-26
 * Description : 
 *
 * Modifier : Quanhua
 * Modification Time : 2012-5-26
 * Description : 创建
 * 
 * ****************************************
 */

class Router {
    protected $theme; //主题
    protected $tpl; //使用smarty模板
    protected $msg; //执行过程的返回
    /**
     * 构造函数
     * @global type $iconThemes 
     */
    public function __construct() {
        $this->theme = new Theme();//新建主题
        $this->tpl = new Stpl(); //新建Smarty模板类,Stpl继承自Smarty,是对Smarty的定制
        $this->msg = array(); //信息数组
        
        //状态信息
        $this->tpl->assign('date', date('Y-m-d H:i:s'));
        $this->tpl->assign('cacheState', 'Cached');
        $this->tpl->assign('stylePath', STYLE_PATH);
        $this->tpl->assign('cacheState', ($this->tpl->caching ? 'Cache ON' : 'Cache OFF')); //缓存状态        
        
        //主题相关
        $this->tpl->assign('themes', $this->theme->themes);                
        $this->tpl->assign('curTheme', $this->theme->curTheme);
        $this->tpl->assign('iconThemes', $this->theme->iconThemes);
        $this->tpl->assign('curIconTheme', $this->theme->curIconTheme);
               
        //url信息,获取本文件相对与网站根目录的地址(不是文件系统的路径)
        $this->tpl->assign('reqUri', UrlProcess::getUrl($_SERVER['REQUEST_URI'])); //请求路径,不包括query string
    }
    /**
     * 获取执行过程中返回的信息
     * @return array 返回的信息
     */
    public function getMsg() {
        return $this->msg;
    }
}

