<?php
/* Smarty version 3.1.39, created on 2025-03-11 01:20:42
  from 'C:\xampp\htdocs\ibilling\ui\theme\ibilling\view-email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67cfc82a89aad3_88189165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef82194b323f21fe2dbb6664bf7eaf9c6ef7eb65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibilling\\ui\\theme\\ibilling\\view-email.tpl',
      1 => 1741601561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cfc82a89aad3_88189165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175872722267cfc82a892d24_63937116', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_175872722267cfc82a892d24_63937116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_175872722267cfc82a892d24_63937116',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row animated fadeInDown">
        <div class="col-lg-12"  id="application_ajaxrender">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5> <?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>
 </h5>

                    <div class="ibox-tools">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/sent-emails" class="btn btn-info btn-xs"><i class="fa fa-mail-reply-all"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Back To Emails'];?>
</a>
                    </div>

                </div>
                <div class="ibox-content">

                    <?php echo $_smarty_tpl->tpl_vars['d']->value['message'];?>


                </div>


            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
