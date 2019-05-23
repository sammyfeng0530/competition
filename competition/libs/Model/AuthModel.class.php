<?php
	class authModel{

        private $_auth = '';

/*        public function loginsubmit(){
            if(empty($_POST['id'])||empty($_POST['password'])){
                return false;
            }
            $userId = $_POST['id'];
            $password = $_POST['password'];
            //用户的验证操作，
            if ($this -> _auth = $this -> checkauth($userId, $password)){
                $_SESSION['user'] = $this -> _auth;
                return true;
            }else{
                return false;
            }

        }*/

        public function checkauth($userId, $password){
            $userObj = M('User');
            $auth = $userObj -> findOne_by_id(intval($userId));
            if((!empty($auth))&&$auth['user_pwd']==$password){
                return true;
            }else{
                return false;
            }
        }

	}