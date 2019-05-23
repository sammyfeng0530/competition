<?php
/**
 * Created by PhpStorm.
 * User: 皆凡人
 * Date: 2019-03-03
 * Time: 16:57
 */

class View {

    public static $view;

    public static function init($viewtype,$config){
        self::$view = new $viewtype;
//        对试图引擎类进行初始化
        foreach($config as $key=>$value){
            self::$view -> $key = $value;
        }
    }

    public static function assign($data){
        foreach($data as $key=>$value){
            self::$view->assign($key, $value);
        }
    }

    public static function assignArray($allData){
        foreach($allData as $data){
            foreach($data as $key=>$value){
                self::$view->assign($key, $value);
            }
        }

    }

    public static function simpleAssign($key, $value){
        self::$view->assign($key, $value);
    }

    public static function display($template){
        self::$view->display($template);
    }

}