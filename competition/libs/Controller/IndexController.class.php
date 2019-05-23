<?php
/**
 * Created by PhpStorm.
 * User: 皆凡人
 * Date: 2019-03-05
 * Time: 16:45
 */

class IndexController{

    public function index(){
        session_start();
        $schemeObj = M('Scheme');
        $schemes = $schemeObj->getTopFiveScheme(500);
        View::assign(array('schemes' => $schemes));
        View::display('index/main/index.html');
    }

    public function login(){
        session_start();
        if($_POST){
            $this->checklogin();
        }else{
            View::display('index/main/index.html');
        }
    }

    private function checklogin(){
        if(empty($_POST['user_id'])||empty($_POST['user_pwd'])){
            jump('用户名或密码不能为空！','index.php?controller=Index&method=index');
        }
        $userId = daddslashes($_POST['user_id']);
        $password = daddslashes($_POST['user_pwd']);
        $authObj = M('Auth');
        $auth = $authObj->checkauth($userId, $password);
        if($auth){
            $_SESSION['userId'] = $userId;
            jump('登录成功！','index.php?controller=User&method=index');
        }else{
            jump('登录失败！','index.php?controller=Index&method=index');
        }
    }

    public function logout(){
        session_start();
        unset($_SESSION['userId']);
    }

    public function indexContestProfileView(){
        session_start();
        View::display('index/main/indexContestProfileView.html');
    }

    public function indexContestArrangementView(){
        session_start();
        View::display('index/main/indexContestArrangementView.html');
    }

    public function indexContestNewsView(){
        session_start();
        View::display('index/main/indexContestNewsView.html');
    }

    public function indexContestSchemeView(){
        session_start();
        $schemeObj = M('Scheme');
        $schemes = $schemeObj->getTopFiveScheme(1000);
        View::assign(array('schemes' => $schemes));
//        View::simpleAssign('schemes',$schemes);
        View::display('index/main/indexContestSchemeView.html');
    }

    public function getSchemeDetail(){
        session_start();
        $schemeObj = M('Scheme');
        $scheme = $schemeObj -> getSchemeInfo($_GET['id']);
//        reload($scheme);
        View::assign(array('scheme'=>$scheme));
        View::SimpleAssign('isDetail','1');
        View::display('index/main/indexContestSchemeView.html');
//        View::display();
    }

    public function indexContestSignupView(){
        session_start();
        View::display('index/main/indexContestSignupView.html');
    }

    public function getOperationManual(){
        session_start();
        View::display('index/course_center/indexOperationManualView.html');
    }

    public function getPlatformIntro(){
        session_start();
        View::display('index/course_center/indexPlatformIntroView.html');
    }

    public function getVideoIntro(){
        session_start();
        View::display('index/course_center/indexVideoIntroView.html');
    }

}