<?php
namespace soul\lib;

class conf
{
	public static $conf = [];
	public static function get($file,$name){
		
		if(isset(self::$conf[$file])){
			return self::$conf[$file][$name];
		}
		$path = CONF.DIRECTORY_SEPARATOR.$file.'.php';
		if(is_file($path)){
			$conf = require $path;
			self::$conf[$file] = $conf;
			return $conf[$name];
		}else{
			throw new Exception('找不到配置文件:'.$file);
		}
	}
	
	public static function all($file){
		if(isset(self::$conf[$file])){
			return self::$conf[$file];
		}
		$path = CONF.DIRECTORY_SEPARATOR.$file.'.php';
		if(is_file($path)){
			$conf = require $path;
			self::$conf[$file] = $conf;
			return $conf;
		}else{
			throw new Exception('找不到配置文件:'.$file);
		}
	}
}
?>