<?php

/*
 * ****************************************
 * FileName : Theme.class.php
 * Author : Quanhua
 * Creation Time : 2012-5-26
 * Description : 主题类
 *
 * Modifier : Quanhua
 * Modification Time : 2012-5-26
 * Description : 创建
 * 
 * ****************************************
 */

class Theme {
    public $themes;//所有的全局主题
    public $curTheme;//当前全局主题
    public $iconThemes;//所有图标主题
    public $curIconTheme;//当前的图标主题
                
    function __construct() {
        $this->themes = null;
        $this->curTheme = null;
        //获取图标主题信息
        global $iconThemes;
        $this->iconThemes = $iconThemes;//所有icon主题
        
        $this->curIconTheme = 'sketch';//当前的icon主题
        if (isset($_SESSION['iconTheme'])) {
            $this->curIconTheme = $_SESSION['iconTheme'];
        }
        if (isset($_GET['iconTheme'])) {
            $this->curIconTheme = $_GET['iconTheme'];
            $_SESSION['iconTheme'] = $_GET['iconTheme'];
        }
    }    
}

