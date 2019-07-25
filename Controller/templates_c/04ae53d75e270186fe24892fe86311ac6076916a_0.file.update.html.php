<?php
/* Smarty version 3.1.33, created on 2019-07-25 12:03:30
  from 'C:\xampp\htdocs\msg\Controller\templates\update.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d397e72b988a5_21642607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04ae53d75e270186fe24892fe86311ac6076916a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\msg\\Controller\\templates\\update.html',
      1 => 1564046852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d397e72b988a5_21642607 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8"/>
        <title>編輯</title>
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
    <style>
        #content{
            height: 300px;
        }
    </style>
    <body onload="showTips()">
        <div class="container col-sm-3">
            <h2>編輯文章</h2>
            <hr>
            <form action="update.php" method="post">
                <div class="form-group">
                    <label for="title">標題 : </label>
                    <input type="text" class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
                </div>
                <div class="form-group">
                    <label for="content">內容 : </label>
                    <textarea type="content" class="form-control" name="content" id="content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea>
                    <input type="hidden" name="article_id" value="<?php echo $_smarty_tpl->tpl_vars['article_id']->value;?>
">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary offset-sm-3">確定</button>
                    <a href="index.php" class="btn btn-danger offset-sm-2" role="button">取消</a>
                </div>
            </form>
        </div>
        <div>
            <input id="tips" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tips']->value;?>
">
        </div>
    </body>
</html<?php }
}
