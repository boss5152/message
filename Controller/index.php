<?php

require_once("tool.php");
if (isset($_COOKIE['tips'])) {
    $tips = $_COOKIE['tips'];
    setcookie("tips", "", time()-3600);
}

$user = new Article();
$result = $user->show_article();

$array_title = $array_content = $array_nickname = $array_create_date = $array_article_id = [];

//拆成單一陣列
foreach($result as $array_single){
    array_push($array_title,$array_single['title']);
    array_push($array_content,$array_single['content']);
    array_push($array_nickname,$array_single['nickname']);
    array_push($array_create_date,$array_single['create_date']);
    array_push($array_article_id,$array_single['article_id']);
}

$array = [
    "array_title" => $array_title,
    "array_content" => $array_content,
    "array_nickname" => $array_nickname,
    "array_create_date" => $array_create_date,
    "array_article_id" => $array_article_id
];
foreach ($array as $k => $v) {
    $smarty->assign($k, $v);
}

$smarty->assign("tips", $tips);
$smarty->display("index.html"); 
