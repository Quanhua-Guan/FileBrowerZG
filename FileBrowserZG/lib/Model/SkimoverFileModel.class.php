<?php

/*
 * ****************************************
 * FileName : SkimoverFileModel.class.php
 * Author : Quanhua
 * Creation Time : 2012-5-26
 * Description : 文本文件浏览类
 *
 * Modifier : Quanhua
 * Modification Time : 2012-5-26
 * Description : 创建
 * 
 * ****************************************
 */

class SkimoverFileModel extends FileModel {
    
    private $fileContents;//如果是文件的话,对应其内容

    //构造函数

    function __construct($fileName, $rootDir) {
        parent::__construct($fileName, $rootDir);        
        $this->fileContents = $this->getFileContents($this->fileName); //获取文本文件内容
    }

    //获取属性
    function __get($prop) {
        return $this->$prop;
    }

    /**
     * 获取文件内容
     * @param $fileName string  文件名
     * @return string 内容
     */
    public function getFileContents($fullName) {
        if (is_file($fullName) && $content = file_get_contents($fullName)) {
            return $content;
        } else {
            $this->msg[] = "获取文件内容失败!";
            return null;
        }
    }

}
