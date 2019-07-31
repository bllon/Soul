<?php
/* Smarty version 3.1.33, created on 2019-07-31 15:14:54
  from 'D:\wamp64\www\Framework\app\index\view\index\cat.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d413feec2a7c5_28649649',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'e4dc8d7355b7933e8a8d0cbb220dae67842bd53f' => 
    array (
      0 => 'D:\\wamp64\\www\\Framework\\app\\index\\view\\index\\cat.html',
      1 => 1564557265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d413feec2a7c5_28649649 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\wamp64\\www\\Framework\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),1=>array('file'=>'D:\\wamp64\\www\\Framework\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_select_time.php','function'=>'smarty_function_html_select_time',),));
echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php $_smarty_tpl->_checkPlugins(array(0=>array(\'file\'=>\'D:\\\\wamp64\\\\www\\\\Framework\\\\vendor\\\\smarty\\\\smarty\\\\libs\\\\plugins\\\\modifier.date_format.php\',\'function\'=>\'smarty_modifier_date_format\',),1=>array(\'file\'=>\'D:\\\\wamp64\\\\www\\\\Framework\\\\vendor\\\\smarty\\\\smarty\\\\libs\\\\plugins\\\\modifier.capitalize.php\',\'function\'=>\'smarty_modifier_capitalize\',),2=>array(\'file\'=>\'D:\\\\wamp64\\\\www\\\\Framework\\\\vendor\\\\smarty\\\\smarty\\\\libs\\\\plugins\\\\function.html_options.php\',\'function\'=>\'smarty_function_html_options\',),));
?>/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';
$_smarty_tpl->compiled->nocache_hash = '16825499685d413feeb87092_66638192';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>首页</title>
	</head>
	<body>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'test1' ][ 0 ], array( 123 ));?>

		<br>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dat'][0], array( array('ab'=>'Y-m-d H:i:s'),$_smarty_tpl ) );?>

		<h1><?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'time\']->value,\'Y-m-d H:i:s\');?>
/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>
</h1>
		
		<?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php if ($_smarty_tpl->tpl_vars[\'bold\']->value) {?>/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>
<b><?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php }?>/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

			
        Title: <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars[\'title\']->value);?>
/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

        
        
        <b><?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'Name\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>
</b>
        
        <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php
$__section_outer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars[\'FirstName\']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_outer_0_total = $__section_outer_0_loop;
$_smarty_tpl->tpl_vars[\'__smarty_section_outer\'] = new Smarty_Variable(array());
if ($__section_outer_0_total !== 0) {
for ($__section_outer_0_iteration = 1, $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\'] = 0; $__section_outer_0_iteration <= $__section_outer_0_total; $__section_outer_0_iteration++, $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\']++){
$_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'rownum\'] = $__section_outer_0_iteration;
?>/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

        <br/>
        	
	        <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php if ((1 & (isset($_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\'] : null) / 2)) {?>/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

	            <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php echo (isset($_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'rownum\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'rownum\'] : null);?>
/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>
 . <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php echo $_smarty_tpl->tpl_vars[\'FirstName\']->value[(isset($_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\'] : null)];?>
/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>
 <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php echo $_smarty_tpl->tpl_vars[\'LastName\']->value[(isset($_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\'] : null)];?>
/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

	        <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php } else { ?>/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

	            <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php echo (isset($_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'rownum\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'rownum\'] : null);?>
/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>
 * <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php echo $_smarty_tpl->tpl_vars[\'FirstName\']->value[(isset($_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\'] : null)];?>
/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>
 <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php echo $_smarty_tpl->tpl_vars[\'LastName\']->value[(isset($_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_outer\']->value[\'index\'] : null)];?>
/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

	        <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php }?>/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

	    <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php }} else {
 ?>/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

	        none
    	<?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php
}
?>/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

		
		<br/>
		<?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php
$__section_sec1_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars[\'contacts\']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_1_total = $__section_sec1_1_loop;
$_smarty_tpl->tpl_vars[\'__smarty_section_sec1\'] = new Smarty_Variable(array());
if ($__section_sec1_1_total !== 0) {
for ($__section_sec1_1_iteration = 1, $_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\'] = 0; $__section_sec1_1_iteration <= $__section_sec1_1_total; $__section_sec1_1_iteration++, $_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\']++){
?>/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

	        phone: <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php echo $_smarty_tpl->tpl_vars[\'contacts\']->value[(isset($_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\'] : null)][\'phone\'];?>
/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

	        <br>
	
	            fax: <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php echo $_smarty_tpl->tpl_vars[\'contacts\']->value[(isset($_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\'] : null)][\'fax\'];?>
/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

	        <br>
	
	            cell: <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php echo $_smarty_tpl->tpl_vars[\'contacts\']->value[(isset($_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\']) ? $_smarty_tpl->tpl_vars[\'__smarty_section_sec1\']->value[\'index\'] : null)][\'cell\'];?>
/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

	        <br>
	    <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php
}
}
?>/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

	    
	    <br />
	    <?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>

	    
	    <br />
	    <?php echo smarty_function_html_select_date(array('start_year'=>1998,'end_year'=>2010),$_smarty_tpl);?>

	    <br />
	    <?php echo smarty_function_html_select_time(array('use_24_hours'=>false),$_smarty_tpl);?>

	    <br />
	    <br />
	    <select name=states>
	        <?php echo '/*%%SmartyNocache:16825499685d413feeb87092_66638192%%*/<?php echo smarty_function_html_options(array(\'values\'=>$_smarty_tpl->tpl_vars[\'option_values\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'option_selected\']->value,\'output\'=>$_smarty_tpl->tpl_vars[\'option_output\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:16825499685d413feeb87092_66638192%%*/';?>

	    </select>
	</body>
	
</html>

<?php }
}
