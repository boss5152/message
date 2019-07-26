<?php

require_once('tool.php');

$article_id = $_GET['id'];

$useTool = new Tool();
$useTool->checkLogin();

$user = new Article();
$user->delete($article_id);

$user = new Message();
$user->delete_article($article_id);

$tips = "刪除成功";
$useTool->setTips($tips);

header("Location: index.php");
