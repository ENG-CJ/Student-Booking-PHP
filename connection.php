<?php

class Connection{

    public static function GetMySqlConnection(){
        $conn = new mysqli("localhost","root","","abdisomane");
        if ($conn->connect_error)
            $conn->error;
        else
            return $conn;
    }
}
?>