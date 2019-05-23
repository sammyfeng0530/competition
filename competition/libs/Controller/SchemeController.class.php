<?php
/**
 * Created by PhpStorm.
 * User: 皆凡人
 * Date: 2019-05-01
 * Time: 15:51
 */
class SchemeController{
    public function addScheme(){
        session_start();
        if(!empty($_POST)){
            $userObj = M('User');
            $schemaObj = M('Scheme');
            $teamId = $userObj -> getUserTeamId(daddslashes($_SESSION['userId']));
            $result = $schemaObj -> addScheme($_POST,$teamId);
            if ($result == 0){
                jump('创建失败！','index.php?controller=User&method=getMyTeamInfo');
            }else if($result == 1){
                jump('创建成功！','index.php?controller=User&method=getMyTeamInfo');
            }else if($result == 2){
                jump('修改成功！','index.php?controller=User&method=getMyTeamInfo');
            }else{
                jump('已评分无法修改！','index.php?controller=User&method=getMyTeamInfo');
            }
        }
    }
}