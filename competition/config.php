<?php
/**
 * Created by PhpStorm.
 * User: 皆凡人
 * Date: 2019-03-03
 * Time: 13:41
 */

/*
 配置文件
*/
$config = array(
    //视图引擎配置信息：对smarty属性进行初始化
    'viewconfig' => array(
//        'left_delimiter' => '{',  'right_delimiter' => '}',  'template_dir' => 'tpl',  'compile_dir' => 'data/template_c'),
        'left_delimiter' => '{',  'right_delimiter' => '}',  'template_dir' => 'assets/html',  'compile_dir' => 'data/template_c'),

    //数据库配置信息：对mysql属性进行初始化
    'dbconfig' => array(
        'dbhost' => 'localhost', 'dbuser'=>'root', 'dbpsw' => '0330' , 'dbname' => 'competition', 'dbcharset' => 'utf8')
);