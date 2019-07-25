<?php

require_once('tool.php');

$useTool = new Tool();
$useTool->checkLogin();

if (!empty($_POST)) {
    $msg_content = $_POST['msg_content'];
    if (mb_strlen($msg_content, "utf-8") > 15) {
        $tips .= "內容不可超過15字，您的內容為" . mb_strlen($msg_content, "utf-8") . "字";
    } elseif ($tips == '') {
        $user_id = $_COOKIE['user_id'];
        $msg_content = htmlentities($msg_content, ENT_NOQUOTES, "UTF-8");
        $article_id = $_POST['article_id'];
        $msg_name = $_COOKIE['nickname'];
    
        $array = [
            'article_id' => $article_id,
            'msg_name' => $msg_name,
            'msg_content' => $msg_content,
            'user_id' => $user_id,
        ];
    
        $user = new Message();
        $user->insert($array);
    
        header("Location: article.php?id=$article_id");
    }
} else {
    $article_id = $_GET['id'];

    $array = [
        'article_id' => $article_id
    ];

    //----
    $user = new Article();
    $row_result = $user->getAll($array);

    // 防止有人亂打出現錯誤
    if ($row_result == NULL) {
        $tips = "無這則文章";
        setcookie("tips", $tips, time()+3600);
        header("Location: index.php");
    }
    // 弄成function
    
    $smarty->assign("article_id", $article_id);
}

$smarty->assign("tips", $tips);
$smarty->display("msg_add.html");

