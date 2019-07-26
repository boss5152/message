<?php

require_once('tool.php');

$article_id = $_GET['id'];

$useTool = new Tool();
$tips = $useTool->getTips();

$user = new Article();
$array = [
    'article_id' => $article_id
];

$row_result = $user->getAll($array);

//防止有人亂打出現錯誤
if ($row_result == NULL) {
    $tips = "無這則文章";
    setcookie("tips", $tips, time()+3600);
    header("Location: index.php");
}
//之後弄進tool裡

$title = $row_result['title'];
$content = $row_result['content'];
$article_id = $row_result['article_id'];
$article_user_id = $row_result['user_id'];

//Smarty
$array = [
    "title" => $title,
    "content" => $content,
    "article_id" => $article_id,
    "article_user_id" => $article_user_id
];
foreach ($array as $k => $v) {
    $smarty->assign($k, $v);
}


//留言部分
$user = new Article();
$result = $user->show_msg($article_id);

$array_msg_name = $array_msg_content = 
$array_msg_date = $array_msg_id = $array_user_id = [];

// 拆成單一陣列
foreach ($result as $array_single) {
    array_push($array_msg_name, $array_single['msg_name']);
    array_push($array_msg_content, $array_single['msg_content']);
    array_push($array_msg_date, $array_single['msg_date']);
    array_push($array_msg_id, $array_single['msg_id']);
    array_push($array_user_id, $array_single['user_id']);
}
//Smarty
$array = [
    "array_msg_name" => $array_msg_name,
    "array_msg_content" => $array_msg_content,
    "array_msg_date" => $array_msg_date,
    "array_msg_id" => $array_msg_id,
    "array_user_id" => $array_user_id
];
foreach ($array as $k => $v) {
    $smarty->assign($k, $v);
}
//user_id
if (isset($_COOKIE['user_id'])) {
    $array = [
        "user_id" => $_COOKIE['user_id'],
        "nickname" => $_COOKIE['nickname'],
        "article_id" => $article_id
    ];

    foreach ($array as $k => $v) {
        $smarty->assign($k, $v);
    }
}

$smarty->assign("tips", $tips);
$smarty->display("article.html"); 
