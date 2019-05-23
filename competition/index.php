<?php
/**
 * Created by PhpStorm.
 * User: 皆凡人
 * Date: 2019-03-05
 * Time: 14:03
 */

header('Content-type:text/html;charset=utf-8');
date_default_timezone_set('Asia/Shanghai');
require_once 'config.php';
require_once 'framework/Pc.php';
PC::run($config);