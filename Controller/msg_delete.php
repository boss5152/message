<?php

require_once('tool.php');

$useTool = new Tool();
$useTool->checkLogin();

$msg_id = $_GET['id'];

//先紀錄要返回的文章ID
$user = new Message();

$array = [
    'msg_id' => $msg_id
];

$row_result = $user->getAll($array);

//再砍掉
$user = new Message();
$user->delete($msg_id);

$tips = "刪除成功";
setcookie("tips", $tips, time()+3600);

header("Location: article.php?id=$row_result[article_id]");
