<?php
/**
 * 自定义函数
 */
return [
	'dat'=>function ($params,$smarty)
			{
			  return date($params['ab'],time());
			},
	
];
?>