<?php
/* Smarty version 3.1.33, created on 2019-07-26 12:22:05
  from 'C:\xampp\htdocs\msg\Controller\templates\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3ad44d662bd4_64027122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '511cd212997035bb81475926e504e20246d1137d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\msg\\Controller\\templates\\login.html',
      1 => 1564136524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3ad44d662bd4_64027122 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8"/>
        <title>登入</title>
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
        <div class="container">
            <div class="col-md-5 col-md-offset-3">
                <h2>登入</h2>
                <hr>
                    <div class="form-group">
                        <label>帳號 : </label>
                        <input type="text" value='521' class="form-control" name="account" id="account" placeholder="英數2碼以上12碼以下">
                        <p id="msgAccount"></p>
                    </div>
                    <div class="form-group">
                        <label>密碼 : </label>
                        <input type="password" value='521' class="form-control" name="password" id="password" placeholder="英數2碼以上12碼以下">
                        <p id="msgPassword"></p>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary offset-sm-3" id="btnLogin">登入</button>
                        <a href="index.php" class="btn btn-danger offset-sm-2" role="button">取消</a>
                    </div>
            </div>
        </div>
        <div>                    
            <input id="tips" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tips']->value;?>
">
        </div>
    </body>
</html>

<?php }
}
