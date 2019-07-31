<?php
/**
 * 自定义函数块
 */
return [
	'translate'=>function ($params, $content, $smarty)
				{
				  if (isset($content)){
				    $lang = $params["lang"];
				    // 这里可以放置翻译 $content 的代码
				    return $params["lang"];
				  }
				},
];

?>