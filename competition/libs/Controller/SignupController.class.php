<?php
/**
 * Created by PhpStorm.
 * User: 皆凡人
 * Date: 2019-03-11
 * Time: 14:17
 */

class SignupController{
    public function signup(){
        session_start();
        $teamObj = M('User');
        $teamId = $teamObj -> getUserTeamId($_SESSION['userId']);
        if(!empty($teamId)){
            $signupObj = M('Signup');
            $result = $signupObj -> teamSignup($teamId);
            if ($result == 0){
                jump('报名失败！','index.php?controller=User&method=getSignup');
            }else{
                jump('报名成功！','index.php?controller=User&method=getSignup');
            }
        }else{
            jump('尚未加入队伍，无法报名。','index.php?controller=User&method=getMyTeamInfo') ;
        }
    }
}