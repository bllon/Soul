<?php
/* Smarty version 3.1.33, created on 2019-07-31 15:41:11
  from 'D:\wamp64\www\Framework\app\index\view\index\cat.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d41461738a7a0_03676897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4dc8d7355b7933e8a8d0cbb220dae67842bd53f' => 
    array (
      0 => 'D:\\wamp64\\www\\Framework\\app\\index\\view\\index\\cat.html',
      1 => 1564558869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d41461738a7a0_03676897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\wamp64\\www\\Framework\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'D:\\wamp64\\www\\Framework\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),2=>array('file'=>'D:\\wamp64\\www\\Framework\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),3=>array('file'=>'D:\\wamp64\\www\\Framework\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_select_time.php','function'=>'smarty_function_html_select_time',),4=>array('file'=>'D:\\wamp64\\www\\Framework\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>首页</title>
	</head>
	<body>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'test' ][ 0 ], array( 123 ));?>

		<br>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dat'][0], array( array('ab'=>'Y-m-d H:i:s'),$_smarty_tpl ) );?>

		
		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['translate'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['translate'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'translate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('translate', array('lang'=>"br"));
$_block_repeat=true;
echo $_block_plugin1(array('lang'=>"br"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Hello, world!<?php $_block_repeat=false;
echo $_block_plugin1(array('lang'=>"br"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<h1><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,'Y-m-d H:i:s');?>
</h1>
		
		<?php if ($_smarty_tpl->tpl_vars['bold']->value) {?><b><?php }?>
			
        Title: <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['title']->value);?>

        
        
        <b><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['Name']->value, 'UTF-8');?>
</b>
        
        <?php
$__section_outer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['FirstName']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_outer_0_total = $__section_outer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_outer'] = new Smarty_Variable(array());
if ($__section_outer_0_total !== 0) {
for ($__section_outer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] = 0; $__section_outer_0_iteration <= $__section_outer_0_total; $__section_outer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum'] = $__section_outer_0_iteration;
?>
        <br/>
        	
	        <?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null) / 2)) {?>
	            <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum'] : null);?>
 . <?php echo $_smarty_tpl->tpl_vars['FirstName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>

	        <?php } else { ?>
	            <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum'] : null);?>
 * <?php echo $_smarty_tpl->tpl_vars['FirstName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>

	        <?php }?>
	    <?php }} else {
 ?>
	        none
    	<?php
}
?>
		
		<br/>
		<?php
$__section_sec1_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contacts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_1_total = $__section_sec1_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_1_total !== 0) {
for ($__section_sec1_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_1_iteration <= $__section_sec1_1_total; $__section_sec1_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
	        phone: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['phone'];?>

	        <br>
	
	            fax: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['fax'];?>

	        <br>
	
	            cell: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['cell'];?>

	        <br>
	    <?php
}
}
?>
	    
	    <br />
	    <?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>

	    
	    <br />
	    <?php echo smarty_function_html_select_date(array('start_year'=>1998,'end_year'=>2010),$_smarty_tpl);?>

	    <br />
	    <?php echo smarty_function_html_select_time(array('use_24_hours'=>false),$_smarty_tpl);?>

	    <br />
	    <br />
	    <select name=states>
	        <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['option_values']->value,'selected'=>$_smarty_tpl->tpl_vars['option_selected']->value,'output'=>$_smarty_tpl->tpl_vars['option_output']->value),$_smarty_tpl);?>

	    </select>
	</body>
	
</html>

<?php }
}
