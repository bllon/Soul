<?php
namespace soul\lib\db;
use soul\lib\conf;

class Pdo
{
	private $conn;
	public function __construct(){
//				'dsn'=>,
		$conf = conf::all('database');
		$conf['dsn'] = 'mysql:host='.$conf['host'].';dbname='.$conf['dbname'];
		$conf['attr'] = [
			\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
			\PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8',
			\PDO::ATTR_PERSISTENT=>true
		];
		try{
			$this->conn = new \PDO($conf['dsn'],$conf['user'],$conf['pass'],$conf['attr']);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	
	//预处理查询
	public function query($sql,$bind){
		$sth = $this->conn->prepare($sql);
		foreach($bind as $k => $v){
			$sth->bindParam($k, $v, \PDO::PARAM_STMT);
		}
		$sth->execute();
		return $sth->fetchAll(\PDO::FETCH_ASSOC);
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
		$this->conn->setAttribute(\PDO::ATTR_AUTOCOMMIT, false);
		$this->conn->beginTransaction();
	}
	
	//提交事务
	public function commit(){
		$this->conn->commit();
	}
	
	//回滚事务
	public function rollback(){
		$this->conn->rollBack();
	}
}
?>