<?php
/**
 * 入口文件
 */
 
//定义框架常量
define('ROOT',__DIR__);	//项目根目录：Framework
define('SOUL',__DIR__.DIRECTORY_SEPARATOR.'soul');	//框架目录
define('APP',__DIR__.DIRECTORY_SEPARATOR.'app');	//应用目录
define('CONF',__DIR__.DIRECTORY_SEPARATOR.'config');	//配置文件目录
define('PUBLIC',__DIR__.DIRECTORY_SEPARATOR.'public');	//静态资源目录
define('DEBUG',true);	//是否显示错误信息

require 'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

//$smarty = new \Smarty;	//装进容器类

if(DEBUG){
	ini_set('display_errors', 'On');
}else{
	ini_set('display_errors', 'Off');
}

//引入函数库文件
require SOUL.DIRECTORY_SEPARATOR.'common'.DIRECTORY_SEPARATOR.'function.php';

//引入框架核心文件
require SOUL.DIRECTORY_SEPARATOR.'core.php';

spl_autoload_register('\soul\core::loadClass');

\soul\core::run();

?>