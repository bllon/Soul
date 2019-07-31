<?php
namespace soul\lib\db;
use soul\lib\conf;

class Mysql
{
	private $conn;
		
	public function __construct(){
		$conf = conf::all('database');
		$this->conn = new \mysqli($conf['host'],$conf['user'],$conf['pass'],$conf['dbname'],$conf['port']);
		$this->query('set names '.$conf['charset']);
		return $this->conn;		
	}
	
	//预处理查询
	public function query($sql,$m,$id){
		$sth=$this->conn->prepare($sql);
		$sth->bind_param($m,$id);
		return $sth->execute();
	}
	
	//插入数据
	public function insertOne($sql,$bind){
		$sth = $this->conn->prepare($sql);
		return $sth->execute($bind);
	}
	
	//插入多条数据
	public function insertAll($sql,$m,$data){
		$sth = $this->conn->prepare($sql);
		$count=count($m);
		foreach($data as $v){
			$row = [];
			for($i=0;$i<$count;$i++){
				$row[':'.$m[$i]] = $v[$m[$i]];
			}
			$sth->execute($row);
		}
	}
	
	//开启事务
	public function transaction(){
		$this->conn->autocommit(false);
	}
	
	//提交事务
	public function commit(){
		$this->conn->commit();
	}
	
	//回滚事务
	public function rollback(){
		$this->conn->rollback();
	}
}
?>