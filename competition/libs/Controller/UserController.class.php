<?php
/**
 * Created by PhpStorm.
 * User: 皆凡人
 * Date: 2019-03-05
 * Time: 19:10
 */
error_reporting(0);

class UserController{

    public function index(){
        session_start();
        if(!(isset($_SESSION['userId']))){
            jump('请登录再后操作！','index.php?controller=Index&method=index');
        }else{
//            获取用户信息
            $userObj = M('User');
            $userInfo = $userObj -> getUserInfo(daddslashes($_SESSION['userId']));
            View::assign(array('user'=>$userInfo));

//            获取用户队伍信息
            $teamObj = M('Team');
            $userTeamInfo = $teamObj -> getUserTeamInfo(daddslashes($_SESSION['userId']));
            View::assign(array('team'=>$userTeamInfo));
            View::display('index/personal_center/userMyInfoView.html');
        }
    }

    public function signup(){
        session_start();

        if(!empty($_POST)){
            $userObj = M('User');
            $result = $userObj -> signup($_POST,$_SESSION['user_id']);
            if ($result == 0){
                jump('用户名密码不能为空！','index.php?controller=Index&method=index');
            }else if($result == 1){
                jump('此账号已注册！','index.php?controller=Index&method=index');
            }else{
                json_encode(true);
                jump('注册成功！请登录','index.php?controller=Index&method=index');
            }
        }
    }

    public function canSignup(){
        $user_id = $_REQUEST["user_id"];

        $UserObj = M('User');
        $result = $UserObj->findOne_by_id($user_id);

        if ($result){
            echo json_encode(false);
        }else{
            echo json_encode(true);
        }
    }


    public function editUser(){
        session_start();
        if(!empty($_POST)){
            $userObj = M('User');
            $result = $userObj -> editUser($_POST);
            if ($result == 0){
                jump('修改失败！','index.php?controller=User&method=index');
            }else{
                jump('修改成功！','index.php?controller=User&method=index');
            }
        }
    }

/*    public function getMyInfo(){
        if ($this -> isLogin()){
//            获取用户信息
            $userObj = M('User');
            $userInfo = $userObj -> getUserInfo(daddslashes($_SESSION['userId']));
            View::assign(array('user'=>$userInfo));
            View::display('index/part_views/personal_center/userMyInfoView.html');
        }
    }*/

    public function getMyTeamInfo(){
        if ($this -> isLogin()){
            $userObj = M('User');
            $teamId = $userObj -> getUserTeamId(daddslashes($_SESSION['userId']));
            if (!empty($teamId)){
/*                View::display('index/part_views/personal_center/userJoinOrCreateTeamView_part.html');
            }else{*/
                //            获取用户队伍信息
                $teamObj = M('Team');
                $userTeamInfo = $teamObj -> getUserTeamInfo($teamId);

                $signupObj = M('Signup');
                $signup = $signupObj -> getSignupInfo($teamId);
                View::assign(array('team'=>$userTeamInfo));
                View::assign(array('signup'=>$signup));
            }
            View::display('index/personal_center/userTeamInfoView.html');
        }
    }

    public function getSignup(){
        if ($this -> isLogin()){
            $userObj = M('User');
            $teamId = $userObj -> getUserTeamId(daddslashes($_SESSION['userId']));
            if ($teamId){
                $signupObj = M('Signup');
                $signup = $signupObj -> getSignupInfo($teamId);
                if(empty($signup)){
                    View::simpleAssign('isSignup',1);
                }else{
                    View::simpleAssign('isSignup',2);
                }
            }else{
                View::simpleAssign('isSignup',0);
            }
            View::display('index/personal_center/userSignupView.html');
        }
    }

    public function getMyScheme(){
        if ($this -> isLogin()) {
            $userObj = M('User');
            $schemeObj = M('Scheme');
            $teamId = $userObj->getUserTeamId(daddslashes($_SESSION['userId']));
            if(empty($teamId)){
                View::SimpleAssign('hasTeam',"0");
            }else{
                $scheme_id = $schemeObj->getSchemeId($teamId);
                if ($scheme_id) {
                    $scheme = $schemeObj->getSchemeInfo($scheme_id);
                    View::assign(array('scheme' => $scheme));
                }
            }

            View::display('index/personal_center/userSchemeEditView.html');
        }
    }

    public function isLogin(){
        session_start();
        if(!(isset($_SESSION['userId']))){
            jump('请登录后再操作！','index.php?controller=Index&method=index');
            return false;
        }else{
            return true;
        }
    }

}