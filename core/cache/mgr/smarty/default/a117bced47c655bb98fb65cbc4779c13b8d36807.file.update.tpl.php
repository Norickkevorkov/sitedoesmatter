<?php /* Smarty version Smarty-3.0.4, created on 2016-04-17 19:12:14
         compiled from "/home/users/h/hsetrip/domains/sitedoesmatter.ru/manager/templates/default/resource/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1510743965713b5de65abc0-43335603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a117bced47c655bb98fb65cbc4779c13b8d36807' => 
    array (
      0 => '/home/users/h/hsetrip/domains/sitedoesmatter.ru/manager/templates/default/resource/update.tpl',
      1 => 1459857764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1510743965713b5de65abc0-43335603',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/users/h/hsetrip/domains/sitedoesmatter.ru/core/model/smarty/plugins/modifier.escape.php';
?><div id="modx-panel-resource-div"></div>
<div id="modx-resource-tvs-div"><?php echo $_smarty_tpl->getVariable('tvOutput')->value;?>
</div>
<?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hidden')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value){
?>
    <input type="hidden" id="tvdef<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->default_text);?>
" />
    <?php echo $_smarty_tpl->getVariable('tv')->value->get('formElement');?>

<?php }} ?>

<?php echo $_smarty_tpl->getVariable('onDocFormPrerender')->value;?>

<?php if ($_smarty_tpl->getVariable('resource')->value->richtext&&(isset($_smarty_tpl->getVariable('_config')->value['use_editor']) ? $_smarty_tpl->getVariable('_config')->value['use_editor'] : null)){?>
    <?php echo $_smarty_tpl->getVariable('onRichTextEditorInit')->value;?>

<?php }?>
