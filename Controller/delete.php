<?php

require_once('tool.php');

$useTool = new Tool();
$useTool->checkLogin();

$article_id = $_GET['id'];

$user = new Article();
$user->delete($article_id);

$user = new Message();
$user->delete_article($article_id);

$tips = "刪除成功";
setcookie("tips", $tips, time()+3600);

header("Location: index.php");
