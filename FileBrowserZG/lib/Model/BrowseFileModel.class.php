<?php
/*
 * ****************************************
 * FileName : BrowseFileModel.class.php
 * Author : Quanhua
 * Creation Time : 2012-5-25
 * Description : 浏览文件类,浏览文件夹和文件(不查看非文件夹的内容)
 *
 * Modifier : Quanhua
 * Modification Time : 2012-5-25
 * Description : 创建
 * 
 * ****************************************
 */
class BrowseFileModel extends FileModel {
    private $subFile;     //存储子文件的数组,格式不能有最后的'/',必须如:"/www"格式, 但'/'例外

    //构造函数
    function __construct($fileName, $rootDir) {
        parent::__construct($fileName, $rootDir);
        $this->subFile = $this->getSubFile($this->fileName);//获取文件夹下面的文件
    }
    
    //获取属性
    function __get($prop) {
        return $this->$prop;
    }

    /**
     * 显示文件夹下的文件
     * @param string $dirName<p>
     * 当前目录的全路径 如:"/www", 或"/www/"
     * </p>
     * @return mixed 成功返回文件信息的二维数组,失败返回false
     */
    public function getSubFile($dirName) {
        $subFile = array();
        if (is_dir($dirName) && false !== ($handle = opendir($dirName))) {
            $i = 0;
            while (false !== ($file = readdir($handle))) {
                if ($file == '.' || $file == '..') {
                    continue;
                }
                if (is_dir($this->fileName .'/'. $file)) {                    
                    $subFile[$i][0] = 'd';
                    $subFile[$i][1] = $file;
                } else {
                    $subFile[$i][0] = '-';
                    $subFile[$i][1] = $file;
                }
                $i++;
            }
            closedir($handle);
        } else {
            return false;
        }
        return $subFile;
    }
    
}//end of class

