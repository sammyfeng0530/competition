<?php
/**
 * Created by PhpStorm.
 * User: 皆凡人
 * Date: 2019-03-03
 * Time: 16:57
 */

class Db {//类名在php里面是一个全局变量，Db::$db或Db::方法()直接调用

    public static $db;//用于保存实例化对象

    public static function init($dbtype, $config) {
        self::$db = new $dbtype;
        self::$db->connect($config);
    }

    public static function query($sql){
        return self::$db->query($sql);
    }

    public static function findAll($sql){
        $query = self::$db->query($sql);
        return self::$db->findAll($query);
    }

    public static function findOne($sql){
        $query = self::$db->query($sql);
        return self::$db->findOne($query);
    }

    public static function findResult($sql, $row = 0, $filed = 0){
        $query = self::$db->query($sql);
        return self::$db->findResult($query, $row, $filed);
    }

    public static function insert($table,$arr){
        return self::$db->insert($table,$arr);
    }

    public static function update($table, $arr, $where){
        return self::$db->update($table, $arr, $where);
    }

    public static function del($table,$where){
        return self::$db->del($table,$where);
    }

}