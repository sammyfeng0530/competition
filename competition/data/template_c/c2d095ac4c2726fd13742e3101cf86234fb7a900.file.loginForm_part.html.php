<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:14:44
         compiled from "assets\html\index\part_views\common\loginForm_part.html" */ ?>
<?php /*%%SmartyHeaderCode:261025ce55954c47028-17054206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2d095ac4c2726fd13742e3101cf86234fb7a900' => 
    array (
      0 => 'assets\\html\\index\\part_views\\common\\loginForm_part.html',
      1 => 1558493594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261025ce55954c47028-17054206',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce55954c88610_39396367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce55954c88610_39396367')) {function content_5ce55954c88610_39396367($_smarty_tpl) {?><div class="mask"></div>
<div class="form-horizontal form login-form">
    <div class="close">×</div>
    <div class="tab-group">
        <div class="tab active"><a href="#login-part">登&nbsp;录</a></div>
        <div class="tab"><a href="#register-part">注&nbsp;册</a></div>
    </div>

    <div class="tab-content">

        <div id="login-part">
            <form action="index.php?controller=Index&method=login" method="post" id="login-form">
                <div class="form-group">
                    <label class="col-xs-3 control-label">学&nbsp;号<span class="req">*</span></label>
                    <div class="col-xs-9">
                        <input type="number" class="form-control" name="user_id" placeholder="请输入您的学号" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-3 control-label">密&nbsp;码<span class="req">*</span></label>
                    <div class="col-xs-9">
                        <input type="password" class="form-control" name="user_pwd" placeholder="请输入您的密码" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-3 control-label">验证码<span class="req">*</span></label>
                    <div class="col-xs-6">
                        <div class="slideunlock-wrapper">
                            <input type="hidden" value="" class="slideunlock-lockable">
                            <div class="slideunlock-slider form-control">
                                <span class="slideunlock-label"><i class="fas fa-angle-double-right"></i></span>
                                <span class="slideunlock-lable-tip">向右滑动解锁</span>
                            </div>
                        </div>
                        <input type="checkbox" class="form-control" name="code_input" placeholder="请输入验证码" required>
                    </div>
                    <div class="col-xs-2 col-xs-offset-1" id="resetBtn">
                        <input type="button" value="重置"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <div class="checkbox">
                            <input id="remember-pwd" type="checkbox" name="remember"/>
                            <label for="remember-pwd">记住密码</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-offset-6 col-xs-6 custom-button">
                        <button type="submit" class="btn">提&nbsp;交</button>
                    </div>
                </div>
            </form>
        </div>

        <div id="register-part">

            <form action="index.php?controller=User&method=signup" method="post" id="signup-form">

                <div class="form-group">
                    <label class="col-xs-3 control-label">学&nbsp;号<span class="req">*</span></label>
                    <div class="col-xs-9">
                        <input type="number" class="form-control" name="user_id" placeholder="请输入您的学号" required
                               autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-3 control-label">姓&nbsp;名<span class="req">*</span></label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" name="user_name" placeholder="请输入您的姓名" required
                               autocomplete="off">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-3 control-label">密&nbsp;码<span class="req">*</span></label>
                    <div class="col-xs-9">
                        <input type="password" class="form-control" name="user_pwd" id="pwd" placeholder="请输入您的密码"
                               autocomplete="off" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-3 control-label">确&nbsp;认<span class="req">*</span></label>
                    <div class="col-xs-9">
                        <input type="password" class="form-control" name="pwd_comfirm" id="pwd_comfirm"
                               placeholder="请确认您的密码" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-6 col-xs-6 custom-button">
                        <button type="submit" class="btn">提&nbsp;交</button>
                    </div>
                </div>

            </form>

        </div>
    </div><!-- tab-content -->

</div> <!-- /form -->

<?php }} ?>
