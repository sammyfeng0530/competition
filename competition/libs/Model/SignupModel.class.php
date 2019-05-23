<?php
/**
 * Created by PhpStorm.
 * User: 皆凡人
 * Date: 2019-03-07
 * Time: 21:02
 */
class SignupModel{
    private $_table = 'signup';

    public function getSignupInfo($teamId){
        $sql = 'select * from '.$this->_table.' where team_id='.$teamId;
        return Db::findOne($sql);
    }

    public function isSignup($teamId){
        $sql = 'select signup_situation from '.$this->_table.' where team_id='.$teamId;
        return Db::findResult($sql);
    }

    public function teamSignup($teamId){
        if(!empty($teamId)){
            $team_id = daddslashes($teamId);
            $data = array(
                'team_id'=>$team_id,
            );
            Db::insert($this -> _table, $data);
            return 1;
        }else{
            return 0;
        }
    }
}