<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:15:34
         compiled from "assets\html\index\personal_center\userTeamInfoView.html" */ ?>
<?php /*%%SmartyHeaderCode:199905ce5598618ec90-89632740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f7224eb1b7ce8245f31f76c00682262c2866d39' => 
    array (
      0 => 'assets\\html\\index\\personal_center\\userTeamInfoView.html',
      1 => 1558449791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199905ce5598618ec90-89632740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'team' => 0,
    'signup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce5598625a164_20651635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce5598625a164_20651635')) {function content_5ce5598625a164_20651635($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title> </title>
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0, minimum-scale=0.5, maximum-scale=1.5, user-scalable=yes"/>
    <?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/all_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body>
<?php if (isset($_SESSION['userId'])) {?>
<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/popupForm_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/loginForm_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/top_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<article class="container hp-content">
    <div class="hp-container">
        <div class="personal-center">
            <?php echo $_smarty_tpl->getSubTemplate ('index/part_views/personal_center/userLeftMenuView_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <section class="right-content col-xs-9">
                <div class="right-container">
                    <?php if (isset($_smarty_tpl->tpl_vars['team']->value)) {?>
                    <form class="myTeamInfo form-horizontal" action="index.php?controller=Team&method=createTeam" method="post">
                        <div class="form-group">
                            <div class="col-xs-4 control-label">团队ID</div>
                            <div class="col-xs-8"><span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['team']->value['team_id'])===null||$tmp==='' ? '' : $tmp);?>
</span></div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 control-label">团队名称</div>
                            <div class="col-xs-8"><input type="text" disabled="disabled" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['team']->value['team_name'])===null||$tmp==='' ? '' : $tmp);?>
" name="team_name"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 control-label">邀请码</div>
                            <div class="col-xs-8"><input type="text" disabled="disabled" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['team']->value['team_invitation_code'])===null||$tmp==='' ? '' : $tmp);?>
" name="team_invitation_code"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 control-label">团队口号</div>
                            <div class="col-xs-8"><input type="text" disabled="disabled" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['team']->value['team_slogan'])===null||$tmp==='' ? '' : $tmp);?>
" name="team_slogan"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 control-label">团队简介</div>
                            <div class="col-xs-8"><input type="text" disabled="disabled" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['team']->value['team_profile'])===null||$tmp==='' ? '' : $tmp);?>
" name="team_profile"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 control-label">报名情况</div>
                            <div class="col-xs-8">
                                <?php if ($_smarty_tpl->tpl_vars['signup']->value!=null) {?>
                                <?php if ($_smarty_tpl->tpl_vars['signup']->value['signup_situation']==0) {?>
                                <input type="radio" name="signup_situation" class="operate-radio" value="0"><label>审核中</label>
                                <?php } else { ?>
                                <input type="radio" name="signup_situation" class="operate-radio" value="1"><label>成功报名</label>
                                <?php }?>
                                <?php } else { ?>
                                <input type="radio" name="signup_situation" class="operate-radio" value=""><label>未报名</label>
                                <?php }?>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['signup']->value==null) {?>
                        <div class="form-group update">
                            <div class="col-xs-12">
                                <a class="">修&nbsp改</a>
                            </div>
                        </div>
                        <div class="form-group confirm">
                            <div class="col-xs-12">
                                <a class="">确&nbsp认</a>
                            </div>
                        </div>
                        <div class="form-group return">
                            <div class="col-xs-12">
                                <a class="">返&nbsp回</a>
                            </div>
                        </div>
                        <?php }?>
                    </form>
                    <?php } else { ?>
                    <div class="join-or-create-team">
                        <div class="choice">
                            <input type="radio" name="team-operate" id="join-team-radio" class="operate-radio" checked="checked" value="0"><label
                                for="join-team-radio"></label><span>加入队伍</span>
                        </div>
                        <div class="choice">
                            <input type="radio" name="team-operate" id="create-team-radio" class="operate-radio" value="1"><label
                                for="create-team-radio"></label><span>创建队伍</span>
                        </div>
                        <form action="index.php?controller=Team&method=joinTeam" class="form-horizontal team-form" id="join-team-form" method="post">
                            <div class="form-group">
                                <div class="col-xs-4 control-label">团队ID<span class="req">*</span></div>
                                <div class="col-xs-8"><input type="number" class="form-control" name="team_id" placeholder="请输入团队ID" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4 control-label">邀请码<span class="req">*</span></div>
                                <div class="col-xs-8"><input type="text"
                                                             class="form-control" name="team_invitation_code" placeholder="请输入邀请码" required></div>
                            </div>
                            <div id="userJoinInTeamInfo">
                                <?php echo $_smarty_tpl->getSubTemplate ('index/part_views/personal_center/userJoinInTeamInfoView_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            </div>

                        </form>
                        <form action="index.php?controller=Team&method=createTeam" class="form-horizontal team-form" id="create-team-form" method="post">
                            <div class="form-group">
                                <div class="col-xs-4 control-label">团队名称<span class="req">*</span></div>
                                <div class="col-xs-8"><input type="text"
                                                             class="form-control" name="team_name" placeholder="自定义团队名称" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4 control-label">邀请码<span class="req">*</span></div>
                                <div class="col-xs-8"><input type="text"
                                                             class="form-control" name="team_invitation_code" placeholder="自定义邀请码" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4 control-label">团队口号</div>
                                <div class="col-xs-8"><input type="text" class="form-control" placeholder="自定义团队口号" name="team_slogan">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4 control-label">团队简介</div>
                                <div class="col-xs-8"><textarea type="text" class="form-control" placeholder="自定义团队简介" name="team_profile"></textarea>
                                </div>
                            </div>
                            <div class="form-group addTeam">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn" disabled="disabled">提&nbsp;交</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php }?>
                </div>
            </section>
            <div class="clearfix"></div>
        </div>
    </div>
</article>

<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/footer_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/all_script.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</html><?php }} ?>
