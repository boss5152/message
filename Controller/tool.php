<?php

require_once('../Model/Article.php');
require_once('../Model/Member.php');
require_once('../Model/Message.php');
require_once("meun.php");
require_once('smarty.php');
$tips = '';

class Tool 
{
    public function checkLogin()
    {
        //驗證開始
        $array = [
            'token' => $_COOKIE['token'],
            'user_id' => $_COOKIE['user_id'],
            'nickname' => $_COOKIE['nickname']
        ];

        $user = new Member();
        $row_result = $user->check($array);
        //只會有1筆資料正確，故==1 
        if($row_result != 1){
            $tips = "登入逾時，請重新登入";
            setcookie("tips", $tips, time()+3600);
            header("Location: index.php");
        }
        //驗證完
    }

    public function checkUserArtUpdate($article_id)
    {
        //檢查使用者是否正確
        //丟入user_id與動作目標id
        $array = [
            'user_id' => $_COOKIE['user_id'],
            'article_id' => $article_id
        ];

        $user = new Article();
        $row_result = $user->getAll($array);
        //只會有1筆陣列個數為5的資料正確，故==5 
        if(count($row_result) != 5){
            $tips = "操作失敗，請重新操作一次";
            setcookie("tips", $tips, time()+3600);
            header("Location: index.php");
        }

    }

    public function checkUserMsgUpdate($msg_id)
    {
        //檢查使用者是否正確
        //丟入user_id與動作目標id
        $array = [
            'user_id' => $_COOKIE['user_id'],
            'msg_id' => $msg_id
        ];

        $user = new Message();
        $row_result = $user->getAll($array);
        //只會有1筆陣列個數為5的資料正確
        if(count($row_result) != 6){
            $tips = "操作失敗，請重新操作一次";
            setcookie("tips", $tips, time()+3600);
            header("Location: index.php");
        }

    }

}
