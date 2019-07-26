<?php
/* Smarty version 3.1.33, created on 2019-07-26 04:40:08
  from 'C:\xampp\htdocs\msg\Controller\templates\msg_add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3a680894dcb1_96043192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd41547c95cb97b869a56b3a5656157058f76797c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\msg\\Controller\\templates\\msg_add.html',
      1 => 1564108806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3a680894dcb1_96043192 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta charset="UTF-8"/>
        <title>新增</title>
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
            <form action="msg_add.php" method="post" name="formAdd" >
            <div class="form-group">
                <label for="content">留言內容 : </label>
                <textarea class="form-control" rows="5" name="msg_content" id="msg_content" placeholder="中英數上限15字" oninput="checkMsgLength()"></textarea>
            </div>
                <input type="hidden" name="article_id" value="<?php echo $_smarty_tpl->tpl_vars['article_id']->value;?>
">
                <button class="btn btn-primary" id="addMsg">新增留言</button>
            </form>
        </div>
        <div>
            <input id="tips" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tips']->value;?>
">
        </div>
    </body>
 </html><?php }
}
