<?php
/**
 * Created by PhpStorm.
 * User: 皆凡人
 * Date: 2019-03-03
 * Time: 15:45
 */

/*
 入口文件admin
*/

header("Content-type: text/html; charset=utf-8");
//session_start();
//(1)调用配置文件
require_once('config.php');
//(2)调用微型框架
require_once('framework/Pc.php');
//(3)启动框架引擎
PC::run($config);