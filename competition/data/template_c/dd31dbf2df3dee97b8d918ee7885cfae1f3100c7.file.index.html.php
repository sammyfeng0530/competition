<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:14:44
         compiled from "assets\html\index\main\index.html" */ ?>
<?php /*%%SmartyHeaderCode:134965ce55954232ba9-28545898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd31dbf2df3dee97b8d918ee7885cfae1f3100c7' => 
    array (
      0 => 'assets\\html\\index\\main\\index.html',
      1 => 1558365077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134965ce55954232ba9-28545898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'schemes' => 0,
    'scheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce55954a48621_43029694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce55954a48621_43029694')) {function content_5ce55954a48621_43029694($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>企业管理虚拟实景实验设计大赛</title>
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
        <!--Contest Intro-->
        <section class="contest-intro row">
            <div class="col-sm-4">
                <div class="contest-intro-text">
                    <p>企业管理虚拟实景实验设计大赛是由江苏科技大学发起并主办的一项以促进在校经管类专业的大学生学习与实践能力提升的赛事活动。</p>
                    <a href="index.php?controller=Index&method=indexContestProfileView" class="more">more</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="title ">
                    <img src="assets/images/profile-circle.png"/>
                    <h1>大赛简介</h1>
                </div>

            </div>
            <div class="contest-sponsor col-sm-4 clearfix">
                <ul>
                    <li>主办单位：</li>
                    <li>江苏科技大学</li>
                    <li>承办单位：</li>
                    <li>经济管理学院</li>
                    <li>技术支持：</li>
                    <li class="clearfix">镇江市金舟软件有限责任公司</li>
                </ul>
            </div>
        </section>
        <!--Contest Intro End-->

        <!--Contest Arrangement And News-->
        <section class="arrangement-and-news">
            <div class="row">
                <div class="contest-arrangement col-sm-6">
                    <h1 class="title">赛程安排</h1>
                    <div class="contest-timeline">
                        <div class="timeline-item-left">
                            <div class="timeline-item">
                                <a><p>9月1日至10月31日</p></a>
                            </div>
                            <div class="timeline-header">
                                <div>
                                    <p>决 赛</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <a><p>11月25日</p></a>
                            </div>
                            <div class="timeline-item">
                                <a><p>更多</p></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="line">
                            <div>
                                <div class="up"></div>
                                <div class="down"></div>
                            </div>
                            <div></div>
                            <div>
                                <div class="down"></div>
                                <div class="up"></div>
                            </div>
                        </div>
                        <div class="timeline-item-right">
                            <div class="timeline-header">
                                <div>
                                    <p>初 赛</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <a><p>11月24日</p></a>
                            </div>
                            <div class="timeline-item">
                                <a><p>11月26日</p></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="contest-news col-sm-6">
                    <h1 class="title">赛事动态</h1>
                    <div class="contest-news-content">
                        <div id="news-gallery">

                            <a href="#" class="show">
                                <img src="assets/images/newspicone.png" alt="采购计划管理实验" title="" alt=""
                                     rel="采购计划管理实验"/>
                            </a>

                            <a href="#">
                                <img src="assets/images/newspictwo.png" alt="采购计划和人员分工" title="" alt=""
                                     rel="采购计划和人员分工"/>
                            </a>

                            <a href="#">
                                <img src="assets/images/newspicthree.png" alt="采购计划审核" title="" alt=""
                                     rel="采购计划审核"/>
                            </a>

                            <div class="caption">
                                <div class="news-gallery-text"></div>
                            </div>
                        </div>
                        <div class="contest-news-text">
                            <ul>
                                <li><a href="">江科大与金舟软件公司举行第一届“金舟杯”<span>09.02.</span></a></li>
                                <li><a href="">参赛的同学多达200人，第一届金舟杯开门红<span>09.02.</span></a></li>
                                <li><a href="">比赛过程中各位同学操作灵活，竞争激烈<span>09.03.</span></a></li>
                                <li><a href="">比赛初赛阶段大雷同学抢占先机，拔得头筹<span>09.03.</span></a></li>
                                <li><a href="">比赛决赛迫在眉睫，各位选手积极准备<span>11.20.</span></a></li>
                                <li><a href="">以下同学在初赛中股表现优异，获得决赛入门券<span>11.22.</span></a></li>
                                <li><a href="">视觉科大：“金舟杯”决赛同学名单<span>11.23.</span></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </section>
        <!--Contest Arrangement And News End-->

        <!--Scheme Show-->
        <section class="scheme-show">
            <header>
                <div class="section-title">
                    <h1>方案展示</h1>
                </div>
                <div class="more">
                    <a href="index.php?controller=Index&method=indexContestSchemeView">更多方案</a>
                </div>
                <div class="clearfix"></div>
            </header>
            <article class="scheme-show-content">
                <?php  $_smarty_tpl->tpl_vars['scheme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scheme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schemes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scheme']->key => $_smarty_tpl->tpl_vars['scheme']->value) {
$_smarty_tpl->tpl_vars['scheme']->_loop = true;
?>
                <div class="scheme-item">
                    <h2>
                        <a href="index.php?controller=Index&method=getSchemeDetail&id=<?php echo $_smarty_tpl->tpl_vars['scheme']->value['scheme_id'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['scheme']->value['scheme_name'];?>

                        </a>
                    </h2>
                    <p><?php echo $_smarty_tpl->tpl_vars['scheme']->value['scheme_content'];?>
</p>
                </div>
                <?php } ?>
            </article>
        </section>
        <!--Scheme Show End-->

        <!--Sign up profile-->
        <section class="sign-up-online">
            <header>
                <div class="section-title">
                    <h1>在线报名</h1>
                </div>
                <div class="more">
                    <?php if (isset($_SESSION['userId'])) {?>
                    <a href="index.php?controller=User&method=getSignup">报名详情</a>
                    <?php } else { ?>
                    <a href="index.php?controller=Index&method=indexContestSignupView">报名详情</a>
                    <?php }?>
                </div>
                <div class="clearfix"></div>
            </header>
            <div class="row">
                <div class="sign-up-QRcode col-sm-5">
                    <h2>马上关注</h2>
                    <div><img src="assets/images/QRcode.png" alt=""></div>
                </div>
                <div class="prize-profile col-sm-7">
                    <p>对获特等奖、一等奖与二等奖的指导教师授予优秀指导奖。<br>
                        对获特等奖与一等奖的队伍所在学校授予最佳组织奖。<br>
                        主办单位对获奖单位和个人颁发奖牌、获奖证书及奖品。</p>
                    <p>微信号：justxcb</p>
                    <p>邮箱：123@123.com</p>
                </div>
            </div>
        </section>
        <!--Sign up profile End-->
    </div>
</article>

<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/footer_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/all_script.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</html>

<?php }} ?>
