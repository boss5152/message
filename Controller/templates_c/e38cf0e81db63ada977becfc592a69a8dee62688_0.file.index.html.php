<?php
/* Smarty version 3.1.33, created on 2019-07-26 09:30:42
  from 'C:\xampp\htdocs\msg\Controller\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3aac22c57c36_62198870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e38cf0e81db63ada977becfc592a69a8dee62688' => 
    array (
      0 => 'C:\\xampp\\htdocs\\msg\\Controller\\templates\\index.html',
      1 => 1564125607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3aac22c57c36_62198870 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <title>留言板</title>
        <meta charset="utf-8">
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
        <style>
            th{
                text-align: center;
            }
            td{
                text-align: center;
            }
            .col-fixed-title {
                width: 120px;
            }
            .col-fixed-content {
                width: 450px;
            }
            .col-fixed-user {
                width: 10%;
            }
            .col-fixed-date {
                width: 20%;
            }
            .col-fixed-view {
                width: 10%;
            }
            #title{
                width: 120px;
                overflow:hidden;
                text-overflow:ellipsis;
                white-space:nowrap;
            }
            #content{
                width: 450px;
                overflow:hidden;
                text-overflow:ellipsis;
                white-space:nowrap;
            }
        </style>
    <body>
        <p></p>
        <div class="container">
            <h2>留言板</h2>       
                <table class="table table-hover">
                    <thead>
                        <tr class="success">
                            <th class="col-fixed-title">標題</th>
                            <th class="col-fixed-content">內容</th>
                            <th>發文者</th>
                            <th>發表時間</th>
                            <th class="col-fixed-view">瀏覽</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_title']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <tr>
                            <td>
                                <div id="title">
                                    <?php echo $_smarty_tpl->tpl_vars['array_title']->value[$_smarty_tpl->tpl_vars['key']->value];?>

                                </div>
                            </td>
                            <td>
                                <div id="content">
                                    <?php echo $_smarty_tpl->tpl_vars['array_content']->value[$_smarty_tpl->tpl_vars['key']->value];?>

                                </div>
                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['array_nickname']->value[$_smarty_tpl->tpl_vars['key']->value];?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['array_create_date']->value[$_smarty_tpl->tpl_vars['key']->value];?>

                            </td>
                            <td class="col-fixed-view">
                                <a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['array_article_id']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" class="btn btn-info col-md-10" role="button">瀏覽</a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
            </table>
        </div>
        <div>
            <input id="tips" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tips']->value;?>
">
        </div>
    </body>
</html><?php }
}
