<?php
/* Smarty version 3.1.39, created on 2025-03-11 08:59:09
  from 'C:\xampp\htdocs\ibilling\ui\theme\ibilling\client_forgot_pw.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67d0339de26410_84639801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c0c39e9c0abb9e62161c065c5532938ee4382f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibilling\\ui\\theme\\ibilling\\client_forgot_pw.tpl',
      1 => 1741601554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d0339de26410_84639801 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/favicon.ico" type="image/x-icon" />

    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/icheck/skins/all.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/toggle/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style.css?ver=2.0.1" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/component.css?ver=2.0.1" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/custom.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/css/client_login.css" rel="stylesheet">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin_ui_header_client']->value, 'plugin_ui_header_add');
$_smarty_tpl->tpl_vars['plugin_ui_header_add']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plugin_ui_header_add']->value) {
$_smarty_tpl->tpl_vars['plugin_ui_header_add']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['plugin_ui_header_add']->value;?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->tpl_vars['_c']->value['rtl'] == '1') {?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap-rtl.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style-rtl.min.css" rel="stylesheet">
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['xheader']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['xheader']->value;?>

    <?php }?>

</head>
<body class="focused-form" style="background: url('https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg') no-repeat center center fixed;height: 100%;">


<div class="container" id="login-form">
    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/login/" class="login-logo"><img style="margin-top: -150px;" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/system/logo.png"></a>
    <div class="row" style="margin-top: -175px;">
        <div class="col-md-4 col-md-offset-4">

            <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

            <?php }?>


            <form action="?ng=client/forgot_pw_post/" method="post" class="" id="validate-form">



                <div class="panel panel-default md-card">
                    <div class="panel-heading"><h2>Password Reset</h2></div>
                    <div class="panel-body">


                        <div class="form-group">

                            <div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i>
								</span>
                                <input type="email" class="form-control" id="username" name="username" placeholder="Email Username" required>
                            </div>

                        </div>




                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">

                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>
                </div>


            </form>




            <div class="text-center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/register/" class="mb20">Signup Here</a> |
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/login/">Login</a>
            </div>
        </div>
    </div>
</div>


<!-- Load site level scripts -->

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery-ui-1.10.4.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- End loading site level scripts -->
<!-- Load page level scripts-->


<!-- End loading page level scripts-->
</body>
</html><?php }
}
