<?php

require_once('Tool.php');

$useTool = new Tool();
$useTool->checkLogin();

if (!empty($_POST)) {
    //檢查是否有空
    if (!empty($_POST["title"])&&(!empty($_POST["content"]))) {
        //檢查長度
        $title = $_POST["title"];
        $content = $_POST['content'];
        if (mb_strlen($title, "utf-8") > 15) {
            $tips .= "標題不可超過15字，您的標題為" . mb_strlen($title, "utf-8") . "字";
        } elseif (mb_strlen($content, "utf-8") > 100) {
            $tips .= "內容不可超過100字，您的內容為" . mb_strlen($content, "utf-8") . "字";
        } elseif ($tips == '') {
            //修改
            $article_id = $_POST['article_id'];
            $title = htmlentities($title,ENT_NOQUOTES,"UTF-8");
            $content = htmlentities($content,ENT_NOQUOTES,"UTF-8");

            $array = [
                'title' => $title,
                'content' => $content
            ];

            $user = new Article();
            $user->update($array,$article_id);
            header("Location: index.php");
        }
    } else {
        $tips .= "內容標題不得為空";
    }
} else {
    //顯示
    $article_id = $_GET['id'];
    $user_id = $_COOKIE['user_id'];

    $user = new Article();
    $array = [
        'article_id' => $article_id,
        'user_id' => $user_id
    ];

    //----
    $row_result = $user->getAll($array);

    //防止有人亂打出現錯誤
    if ($row_result == NULL) {
        $tips = "操作失敗，請重新操作一次";
        setcookie("tips", $tips, time()+3600);
        header("Location: index.php");
    }
    //弄成function

    $title = $row_result['title'];
    $content = $row_result['content'];

    $smarty->assign("article_id", $article_id);

}

$smarty->assign("title", $title);
$smarty->assign("content", $content);
$smarty->assign("tips",$tips);
$smarty->display("update.html");
    