<?php
/**
 * Created by PhpStorm.
 * User: �Է���
 * Date: 2019-03-03
 * Time: 15:45
 */

/*
 ����ļ�admin
*/

header("Content-type: text/html; charset=utf-8");
//session_start();
//(1)���������ļ�
require_once('config.php');
//(2)����΢�Ϳ��
require_once('framework/Pc.php');
//(3)�����������
PC::run($config);