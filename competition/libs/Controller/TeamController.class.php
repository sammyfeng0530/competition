<?php
/**
 * Created by PhpStorm.
 * User: 皆凡人
 * Date: 2019-03-07
 * Time: 17:12
 */
error_reporting(0);
class TeamController{

    public function joinTeam(){
        session_start();
        if(!empty($_POST)){
            if($this->checkTeam($_POST)==0){
                jump('无此队伍，请核对信息','index.php?controller=User&method=getMyTeamInfo');
            }
            if($this->isSignup()!=0){
                jump('该团队已报名，现无法加入','index.php?controller=User&method=getMyTeamInfo');
            }
            $userObj = M('Team');
            $result = $userObj -> joinTeam($_POST);
            if ($result == 0){
                jump('团队ID和邀请码不能为空！','index.php?controller=User&method=getMyTeamInfo');
            }else if ($result == 1){
                jump('该队伍已经完成报名，无法加入新成员','index.php?controller=User&method=getMyTeamInfo');
            }else{
                jump('成功加入团队','index.php?controller=User&method=getMyTeamInfo');
            }
        }
        return 0;
    }

    private function checkTeam($data){
        extract($data);
        $team_id = daddslashes($team_id);
//        $team_invitation_code = daddslashes($team_invitation_code);

        $teamObj = M('Team');
        $result = $teamObj->checkTeam($team_id,$team_invitation_code);

        if(empty($result)){
            return 0;
        }else{
            return $result;
        }
    }

    public function showTeam(){
        session_start();
        $result = null;
        if(!empty($_POST)){
            $result = $this -> checkTeam($_POST);
            if(empty($result)){
                //队伍不存在
                View::SimpleAssign('team_situation',2);
            }else{
                if($this->isSignup() == 0){
                    //队伍未报名
                    View::SimpleAssign('team_situation',1);
                }else{
                    //队伍已报名
                    View::SimpleAssign('team_situation',0);
                }
            }
        }
        View::assign(array('team'=>$result));
        View::display('index/part_views/personal_center/userJoinInTeamInfoView_part.html');
    }

    private function isSignup(){
        $signupObj = M('Signup');
        $result = $signupObj -> isSignup($_POST['team_id']);
        if(empty($result)){
            return 0;
        }else{
            if($result == 0){
                return 1;
            }
            if($result == 1){
                return 1;
            }
        }
        return false;
    }

    public function createTeam(){
        session_start();
        if(!empty($_POST)){
            $teamObj = M('Team');
            $userObj = M('User');
            $teamId = $userObj -> getUserTeamId(daddslashes($_SESSION['userId']));
            $result = $teamObj -> createTeam($_POST,$teamId);
            if ($result == 0){
                jump('创建失败！','index.php?controller=User&method=getMyTeamInfo');
            }else if($result == 1){
                jump('创建成功！','index.php?controller=User&method=getMyTeamInfo');
            }else{
                jump('修改成功！','index.php?controller=User&method=getMyTeamInfo');
            }
        }
    }
}