<?php

/*
 * ****************************************
 * FileName : FileModel.class.php
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

class FileModel {
    
    protected $rootDir;   //用户权限范围内的根目录,格式不能有最后的'/',必须如:"/www"格式, 但'/'例外
    protected $fileName;  //文件全路径名,格式不能有最后的'/',必须如:"/www"格式, 但'/'例外
    protected $parentDir; //父目录(设置'/'的父目录为null),格式不能有最后的'/',必须如:"/www"格式, 但'/'例外
    protected $msg;       //文件处理过程中的反馈信息
    
    /**
     * 构造函数 
     */
    public function __construct($fileName, $rootDir) {
        $this->fileName = ($fileName == '/' ? $fileName : rtrim($fileName, '/'));//设置当前访问的文件目录
        $this->rootDir = ($rootDir == '/' ? $rootDir : rtrim($rootDir, '/'));    //设置根目录        
        $pDir = $this->getParentDir($this->fileName, $this->rootDir);            //获取父目录
        //如果是'/', 设置parentDir为null
        $this->parentDir = (($pDir == false) ? null : (($pDir == '/') ? $pDir : rtrim($pDir, '/')));
        $this->msg = array();//赋给空数组
    }
        
    /**
     * 获取父目录
     * @param string $dirName<p>
     * 当前目录的全路径,格式不能有最后的'/',必须如:"/www"格式
     * </p>
     * @param string $rootDir<p>
     * 用户权限范围的根目录,格式不能有最后的'/',必须如:"/www"格式
     * </p>
     * @return mixed <ul><li>成功,返回父目录的路径string(格式为: 除"/"外,所有都如"/www"所示,不包含最后的'/')</li>
     *     <li>失败,否则返回false</li>
     * </ul>
     */
    protected function getParentDir($dirName, $rootDir) {        
        if ($dirName != $rootDir) {
            $pos = strrpos($dirName, '/'); //获取最后一个'/'的下标
            $pDir = substr($dirName, 0, $pos);//截取父目录
            ($pDir == '') ? $pDir = '/' : null;//针对特殊路径"/"的调整
            return $pDir;            
        } else {
            return false; //如果当前目录是根目录, 返回false
        }
    }
}

    
