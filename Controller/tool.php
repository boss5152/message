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

    //回傳給使用者訊息
    public function setTips($tips)
    {
        setcookie("tips", $tips, time()+3600);
    }

    public function getTips()
    {
        //如果有cookie就把它存進$tips裡，然後傳給smarty，把cookie砍掉
        if (isset($_COOKIE['tips'])) {
            $tips = $_COOKIE['tips'];
            setcookie("tips", "", time()-3600);
            return $tips;
        }
    }

    //獲取傳來的所有資訊
    public function getPost()
    {
        $array = [];
        //判斷是否有職，有就編碼裝入陣列
        if (!empty($_POST["title"])) {
            $title = $_POST["title"];
            $title = htmlentities($title, ENT_QUOTES, "UTF-8");
            $array['title'] = $title;
        }
        if (!empty($_POST["content"])) {
            $content = $_POST['content'];
            $content = htmlentities($content, ENT_QUOTES, "UTF-8");
            $array['content'] = $content;
        }
        if (!empty($_POST["account"])) {
            $account = $_POST["account"];
            $account = htmlentities($account, ENT_NOQUOTES, "UTF-8");
            $array['account'] = $account;
        }
        if (!empty($_POST["password"])) {
            $password = $_POST['password'];
            $password = htmlentities($password, ENT_NOQUOTES, "UTF-8");
            $password = md5($password);
            $array['password'] = $password;
        }

        return $array;
        // if (!empty($_POST["title"])) {
            
        // }
        // if (!empty($_POST["title"])) {
            
        // }
        // if (!empty($_POST["title"])) {
            
        // }

    }

    // //目前沒用到
    // public function checkUserArtUpdate($article_id)
    // {
    //     //檢查使用者是否正確
    //     //丟入user_id與動作目標id
    //     $array = [
    //         'user_id' => $_COOKIE['user_id'],
    //         'article_id' => $article_id
    //     ];

    //     $user = new Article();
    //     $row_result = $user->getAll($array);
    //     //只會有1筆陣列個數為5的資料正確，故==5 
    //     if(count($row_result) != 5){
    //         $tips = "操作失敗，請重新操作一次";
    //         setcookie("tips", $tips, time()+3600);
    //         header("Location: index.php");
    //     }

    // }

    // //目前沒用到
    // public function checkUserMsgUpdate($msg_id)
    // {
    //     //檢查使用者是否正確
    //     //丟入user_id與動作目標id
    //     $array = [
    //         'user_id' => $_COOKIE['user_id'],
    //         'msg_id' => $msg_id
    //     ];

    //     $user = new Message();
    //     $row_result = $user->getAll($array);
    //     //只會有1筆陣列個數為5的資料正確
    //     if(count($row_result) != 6){
    //         $tips = "操作失敗，請重新操作一次";
    //         setcookie("tips", $tips, time()+3600);
    //         header("Location: index.php");
    //     }

    // }

}
