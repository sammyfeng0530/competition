<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:15:44
         compiled from "assets\html\index\main\indexContestProfileView.html" */ ?>
<?php /*%%SmartyHeaderCode:229165ce559908ab032-01128581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06524b9959a0fd2114cd52ec504baeed24e31eca' => 
    array (
      0 => 'assets\\html\\index\\main\\indexContestProfileView.html',
      1 => 1558097630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229165ce559908ab032-01128581',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce5599099d0d4_37787532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce5599099d0d4_37787532')) {function content_5ce5599099d0d4_37787532($_smarty_tpl) {?><!DOCTYPE html>
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
    <article class="contest-profile-detail">
        <h1>大赛简介</h1>
        <section class="contest-profile-pw">
            <div class="contest-profile-pic">
                <div class="pic-border">
                    <div class="lt"></div>
                    <div class="rt"></div>
                    <div class="rb"></div>
                    <div class="lb"></div>
                </div>
                <img src="assets/images/newspicone.png" alt="">
            </div>
            <div class="contest-profile-word">
                <p>
                    企业管理虚拟实景实验设计大赛是由江苏科技大学发起并主办的一项以促进在校经管类专业的大学生学习与实践能力提升的赛事活动。大赛面向江科大经济管理类及其相关专业的在校大学生，通过对虚拟实景的企业管理进行运营和研究，在探索和解决一系列企业管理的实际问题的比赛过程中，提高大学生的实际动手能力、组织管理能力、策划设计能力；
                    并在人才培养模式、教学方法和内容方面做出了有效的尝试，促进了经管类专业教学的改革；同时也为广大老师和学生搭建起一个交流学习的互联网平台和综合学习的社区。通过本项赛事为促进经管教学和人才培养做出一些应有的贡献。
                </p>

            </div>
        </section>
        <?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/signup_button_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </article>
</div>
</article>

<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/footer_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/all_script.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</html><?php }} ?>
