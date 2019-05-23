<?php
	class adminModel{

		public $_table = 'admin';

		function findOne_by_username($username){
			$sql = 'select * from '.$this->_table.' where username="'.$username.'"';
			return Db::findOne($sql);
		}

		function count(){
			$sql = 'select count(*) from '.$this->_table;
			return Db::findResult($sql, 0, 0);
		}
	}