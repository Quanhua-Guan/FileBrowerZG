<?php

/*
 * ****************************************
 * FileName : UserRouter.class.php
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

class UserRouter extends Router{

    /**
     * 构造函数
     */
    function __construct() { 
        parent::__construct();
    }

    /**
     * 运行函数,根据参数调用不同方法
     */
    public function run() {
        $router = isset($_GET["router"]) ? $_GET["router"] : "browse";//默认browse
        $model = isset($_GET['model']) ? $_GET["model"] : "file";     //默认file
        $router .= ucfirst($model);//获取方法名
               
        //调用用户访问的方法，例如："index.php?file=/www&operation=brower"将去访问file模块中的brower方法
        if (method_exists($this, $router)) {
            eval('$this->' . $router . '();');  //如果$operation为add,相当于$this->operation();
        } else {            
            //记录错误信息
            die('error');
        }
    }

    /**
     * 访问文件夹
     * @global type $iconThemes 主题信息
     */
    private function browseFile() {        
        //设置用户根目录
        $userRootDir = '/';//可以从数据库获取
        //读取要访问的目录
        (!empty($_GET['file'])) ? $fileName = $_GET['file'] : $fileName = $_SERVER['DOCUMENT_ROOT'];
        //判断用户的访问目录是否超出范围
        if (!strstr($fileName, $userRootDir)) {
            $fileName = $userRootDir;
        }
        
        //判断 没缓存则执行 已经缓存则跳过
        if (!$this->tpl->is_cached('FileBrower.tpl', $fileName)) {
            //新建FileBrower对象
            $file = new BrowseFileModel($fileName, $userRootDir);            
            //给模板赋值
            $this->tpl->assign('fileName', rtrim($file->fileName, '/') . '/'); //当前文件夹
            $this->tpl->assign('userRootDir', rtrim($file->rootDir, '/') . '/'); //用户根目录
            $this->tpl->assign('parentDir', $file->parentDir); //父目录
            $this->tpl->assign('subFile', MySort::multi_array_sort((MySort::multi_array_sort($file->subFile, '1')), '0'));//子文件
        }
        //操作返回信息
        $this->tpl->assign('hasMsg', !empty($this->msg));
        $this->tpl->assign('msg', $this->msg);
        //显示模板
        $this->tpl->display('FileBrower.tpl', $fileName);
    }
    
    /**
     * 新建文件
     */
    private function createFile() {
        $pattern = "/[^".preg_quote("*&?[]-<>$#@!'`", '/')."]/";   //var_dump($pattern);    
        if (!empty($_GET['file']) && !empty($_GET['name']) 
                && !empty($_GET['type']) && preg_match($pattern, $_GET['name'])) {
            $dirName = $_GET['file'];//路径
            $fileName = $_GET['name'];//文件名
            $fileType = $_GET['type'];//类型  
            $fullName = rtrim($dirName, '/').'/'.$fileName;
            //判断文件是否存在
            if (file_exists($fullName)) {
               $this->msg[] = '创建文件失败, 文件已经存在！';
            } else {
                //新建文件(夹)
                if ($fileType == 'file' && touch($fullName)) {
                    $this->msg[] = '创建文件成功！';
                } elseif ($fileType == 'dir' && mkdir($fullName)) {
                    $this->msg[] = '创建文件夹成功！';
                }       
            }
        } else {
            if (!preg_match($pattern, $_GET['name'])) {
                $this->msg[] = '创建文件失败,文件名不符合要求！';
            } else {
                $this->msg[] = '创建文件失败, 请确认已经正确填写信息!';
            }
        }
        $this->browseFile();
    }
    
    /**
     * 浏览文件
     */
    private function skimoverFile() {
        //设置用户根目录
        $userRootDir = '/';//可以从数据库获取
        //读取要访问的目录
        if (!empty($_GET['file'])) {
            $fileName = $_GET['file'];
        }
        //判断用户的访问目录是否超出范围
        if (!strstr($fileName, $userRootDir)) {
            $fileName = $userRootDir;
        }
        
        //判断 没缓存则执行 已经缓存则跳过
        if (!$this->tpl->is_cached('FileBrower.tpl', $fileName)) {
            //新建FileBrower对象
            $file = new SkimoverFileModel($fileName, $userRootDir);            
            //给模板赋值
            $this->tpl->assign('fileName', rtrim($file->fileName, '/') . '/'); //当前文件
            $this->tpl->assign('userRootDir', rtrim($file->rootDir, '/') . '/'); //用户根目录
            $this->tpl->assign('parentDir', $file->parentDir); //文件所在文件夹
            $this->tpl->assign('fileContents', $file->fileContents);//文件内容
        }
        //操作返回信息
        $this->tpl->assign('hasMsg', !empty($this->msg));
        $this->tpl->assign('msg', $this->msg);
        //显示模板
        $this->tpl->display('FileSkimover.tpl', $fileName);
    }
    
}