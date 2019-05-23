<?php
/**
 * Created by PhpStorm.
 * User: 皆凡人
 * Date: 2019-03-07
 * Time: 17:11
 */

class TeamModel{

    private $_table = 'team';

    private function findOneById($id){
        $sql = 'select * from '.$this->_table.' where '.$this->_table.'_id='.$id;
        return Db::findOne($sql);
    }

    public function checkTeam($id, $invitation){
        $invitation = "'"+$invitation+"'";
        $sql = 'select * from '.$this->_table.' where '.$this->_table.'_id='.$id.' and '.$this->_table.'_invitation_code='.$invitation;
        return Db::findOne($sql);
    }

    public function joinTeam($data){
        extract($data);
        if(empty($team_id)||empty($team_invitation_code)){
            return 0;
        }
        $signupSituation = M('Signup');
        $isSignup = $signupSituation->isSignup($team_id);
        if (!empty($isSignup)){
            return 1;
        }
        $team_id = daddslashes($team_id);
        $user_id = daddslashes($_SESSION['userId']);
        $data = array(
            'user_id'=>$user_id,
            'team_id'=>$team_id
        );
        Db::insert('user_team', $data);
        return 2;
    }

    public function getUserTeamInfo($teamId){
        if(empty($teamId)){
            return array();
        }else{
            $teamId = intval($teamId);
            return $this -> findOneById($teamId);
        }
    }

    public function createTeam($data,$team_id)
    {
        extract($data);
        if (empty($team_name)) {
            return 0;
        }
        $team_name = daddslashes($team_name);
        $team_slogan = daddslashes($team_slogan);
        $team_profile = daddslashes($team_profile);
        $team_invitation_code = daddslashes($team_invitation_code);
        $data = array(
            'team_name' => $team_name,
            'team_slogan' => $team_slogan,
            'team_profile' => $team_profile,
            'team_invitation_code' => $team_invitation_code
        );
//        如果队伍不存在则创建队伍
        if (empty($team_id)){
            $team_id = Db::insert($this->_table, $data);
            if (!empty($team_id)) {
                $data = array(
                    'user_id' => $_SESSION['userId'],
                    'team_id' => $team_id
                );
                Db::insert('user_team', $data);
                return 1;
            }
        }else{//队伍存在，为编辑信息
            Db::update($this -> _table, $data, 'team_id='.$team_id);
            return 2;
        }

    }



/*    public function showTeam($data){
        extract($data);
        $team_id = daddslashes($team_id);
        $team_invitation_code = daddslashes($team_invitation_code);
        return $this->checkTeam($team_id,$team_invitation_code);
    }*/
/*    public function editTeam($data, $team_id){
        extract($data);
        if(empty($team_name)){
            return 0;
        }
        $team_name = daddslashes($team_name);
        $team_slogan = daddslashes($team_slogan);
        $team_profile = daddslashes($team_profile);
        $team_invitation_code = daddslashes($team_invitation_code);
        $data = array(
            'team_name'=>$team_name,
            'team_slogan'=>$team_slogan,
            'team_profile'=>$team_profile,
            'team_invitation_code' => daddslashes($team_invitation_code)
        );
        Db::update($this -> _table, $data, 'team_id='.$team_id);
        return 1;
    }*/


/*    public function joinTeam($data, $teamId){
        extract($data);
        $team_slogan = daddslashes($team_slogan);
        $team_profile = daddslashes($team_profile);
        $team_name = daddslashes($team_name);
        $data = array(
            'team_name'=>$team_name,
            'team_profile'=>$team_profile,
            'team_slogan'=>$team_slogan
        );
        if (empty($teamId)){//加入队伍
            //选择加入已有队伍
            if($_POST['team_id']!=''){
                Db::update('user', $data, 'user_id='.$user_id);
                Db::update($this->_table, $data, $this->_table.'_id='.$id);
                return 0;
            }else{//创建队伍
                Db::insert($this -> _table, $data);
                return 1;
            }
        }else{//更改队伍信息
            Db::insert($this -> _table, $data);
            return 1;
        }
    }*/
}