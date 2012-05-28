<?php

/*
 * ****************************************
 * FileName : UrlProcess.class.php
 * Author : Quanhua
 * Creation Time : 2012-5-26
 * Description : url信息处理类
 *
 * Modifier : Quanhua
 * Modification Time : 2012-5-26
 * Description : 创建
 * 
 * ****************************************
 */

class UrlProcess {    
    /**
     * url信息,获取本文件相对与网站根目录的地址(不是文件系统的路径)
     * @param string 通过$_SERVER['REQUEST_URI']获取的url地址(用'?'分割地址与查询字符串)
     * @return string url地址(不包括查询字符串)
     */
    public static function getUrl($reqUri) {
        if (($pos = strrpos($reqUri, '?'))){
            $reqUri = substr($reqUri, 0, $pos);//获取url
        } 
        return $reqUri;
    }
}

