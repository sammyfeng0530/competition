<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:14:52
         compiled from "assets\html\index\main\indexContestSignupView.html" */ ?>
<?php /*%%SmartyHeaderCode:20885ce5595c83a205-25255361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '806a25c94858ff67aba62d37308b8322fec18e06' => 
    array (
      0 => 'assets\\html\\index\\main\\indexContestSignupView.html',
      1 => 1558152297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20885ce5595c83a205-25255361',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce5595c894060_94737265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce5595c894060_94737265')) {function content_5ce5595c894060_94737265($_smarty_tpl) {?><!DOCTYPE html>
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
        <article class="contest-signup-content">
            <h1>报名详情</h1>
            <section>
                <div class="signup-view">
                    <h3>第三届企业管理虚拟实景实验设计大赛总决赛评审规则</h3>
                    <h4>一、 项目评审要点</h4>

                    <table class="table-responsive">
                        <tbody>
                        <tr>
                            <th class="col-sm-3">评审要点</th>
                            <th class="col-sm-7">评审内容</th>
                            <th class="col-sm-2">分值</th>
                        </tr>
                        <tr>
                            <td>创新性</td>
                            <td>
                                突出原始创意的价值，不鼓励模仿。强调利用互联网技术、方法和思维在销售、研发、生产、物流、信息、人力、管理等方面寻求突破和创新。鼓励项目与高校科技成果转移转化相结合。
                            </td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>团队情况</td>
                            <td>
                                考察管理团队各成员的教育和工作背景、价值观念、擅长领域，成员的分工和业务互补情况；公司的组织构架、人员配置安排是否科学；创业顾问，主要投资人和持股情况；战略合作企业及其与本项目的关系，团队是否具有实现这种突破的具体方案和可能的资源基础。
                            </td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>商业性</td>
                            <td>
                                在商业模式方面，强调设计的完整性与可行性，完整地描述商业模式，评测其盈利能力推导过程的合理性。在机会识别与利用、竞争与合作、技术基础、产品或服务设计、资金及人员需求、现行法律法规限制等方面具有可行性。在调查研究方面，考察行业调查研究程度，项目市场、技术等调查工作是否形成一手资料，不鼓励文献调查，强调田野调查和实际操作检验。
                            </td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>带动就业前景</td>
                            <td>综合考察项目发展战略和规模扩张策略的合理性和可行性，预判项目可能带动社会就业的能力。</td>
                            <td>5</td>
                        </tr>
                        </tbody>
                    </table>
                    <h4>二、 评分标准</h4>
                    <p>评分标准：优秀：100-85分，良好：85-70分，一般：70-55分，差：55-0。</p>
                </div>
                <div class="sign-up-button login-btn"><a>登录报名</a></div>
                <div class="clearfix"></div>
            </section>

        </article>
    </div>
</article>

<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/footer_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/all_script.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>


</html>

<?php }} ?>
