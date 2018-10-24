<?php
include("ManagerDB.php");

class UserManagerDB extends ManagerDB {
    public static $table_name = 'user_table';
    
    public static function insert($array) {
        $sql = "insert into ".self::$table_name." (id, email, password) values (?, ?, ?)";
        return self::dosql($sql, $array)->last_id;
    }
}