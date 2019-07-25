<?php

class connect_DB 
{
    private $mysqli;
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_password = "";
    private $db_name = "message";

    function __construct()
    {
        $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name);
        if ($this->mysqli->connect_error) {
            die("連線失敗" . $this->mysqli->connect_error);
        }
        mysqli_query($this->mysqli, "SET NAMES 'utf8'");  
    }

    //執行sql語句
    public function execute_sql($sql) 
    {
        $result = mysqli_query($this->mysqli,$sql);
        return $result;
    }

    //關閉連線
    public function close_connect() 
    {
        if (!empty($this->mysqli)) {
            $this->mysqli->close();
        }
    }

}
