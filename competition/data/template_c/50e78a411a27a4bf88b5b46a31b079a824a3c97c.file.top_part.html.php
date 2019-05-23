<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:14:44
         compiled from "assets\html\index\part_views\common\top_part.html" */ ?>
<?php /*%%SmartyHeaderCode:35755ce55954d102d9-88159391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50e78a411a27a4bf88b5b46a31b079a824a3c97c' => 
    array (
      0 => 'assets\\html\\index\\part_views\\common\\top_part.html',
      1 => 1558506569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35755ce55954d102d9-88159391',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce55954d68204_90585299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce55954d68204_90585299')) {function content_5ce55954d68204_90585299($_smarty_tpl) {?><header class="top container">
    <div>
        <div class="school-logo">
            <span><img src="assets/images/just-logo.png" alt="logo"></span>
            <span>江苏科技大学</span>
        </div>
        <div class="login-and-register">
            <?php if (isset($_SESSION['userId'])) {?>
            <div class="logout-btn" title="logout"><a href="index.php?controller=Index&method=logout">退出登录</a></div>
            <?php } else { ?>
            <div class="login-btn" title="login">登录</div>
            <div class="signup-btn" title="register">注册</div>
            <?php }?>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="banner-words">
        <h1>企业管理虚拟实景实验设计大赛</h1>
        <div></div>
    </div>
    <!--Menu-->
    <nav class="menu navbar">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse"
                    data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"></a>
        </div>

        <div class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="index.php?controller=Index&method=index" class="active"><span>网站首页</span></a></li>
                <li><a href="index.php?controller=Index&method=indexContestProfileView"><span>大赛简介</span></a></li>
                <li><a href="index.php?controller=Index&method=indexContestArrangementView"><span>赛程安排</span></a></li>
                <li><a href="index.php?controller=Index&method=indexContestNewsView"><span>赛事动态</span></a></li>
                <li><a href="index.php?controller=Index&method=indexContestSchemeView"><span>方案展示</span></a></li>
                <li class="btn-group dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="index.php?controller=Index&method=getPlatformIntro">
                        <span>课程中心</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left">
                        <li><a href="index.php?controller=Index&method=getPlatformIntro"><span>平台介绍</span></a></li>
                        <li><a href="index.php?controller=Index&method=getOperationManual"><span>操作手册</span></a></li>
                        <li><a href="index.php?controller=Index&method=getVideoIntro"><span>视频介绍</span></a></li>
                    </ul>
                </li>
                <?php if (isset($_SESSION['userId'])) {?>
                <li class="btn-group dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="index.php?controller=User&method=index">
                        <span>个人中心</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left">
                        <li><a href="index.php?controller=User&method=index"><span>我的信息</span></a></li>
                        <li><a href="index.php?controller=User&method=getMyTeamInfo"><span>我的队伍</span></a></li>
                        <li><a href="index.php?controller=User&method=getMyScheme"><span>团队方案</span></a></li>
                        <li><a href="index.php?controller=User&method=getSignup"><span>参赛报名</span></a></li>
                    </ul>
                </li>
                <?php } else { ?>
                <li><a href="index.php?controller=Index&method=indexContestSignupView"><span>报名详情</span></a></li>
                <?php }?>
            </ul>
        </div>
    </nav>
    <!--Menu End-->
</header><?php }} ?>
