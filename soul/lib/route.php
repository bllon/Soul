<?php
namespace soul\lib;
use soul\lib\conf;

class route
{
	public $param;
	
	public function __construct()
	{
//		var_dump($_SERVER);
		$this->init();

		$url = trim($_SERVER['REQUEST_URI'],'/');
		
		if($url !== ''){
			//www.soul.com	默认路由参数
			$url = parse_url($url);
		
			$urlPath = $url['path'];
			
			$urlPath = explode('/', $urlPath);
			
			if($urlPath[0] == basename(ROOT)){
				//没有使用虚拟域名
				array_shift($urlPath);	//Framework			
				//是否隐藏了index.php
				if($urlPath[0] == 'index.php'){
					array_shift($urlPath);
				}						
			}else{
				//使用了虚拟域名
				if($urlPath[0] == 'index.php'){
					array_shift($urlPath);
				}						
			}
		}
		
		if(empty($urlPath)){
			//	默认路由参数
		}else{
			//模块名
			$this->param['model'] = array_shift($urlPath);
			define('MODEL',$this->param['model']);
			//控制器名
			$this->param['controller'] = array_shift($urlPath);
			define('CONTROLLER',$this->param['controller']);
			//方法名
			$this->param['action'] = array_shift($urlPath);
			define('ACTION',$this->param['action']);
		}
		
		//既有问号参数，也有框架参数
		
		if(isset($url['query']) && !empty($urlPath)){
			throw new \Exception('找不到路由');			
			exit;
		}
		
		if(!empty($urlPath)){
			$count = count($urlPath);
			for($i=0;$i<$count;$i+=2){
				if(isset($urlPath[$i+1])){
					$_GET[$urlPath[$i]] = $urlPath[$i+1];
				}				
			}
			unset($i);
			unset($count);
			unset($url);
			unset($urlPath);
		}
		
	}

	public function init(){
		$conf = conf::all('app');
		$this->param = [
			'model' => $conf['default_model'],
			'controller' => $conf['default_controller'],
			'action' => $conf['default_action']
		];
	}
	
	//获取当前模块
	public static function getModel(){

	}
	
	//获取当前控制器
	public static function getController(){
		
	}
	
	//获取当前方法
	public static function getAction(){
		
	}
}
?>