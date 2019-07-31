<?php
namespace app\index\controller;
use soul\lib\Controller;
use soul\lib\Db;

class index extends Controller
{
	
	public function index(){
		echo 'soul框架';
		$db = Db::getInstance();
		$ret = $db->query('select ID,teamName from team where ID <= :id',[':id'=>7]);
		var_dump($ret);
//		$db->transaction();
		
//		$data = [
//			[
//				'id'=>30,
//				'name'=>'北京'
//			],
//			[
//				'id'=>31,
//				'name'=>'湖北'
//			]
//		];
//		try{
//			$ret = $db->insertAll('insert into team values(:id,:name)',['id','name'],$data);
//			$db->commit();
//		}catch(Exception $e){
//			$db->rollback();
//		}
	}
	
	public function cat(){
		$this->assign('time',time());
		$this->assign('title','soul框架');
		
		$arr = [1,2,3,4,5];
		$this->assign('arr', $arr);
		$this->assign("bold", "1");
		$this->assign("Name", "Fred Irving Johnathan Bradley Peppergill");
		$this->assign("FirstName", array("John", "Mary", "James", "Henry"));
		$this->assign("LastName", array("Doe", "Smith", "Johnson", "Case"));
		$this->assign(
		    "contacts",
		    array(
		        array("phone" => "1", "fax" => "2", "cell" => "3"),
		        array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")
		    )
		);
		$this->assign("option_values", array("NY", "NE", "KS", "IA", "OK", "TX"));
		$this->assign("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));
		$this->assign("option_selected", "NE");
		
		$this->display();
	}
}
?>