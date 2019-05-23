<?php
/**
 * Created by PhpStorm.
 * User: 皆凡人
 * Date: 2019-03-05
 * Time: 19:52
 */
class UserModel{

    private $_table = 'user';

    public function findAll_orderby_dateline(){
        $sql = 'select * from '.$this->_table.' order by dateline desc';
        return Db::findAll($sql);
    }

    public function findOne_by_id($id){
        $sql = 'select * from '.$this->_table.' where '.$this->_table.'_id='.$id;
//        showmessage($sql,'');
        return Db::findOne($sql);
    }

    function del_by_id($id){
        return Db::del($this->_table, $this->_table.'_id='.$id);
    }

    function count(){
        $sql = 'select count(*) from '.$this->_table;
        return Db::findResult($sql, 0, 0);
    }

    function insert($data){
        return Db::insert($this->_table, $data);
    }

    function update($data, $id){
        return Db::update($this->_table, $data, $this->_table.'_id='.$id);
    }

    public function getUserInfo($id){
        if(empty($id)){
            return array();
        }else{
            $id = intval($id);
            return $this -> findOne_by_id($id);
        }
    }

    public function getUserTeamId($id){
        $sql = 'select team_id from user_team where '.$this->_table.'_id='.$id;
        return Db::findResult($sql);
    }

    public function signup($data){
        extract($data);
//        showmessage($data,'');
//        $user_id = $userId;
//        判断主要信息是否为空
        if(empty($user_name)||empty($user_id)||empty($user_pwd)){
            return 0;
        }
//        判断账号是否已经注册
        $isRegister= $this->findOne_by_id($user_id);
        if (!empty($isRegister)){
            return 1;
        }
//        注册
        $user_id = daddslashes($user_id);
        $user_name = daddslashes($user_name);
        $user_pwd = daddslashes($user_pwd);
        $data = array(
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'user_pwd'=>$user_pwd,
            'user_register_date'=>date("Y-m-d H:i:s",time())
        );

        Db::insert($this -> _table, $data);
        return 2;
/*        if($_POST['user_id']!=''){
            Db::update($this -> _table, $data, 'user_id='.$user_id);
            return 2;
        }
        else{

        }*/
    }

    public function editUser($data){
        extract($data);

        $user_name = daddslashes($user_name);
        $user_sex = daddslashes($user_sex);
        $user_college = daddslashes($user_college);
        $user_school = daddslashes($user_school);
        $user_major = daddslashes($user_major);
        $data = array(
            'user_name'=>$user_name,
            'user_sex'=>$user_sex,
            'user_college'=>$user_college,
            'user_school'=>$user_school,
            'user_major'=>$user_major,
        );
        if($_SESSION['userId']!=''){
            Db::update($this -> _table, $data, 'user_id='.$_SESSION['userId']);
            return 1;
        }else{
            return 0;
        }
    }

    public function joinTeam($data, $id){
        Db::update($this->_table, $data, $this->_table.'_id='.$id);
        $sql = 'select * from '.$this->_table.' where '.$this->_table.'_id='.$id;

    }



}