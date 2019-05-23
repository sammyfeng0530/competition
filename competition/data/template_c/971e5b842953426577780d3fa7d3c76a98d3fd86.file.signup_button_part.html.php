<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:15:44
         compiled from "assets\html\index\part_views\common\signup_button_part.html" */ ?>
<?php /*%%SmartyHeaderCode:13895ce55990a66d20-98198664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '971e5b842953426577780d3fa7d3c76a98d3fd86' => 
    array (
      0 => 'assets\\html\\index\\part_views\\common\\signup_button_part.html',
      1 => 1557220883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13895ce55990a66d20-98198664',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce55990a7f5e7_91064651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce55990a7f5e7_91064651')) {function content_5ce55990a7f5e7_91064651($_smarty_tpl) {?><div class="sign-up-button">
    <a href="<?php if (isset($_SESSION['userId'])) {?>index.php?controller=User&method=getSignup<?php } else { ?>index.php?controller=Index&method=indexContestSignupView<?php }?>">在线报名</a>
</div>
<div class="clearfix"></div><?php }} ?>
