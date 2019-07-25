<?php

require_once("connect_DB.php");

class Member extends connect_DB
{
    public function register($array)
    {
        $field = '';
        $value = '';
        foreach ($array as $k => $v) {
            //key
            $field .= $k . ",";
            //value
            $value .= "'" . $v . "',";
        }
        //-1表示去掉最後一個','
        $field = substr($field, 0, -1);
        $value = substr($value, 0, -1);
        //執行
        $sql = "INSERT INTO Member ($field) VALUES ($value)";
        $result = $this->execute_sql($sql);
        $this->close_connect();
        return $result;
    }

    //檢查申請的帳號密碼有無重複
    public function check($array)
    {
        $field = '';
        $select = '';
        foreach ($array as $k => $v) {
            //key
            $field .= $k . ",";
            //key = value
            $select .= $k . "='" . $v . "' OR ";
        }
        $field = substr($field, 0, -1);
        $select = substr($select, 0, -3);
        //sql
        $sql = "SELECT $field FROM Member WHERE $select";
        $result = $this->execute_sql($sql);
        $row_result = mysqli_num_rows($result);
        $this->close_connect();
        return $row_result;
    }

    public function login($array)
    {
        $user = new connect_DB();
        $field = '';
        $value = '';
        foreach ($array as $k => $v) {
            $field .= $k . ",";
            $value .= "'" . $v . "',";
        }
        $field = substr($field,0,-1);
        $value = substr($value,0,-1);
        $sql = "SELECT * FROM Member WHERE ($field) = ($value)";
        //回傳結果
        $result = $this->execute_sql($sql);
        //判斷
        $row_result = mysqli_fetch_assoc($result);

        $this->close_connect();
        return $row_result;
    }

    //修改
    public function update($array, $user_id)
    {
        $update = '';
        foreach($array as $k => $v){
            $update .= $k . "='" . $v . "',";
        }
        //-1表示去掉最後一個','
        $update = substr($update, 0, -1);
        //執行
        $sql = "UPDATE member set $update WHERE user_id = $user_id";
        echo $sql;
        $result = $this->execute_sql($sql);
        $this->close_connect();
        return $result;
    }

}
