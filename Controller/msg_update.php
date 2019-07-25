<?php

require_once('tool.php');

$useTool = new Tool();
$useTool->checkLogin();

if (!empty($_POST)) {
    $msg_content = $_POST['msg_content'];
    if (mb_strlen($msg_content, "utf-8") > 15) {
        $tips .= "內容不可超過15字，您的內容為" . mb_strlen($msg_content, "utf-8") . "字";
    } elseif ($tips == '') {
        //修改
        $msg_id = $_POST['msg_id'];
        $msg_content = $_POST['msg_content'];
        $msg_content = htmlentities($msg_content, ENT_NOQUOTES, "UTF-8");

        $array = [
            'msg_content' => $msg_content
        ];

        $user = new Message();
        $user->update($array,$msg_id);

        //返回留言對應之文章用
        $user = new Message();
        $row_result = $user->getAll($array);

        header("Location: article.php?id=$row_result[article_id]");
    }

    $smarty->assign("tips", $tips);
    $smarty->display("msg_add.html");


} else {
    //顯示
    $msg_id = $_GET['id'];
    $user_id = $_COOKIE['user_id'];

    $array = [
        'msg_id' => $msg_id,
        'user_id' => $user_id
    ];
    
    $user = new Message();
    $row_result = $user->getAll($array);

     //防止有人亂打出現錯誤
     if ($row_result == NULL) {
        $tips = "操作失敗，請重新操作一次";
        setcookie("tips", $tips, time()+3600);
        header("Location: index.php");
    }
    //之後弄進tool裡

    $msg_content = $row_result['msg_content'];
    $msg_id = $row_result['msg_id'];

    $smarty->assign("msg_content",$msg_content);
    $smarty->assign("msg_id",$msg_id);
    $smarty->assign("tips",$tips);

    $smarty->display("msg_update.html"); 
}
