<?php

// require_once('tool.php');
header('Content-Type: application/json; charset=UTF-8'); //設定資料類型為 json，編碼 utf-8
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $account = $_POST["account"];
    $password = $_POST["password"];
    if ($account != null && $password != null) {
        //回傳 nickname 和 password json 資料
        echo json_encode(array(
            'account' => $account,
            'password' => $password
        ));
    } else {
        //回傳 errorMsg json 資料
        echo json_encode(array(
            'errorMsg' => '資料未輸入完全！'
        ));
    }
} else {
    //回傳 errorMsg json 資料
    echo json_encode(array(
        'errorMsg' => '請求無效，只允許 POST 方式訪問！'
    ));

}
