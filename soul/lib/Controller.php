<?php
namespace soul\lib;

class Controller
{
	public $data = [];
	
	public function assign($name,$value){
		if(!isset($this->data[$name])){
			$this->data[$name] = $value;
		}
	}
	
	public function display(){
		//获取模板路径
		$file = APP.DIRECTORY_SEPARATOR.MODEL.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.CONTROLLER.DIRECTORY_SEPARATOR.ACTION.'.html';
		if(is_file($file)){			
			extract($this->data);
							
			$smarty = new \Smarty;		
//			$smarty -> caching = true;//是否使用缓存
			//设置编译目录
			$smarty -> compile_dir = ROOT.DIRECTORY_SEPARATOR.'runtime'.DIRECTORY_SEPARATOR.'smarty'.DIRECTORY_SEPARATOR.'templates_c';
			$smarty -> cache_dir = ROOT.DIRECTORY_SEPARATOR.'runtime'.DIRECTORY_SEPARATOR.'smarty'.DIRECTORY_SEPARATOR.'smarty_cache';//缓存文件夹

			$smarty->addPluginsDir(SOUL.DIRECTORY_SEPARATOR.'common'.DIRECTORY_SEPARATOR.'smarty');
			$smarty->debugging = false;
			$smarty->cache_lifetime = 120;
//			var_dump($smarty->getPluginsDir());
			
			//注册自定义函数
			$function['function'] = require SOUL.DIRECTORY_SEPARATOR.'common'.DIRECTORY_SEPARATOR.'smarty'.DIRECTORY_SEPARATOR.'function.php';
			$function['block'] = require SOUL.DIRECTORY_SEPARATOR.'common'.DIRECTORY_SEPARATOR.'smarty'.DIRECTORY_SEPARATOR.'block.php';
			$function['modifier'] = require SOUL.DIRECTORY_SEPARATOR.'common'.DIRECTORY_SEPARATOR.'smarty'.DIRECTORY_SEPARATOR.'modifier.php';
			
			
			foreach($function as $k=>$v){
				foreach($v as $c=>$f){
					$smarty->registerPlugin($k,$c,$f);
				}
			}
			
			foreach($this->data as $k=>$v){
				$smarty->assign($k,$v,true);
			}
						
			$smarty->display($file);
		}else{
			throw new \Exception('模板文件不存在 '.$file);
		}
	}
}
?>