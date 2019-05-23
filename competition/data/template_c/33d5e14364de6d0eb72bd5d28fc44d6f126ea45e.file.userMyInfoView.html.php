<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:15:30
         compiled from "assets\html\index\personal_center\userMyInfoView.html" */ ?>
<?php /*%%SmartyHeaderCode:222035ce55982049f64-46120828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33d5e14364de6d0eb72bd5d28fc44d6f126ea45e' => 
    array (
      0 => 'assets\\html\\index\\personal_center\\userMyInfoView.html',
      1 => 1558097630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222035ce55982049f64-46120828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce559821c4e67_46799285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce559821c4e67_46799285')) {function content_5ce559821c4e67_46799285($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title> </title>
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0, minimum-scale=0.5, maximum-scale=1.5, user-scalable=yes"/>
    <?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/all_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/popupForm_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/top_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<article class="container hp-content">
    <div class="hp-container">
        <div class="personal-center">
            <?php echo $_smarty_tpl->getSubTemplate ('index/part_views/personal_center/userLeftMenuView_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <section class="right-content col-xs-9">
                <div class="right-container">
                    <form class="myInfo form-horizontal" action="index.php?controller=User&method=editUser"
                          method="post">
                        <div class="form-group">
                            <div class="col-sm-4 control-label">用户ID</div>
                            <div class="col-sm-8"><span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value['user_id'])===null||$tmp==='' ? '' : $tmp);?>
</span></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 control-label">用户名</div>
                            <div class="col-sm-8"><input type="text" disabled="disabled"
                                                         class="form-control" name="user_name"
                                                         value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value['user_name'])===null||$tmp==='' ? '' : $tmp);?>
"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 control-label">性别</div>
                            <div class="col-sm-8">
                                <div class="col-xs-6">
                                    <input id="female-radio" type="radio" name="user_sex" class="operate-radio"
                                           value="0" disabled="disabled" <?php if ($_smarty_tpl->tpl_vars['user']->value['user_sex']==0) {?> checked <?php }?>><label
                                        for="female-radio">女</label>
                                </div>
                                <div class="col-xs-6">
                                    <input id="male-radio" type="radio" name="user_sex" class="operate-radio" value="1"
                                           disabled="disabled" <?php if ($_smarty_tpl->tpl_vars['user']->value['user_sex']==1) {?> checked <?php }?> ><label
                                        for="male-radio">男</label>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 control-label">学校</div>
                            <div class="col-sm-8"><input type="text" disabled="disabled"
                                                         class="form-control" name="user_college"
                                                         value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value['user_college'])===null||$tmp==='' ? '' : $tmp);?>
"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 control-label">学院</div>
                            <div class="col-sm-8"><input type="text" disabled="disabled"
                                                         class="form-control" name="user_school"
                                                         value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value['user_school'])===null||$tmp==='' ? '' : $tmp);?>
"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 control-label">专业</div>
                            <div class="col-sm-8"><input type="text" disabled="disabled"
                                                         class="form-control" name="user_major"
                                                         value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value['user_major'])===null||$tmp==='' ? '' : $tmp);?>
"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 control-label">注册日期</div>
                            <div class="col-sm-8"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value['user_register_date'])===null||$tmp==='' ? '' : $tmp);?>
</div>
                        </div>
                        <div class="form-group update">
                            <div class="col-sm-12">
                                <a class="">修&nbsp改</a>
                            </div>
                        </div>
                        <div class="form-group confirm">
                            <div class="col-sm-12">
                                <a class="">确&nbsp认</a>
                            </div>
                        </div>
                        <div class="form-group return">
                            <div class="col-sm-12">
                                <a class="index.php?controller=User&method=index">返&nbsp回</a>
                            </div>
                        </div>

                    </form>
                </div>
            </section>
            <div class="clearfix"></div>
        </div>
    </div>
</article>

<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/footer_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>

<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/all_script.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</html>
<?php }} ?>
