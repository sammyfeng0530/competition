<?php
	$currentdir = dirname(__FILE__);
	include_once($currentdir.'/include.list.php');
	foreach($paths as $path){
		include_once($currentdir.'/'.$path);
	}
	class Pc{
		public static $controller;
		public static $method;
//		public static $page;
		private static $config;
		private static function init_db(){
			DB::init('mysql', self::$config['dbconfig']);
		}
		private static function init_view(){
			VIEW::init('Smarty', self::$config['viewconfig']);
		}
		private static function init_controllor(){
			self::$controller = isset($_GET['controller'])?daddslashes($_GET['controller']):'Index';
		}
		private static function init_method(){
			self::$method = isset($_GET['method'])?daddslashes($_GET['method']):'index';
		}
//        private static function init_page(){
//            self::$page = isset($_GET['#'])?daddslashes($_GET['#']):'index';
//        }
		public static function run($config){
			self::$config = $config;
			self::init_db();
			self::init_view();
			self::init_controllor();
			self::init_method();
//			self::init_page();
			C(self::$controller, self::$method);
		}
	}
