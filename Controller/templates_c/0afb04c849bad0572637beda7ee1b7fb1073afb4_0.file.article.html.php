<?php
/* Smarty version 3.1.33, created on 2019-07-26 11:35:13
  from 'C:\xampp\htdocs\msg\Controller\templates\article.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3ac95178a5c5_78396188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0afb04c849bad0572637beda7ee1b7fb1073afb4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\msg\\Controller\\templates\\article.html',
      1 => 1564125607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3ac95178a5c5_78396188 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <meta charset="UTF-8"/>
        <title>新增</title>
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
    <style type="text/css" >
        #art_content{
            height: 300px;
        }
        table{
            word-break: break-all;
        }
    </style>
    <body>
    <p></p>
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <tr>
                    <td class="table-active">標題</td>
                </tr>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</td>
                </tr>
                <tr>
                    <td class="table-active">內容</td>
                </tr>
                <tr>
                    <td id="art_content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="container">
        <?php if (isset($_smarty_tpl->tpl_vars['nickname']->value)) {?>
            <a href="msg_add.php?id=<?php echo $_smarty_tpl->tpl_vars['article_id']->value;?>
" class="btn btn-success col-sm-0.5" role="button">回覆</a>
            <?php if ($_smarty_tpl->tpl_vars['article_user_id']->value == $_smarty_tpl->tpl_vars['user_id']->value) {?>
                <a href="update.php?id=<?php echo $_smarty_tpl->tpl_vars['article_id']->value;?>
" class="btn btn-success col-sm-0.5" role="button">編輯</a>
                <a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['article_id']->value;?>
" class="btn btn-danger col-sm-0.5" role="button">刪除</a>
            <?php }?>
        <?php }?>

    </div>
    <hr>
    <div class="container">
        <div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_msg_name']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                <tr>
                    <td>
                        留言者 : <?php echo $_smarty_tpl->tpl_vars['array_msg_name']->value[$_smarty_tpl->tpl_vars['key']->value];?>
 <br>
                    </td>
                    <td>
                        內容 : <?php echo $_smarty_tpl->tpl_vars['array_msg_content']->value[$_smarty_tpl->tpl_vars['key']->value];?>
 <br>
                    </td>
                    <td>
                        留言時間 : <?php echo $_smarty_tpl->tpl_vars['array_msg_date']->value[$_smarty_tpl->tpl_vars['key']->value];?>
 <br>
                    </td>
                    <?php if (isset($_smarty_tpl->tpl_vars['nickname']->value) && $_smarty_tpl->tpl_vars['array_user_id']->value[$_smarty_tpl->tpl_vars['key']->value] == $_smarty_tpl->tpl_vars['user_id']->value) {?>
                        <a href="msg_update.php?id=<?php echo $_smarty_tpl->tpl_vars['array_msg_id']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" class="btn btn-primary col-sm-0.5" role="button">編輯</a>
                        <a href="msg_delete.php?id=<?php echo $_smarty_tpl->tpl_vars['array_msg_id']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" class="btn btn-danger col-sm-0.5" role="button" onclick="deleteMsg()">刪除</a>
                    <?php }?>
                </tr>
                <hr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div>
        <input id="tips" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tips']->value;?>
">
    </div>
</body>
</html><?php }
}
