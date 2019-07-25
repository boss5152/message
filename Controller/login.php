<?php

require_once('tool.php');

if (!empty($_POST)) {
    $account = $_POST["account"];
    $account = htmlentities($account,ENT_NOQUOTES,"UTF-8");
    $password = $_POST['password'];
    $password = htmlentities($password,ENT_NOQUOTES,"UTF-8");
    $password = md5($password);

    $array = [
        'account' => $account,
        'password' => $password
    ];

    $user = new Member();
    $row_result = $user->login($array);
    //錯誤會回傳0

    if ($row_result ==  0) {
        $tips = "帳號密碼錯誤";
    } else {
        //設置簡單token判斷是否登入
        $token = rand(1,100000);

        //將token存入資料庫
        $array = [
            'token' => $token
        ];
        $user = new Member();
        $user->update($array,$row_result['user_id']);

        //儲存cookie，保存1小時
        setcookie("token", $token, time()+3600);
        setcookie("nickname", $row_result['nickname'], time()+3600);
        setcookie("user_id", $row_result['user_id'], time()+3600);
        header("Location: index.php");
    }
}

$smarty->assign("tips",$tips);
$smarty->display("login.html"); 
