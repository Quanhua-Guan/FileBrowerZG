名称:FileBrowerZG
版本:ZG (含义为中国)

简介:一个基于mvc模式简单web应用,实现远程浏览系统文件.
功能:(以下功能必须在权限允许的范围内)
    1.浏览linux下的所有文件(windows下只能浏览apache所安装的分区).
    2.可浏览文本文件的功能.
    3.可创建文件夹,文本文件.
主要使用技术:PHP,Smarty,CSS,HTML

关于安装:只要将整个文件夹放在apache的DOCUMENT_ROOT对应的目录下的任意文件夹即可.

文件组织结构简介:
  d  Public => (文件上传目录,当前版本使用)
  d  lib => 所有类都放在这里
        d  Model  => 实体类,执行具体的逻辑
        d  Public => 公用的类
        d  Router => 控制器类,分发不同请求到不同实体执行(和路由器的功能很像,因此命名)
        d  Smarty => Smarty类库
  d  style => 存放css样式,js代码,图片,主题
  d  tpl => smarty模版存放目录,存放所有的前台界面文件
  -  config.inc.php => 全局配置文件 
  -  init.inc.php => 全局出始化文件
  -  index.php => 系统入口文件
    



















