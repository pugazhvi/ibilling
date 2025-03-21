<?php
/* Smarty version 3.1.39, created on 2025-03-11 09:30:40
  from 'C:\xampp\htdocs\ibilling\ui\theme\ibilling\forgot-pw.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '3.1.39',
    'unifunc' => 'content_67d03b001a2af5_46743324',
    'has_nocache_code' => false,
    'file_dependency' =>
    array(
        'fa29e8725e8c842094e0fa4c67e72fecc48861df' =>
        array(
            0 => 'C:\\xampp\\htdocs\\ibilling\\ui\\theme\\ibilling\\forgot-pw.tpl',
            1 => 1741601556,
            2 => 'file',
        ),
    ),
    'includes' =>
    array(),
), false)) {
    function content_67d03b001a2af5_46743324(Smarty_Internal_Template $_smarty_tpl)
    {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <title><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reset Password']; ?>
                - <?php echo $_smarty_tpl->tpl_vars['_title']->value; ?>
            </title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">

            <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value; ?>
/css/bootstrap.min.css" rel="stylesheet">
            <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value; ?>
/lib/fa/css/font-awesome.min.css" rel="stylesheet">

            <!-- ionicons -->
            <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value; ?>
/css/logincss.css" rel="stylesheet">



        </head>

        <body class="overflow-hidden light-background" style="background: url('https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg') no-repeat center center fixed;height: 100%;">
            <div class="wrapper no-navigation preload">
                <div class="sign-in-wrapper">
                    <div class="sign-in-inner">
                        <div class="login-brand text-center">
                            <img class="logo" style="margin-top: -140px;" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value; ?>application/storage/system/logo.png" alt="Logo">

                        </div>
                        <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) { ?>
                            <?php echo $_smarty_tpl->tpl_vars['notify']->value; ?>

                        <?php } ?>
                        <form class="login" style="margin-top: -22px;" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value; ?>admin/forgot-pw-post/">
                            <div class="form-group m-bottom-md">
                                <input type="text" class="form-control" id="username" name="username" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Address']; ?>
">
                            </div>


                            <div class="m-top-md p-top-sm">

                                <button class="btn btn-success block full-width" name="login" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reset Password']; ?>
                                </button>
                            </div>

                            <div class="m-top-md p-top-sm">
                                <div class="font-12 text-center m-bottom-xs">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value; ?>
admin/" class="font-12"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Back To Login']; ?>
                                    </a>

                                </div>


                            </div>
                        </form>
                    </div><!-- ./sign-in-inner -->
                </div><!-- ./sign-in-wrapper -->
            </div><!-- /wrapper -->



            <!-- Le javascript
================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->

            <!-- Jquery -->
            <?php echo '<script'; ?>
            src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value; ?>
            /js/jquery-1.10.2.js"><?php echo '</script'; ?>
            >

            <!-- Bootstrap -->
            <?php echo '<script'; ?>
            src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value; ?>
            /js/bootstrap.min.js"><?php echo '</script'; ?>
            >


        </body>

        </html>
<?php }
}
