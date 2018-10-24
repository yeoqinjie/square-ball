<?php

require_once('db.php');

abstract class ManagerDB {
    public static $table_name;

    public static function dosql($sql, $vals = false) {
        $db = connect_pdo();
        $result = null;
        try {
            $stmt = $db->prepare($sql);
            if ($vals) {
                $stmt->execute($vals);
            } else {
                $stmt->execute();
            }

        } catch (PDOException $e) {
            $stmt = false;
        }
        $db = null;

        return $stmt;
    }

    public static function get($pk) {
        $sql = "select * from ".self::$table_name." where id = ?";
        return self::dosql($sql, array($pk))->fetch();
    }

    public static function all() {
        $sql = "select * from ".self::$table_name;
        return self::dosql($sql)->fetchAll();
    }

    public static function filter($col_name, $col_val) {
        $sql = "select * from ".self::$table_name." where $col_name = ?";
        return self::dosql($sql, array($col_val))->fetchAll();
    }

    public static function delete($pk) {
        $sql = "delete from ".self::$table_name." where id = ?";
        return self::dosql($sql, array($pk));
    }

    public static function update_one($col_name, $col_val, $pk) {
        $sql = "update from ".self::$table_name." set $col_name = ? where id = ?";
        return self::dosql($sql, array($col_name, $pk));
    }

    public abstract static function insert($array);
}