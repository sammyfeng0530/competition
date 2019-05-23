<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:15:30
         compiled from "assets\html\index\part_views\personal_center\userLeftMenuView_part.html" */ ?>
<?php /*%%SmartyHeaderCode:100335ce5598238c443-20985798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '989b7904234e0f80f18b8f76bb64eb1fdca1f003' => 
    array (
      0 => 'assets\\html\\index\\part_views\\personal_center\\userLeftMenuView_part.html',
      1 => 1558506554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100335ce5598238c443-20985798',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce55982394218_18274294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce55982394218_18274294')) {function content_5ce55982394218_18274294($_smarty_tpl) {?><aside class="left-menu col-xs-3">
    <h1>个人中心</h1>
    <nav>

        <li><a href="index.php?controller=User&method=index" class="current"><h2>我的信息</h2></a></li>
        <li><a href="index.php?controller=User&method=getMyTeamInfo"><h2>我的队伍</h2></a></li>
        <li><a href="index.php?controller=User&method=getMyScheme"><h2>团队方案</h2></a></li>
        <li><a href="index.php?controller=User&method=getSignup"><h2>在线报名</h2></a></li>

    </nav>
</aside><?php }} ?>
