<?php
/* Smarty version 3.1.33, created on 2019-07-25 11:43:56
  from 'C:\xampp\htdocs\msg\Controller\templates\add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3979dc6fb793_33235128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e20fc9a2d48c7c4204b91f10cd94544b230238c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\msg\\Controller\\templates\\add.html',
      1 => 1564046807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3979dc6fb793_33235128 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>新增</title>
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
    <style type="text/css">
        #content{
            height: 300px;
        }
    </style>
    <body onload="showTips()">
        <div class="container">
            <h2>新增文章<h2>
            <hr>
            <form action="add.php" method="post" name="add">
                <div class="form-group">
                    <label for="title">標題</label>
                    <textarea
                        type="text" class="form-control" name="title" id="title" 
                        placeholder="中英數上限10字" 
                        oninput="checkArtLength()"></textarea>
                </div>
                <div class="form-group">
                    <label for="content">內容</label>
                    <textarea 
                        type="textarea" class="form-control" 
                        name="content" id="content" placeholder="中英數上限100字" 
                        oninput="checkArtLength()"></textarea>
                </div>
                <div class="form-group">       
                    <button class="btn btn-primary offset-sm-4" id="addArt">完成</button>
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
