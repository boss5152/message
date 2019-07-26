<?php
/* Smarty version 3.1.33, created on 2019-07-26 09:31:12
  from 'C:\xampp\htdocs\msg\Controller\templates\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3aac403cb9e7_54029529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1eaaa2f80671e593537b20d22b4e80698a27b48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\msg\\Controller\\templates\\register.html',
      1 => 1564126257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3aac403cb9e7_54029529 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta charset="UTF-8"/>
        <title>註冊</title>
        <?php echo '<script'; ?>
 type="text/javascript" src="http://localhost/msg/Controller/javascript/tool.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.4.0/css/bootstrap.min.css">
        <?php echo '<script'; ?>
 src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.staticfile.org/twitter-bootstrap/3.4.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <p></p>
        <div class="container col-md-4 col-md-offset-4">
            <form action="register.php" method="post">
                <div class="form-group">
                    <label>您的暱稱 : </label>
                    <input type="text" class="form-control" name="nickname" id="nickname" placeholder="中英數上限5字">
                    <p id="msgNickname"></p>
                </div>
                <div class="form-group">
                    <label for="account">帳號 : </label>
                    <input type="text" class="form-control" name="account" id="account" placeholder="英數2碼以上12碼以下">
                    <p id="msgAccount"></p>
                </div>
                <div class="form-group">
                    <label for="password">密碼 : </label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="英數2碼以上12碼以下">
                    <p id="msgPassword"></p>
                </div>
                <div class="form-group">
                    <button id="btnRegister" type="submit" class="btn btn-primary offset-sm-3" >註冊</button>
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
