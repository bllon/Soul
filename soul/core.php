<?php
/**
 * 框架基类文件
 */
namespace soul;
use soul\lib\route;

class core
{
	public static function run()
	{
//		var_dump('框架启动了');
		$route = new route();

		$class = "app\\".$route->param['model']."\\controller\\".$route->param['controller'];
		$classFile = APP.DIRECTORY_SEPARATOR.$route->param['model'].DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.$route->param['controller'].'.php';

		$action = $route->param['action'];
		if(is_file($classFile)){
			try{
				(new $class())->$action();
			}catch(Exception $e){
				throw new \Exception($e->getMessage());
			}					
		}else{
			throw new \Exception('找不到控制器');
		}		
	}
	
	public static function loadClass($class)
	{
		$file = ROOT.DIRECTORY_SEPARATOR.$class.'.php';
		if(is_file($file)){
			require $file;
		}else{
			return ;
		}
	}
	
	
}
?>