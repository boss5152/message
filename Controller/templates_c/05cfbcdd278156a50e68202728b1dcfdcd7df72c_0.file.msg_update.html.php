<?php
/* Smarty version 3.1.33, created on 2019-07-25 11:27:45
  from 'C:\xampp\htdocs\msg\Controller\templates\msg_update.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d397611e62354_88136836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05cfbcdd278156a50e68202728b1dcfdcd7df72c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\msg\\Controller\\templates\\msg_update.html',
      1 => 1564046844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d397611e62354_88136836 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta charset="utf-8">
        <?php echo '<script'; ?>
 type="text/javascript" src="http://localhost/msg/Controller/templates/tool.js"><?php echo '</script'; ?>
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
    <body onload="showTips()">
        <div class="container">
            <form action="msg_update.php" method="post" name="formAdd" >
            <div class="form-group">
                <label for="content">內容 : </label>
                <textarea class="form-control" rows="5" name="msg_content"><?php echo $_smarty_tpl->tpl_vars['msg_content']->value;?>
</textarea>
            </div>
                <input type="hidden" name="msg_id" value="<?php echo $_smarty_tpl->tpl_vars['msg_id']->value;?>
">
                <button class="btn btn-primary">修改留言</button>
            </form>
        </div>
        <div>
            <input id="tips" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tips']->value;?>
">
        </div>
    </body>
</html><?php }
}
