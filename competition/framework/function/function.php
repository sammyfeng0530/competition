<?php
function C($name, $method){
    require_once '/libs/Controller/'.$name.'Controller.class.php';
    $controller = $name.'Controller';
    $obj = new $controller();
    $obj -> $method();
}

//模型的方法不带有自己的参数，所以不引入method会灵活一些。控制器引入method是因为它是不允许有自己的参数的。
function M($name){
    require_once('/libs/Model/'.$name.'Model.class.php');
    $model = $name.'Model';
    $obj = new $model();
    return $obj;
}

//function V($name, $method){
function V($name){
    require_once('/libs/View/'.$name.'View.class.php');
    $view = $name.'View';
    $obj = new $view();
//    $obj -> $method();
    return $obj;
}

//第三方类调用函数
function ORG($path, $name, $params=array()){
    // path 是路径，name是第三方类名，params 是该类初始化的时候需要指定、赋值的属性集合，格式为 array(属性名=>属性值, 属性名2=>属性值2……)
    require_once('libs/ORG/'.$path.$name.'.class.php');
    $obj = new $name();
    if(!empty($params)){
        foreach($params as $key=>$value){
            $obj->$key = $value;
        }
    }
    return $obj;
}

//对非法字符进行转义
function daddslashes($str){
    return (!get_magic_quotes_gpc())?addslashes($str):$str;
}

function reload($info){
    echo "<script>alert('.$info.');window.location.reload();</script>";
    exit;
}
function jump($info,$url){
    echo "<script>alert('$info');window.location.href='$url';</script>";
    exit;
}
