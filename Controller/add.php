<?php

require_once('tool.php');

$useTool = new Tool();
$useTool->checkLogin();

if (!empty($_POST)) {
    //取值
    $arrayGetPost = $useTool->getPost();
    //檢查是否有空
    if (!empty($_POST["title"]) && (!empty($_POST["content"]))) {
        //檢查長度
        if (mb_strlen($title, "utf-8") > 15) {
            $tips .= "標題不可超過15字，您的標題為" . mb_strlen($title, "utf-8") . "字";
        } elseif (mb_strlen($content, "utf-8") > 100) {
            $tips .= "內容不可超過100字，您的內容為" . mb_strlen($content, "utf-8") . "字";
        } elseif ($tips == '') {
            //把ID裝入
            $user_id = $_COOKIE['user_id'];
            $arrayGetPost['user_id'] = $user_id;

            // $arrayGetPost = [
            //     'title' => $title, 
            //     'content' => $content, 
            //     'user_id' => $user_id
            // ];
            
            $user = new Article();
            $result = $user->insert($arrayGetPost);
            
            //未來檢測弄成funtion-------
            if ($result == true) {
                $tips = "發文成功";
            } else {
                $tips = "失敗";
            }
            //------------
            $useTool->setTips($tips);
            header("Location: index.php");
        }
    } else {
        $tips .= "內容標題不得為空";
    }
    $smarty->assign("title", $title);
    $smarty->assign("content", $content);
}

$smarty->assign("tips", $tips);
$smarty->display("add.html"); 
