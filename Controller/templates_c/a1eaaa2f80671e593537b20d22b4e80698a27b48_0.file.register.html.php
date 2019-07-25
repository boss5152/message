<?php
/* Smarty version 3.1.33, created on 2019-07-25 11:27:38
  from 'C:\xampp\htdocs\msg\Controller\templates\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d39760a13cb70_30304897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1eaaa2f80671e593537b20d22b4e80698a27b48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\msg\\Controller\\templates\\register.html',
      1 => 1564046848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d39760a13cb70_30304897 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta charset="UTF-8"/>
        <title>註冊</title>
        <?php echo '<script'; ?>
 type="text/javascript" src="http://localhost/msg/Controller/templates/tool.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
        <?php echo '<script'; ?>
 src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </head>
    <body onload="showTips()">
        <div class="container col-md-5" >
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="nickname">您的暱稱</label>
                    <input type="text" class="form-control" name="nickname" placeholder="中英數上限5字">
                </div>
                <div class="form-group">
                    <label for="account">帳號</label>
                    <input type="text" class="form-control" name="account" placeholder="英數2碼以上12碼以下">
                </div>
                <div class="form-group">
                    <label for="password">密碼</label>
                    <input type="password" class="form-control" name="password" placeholder="英數2碼以上12碼以下">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary offset-sm-3" >註冊</button>
                    <a href="index.php" class="btn btn-danger offset-sm-3" role="button">取消</a>
                </div>
            </form>
        </div>
        <div>
            <input id="tips" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tips']->value;?>
">
        </div>
    </body>
</html><?php }
}
