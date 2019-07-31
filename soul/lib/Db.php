<?php
namespace soul\lib;
use soul\lib\db\Pdo;
use soul\lib\db\Mysql;
use soul\lib\conf;
/**
 * 数据库类
 */

class Db
{
	private static $instance = [];
	
	private function __construct(){
		
	}
	
	public static function getInstance(){
		
		$type = conf::get('database','type');
		
		if(!isset(static::$instance[$type])){			
			if($type == 'PDO'){
				static::$instance[$type] = new Pdo();
			}else if($type == 'mysql'){
				static::$instance[$type] = new Mysql();
			}	
			return static::$instance[$type];
				
		}
		return static::$instance[$type];
	}
	
	private function __clone(){
		
	}
	
	private function __wakeup(){
		
	}
}
?>