<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:15:47
         compiled from "assets\html\index\main\indexContestArrangementView.html" */ ?>
<?php /*%%SmartyHeaderCode:137305ce559938e66a7-69087798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '098d6d6b64a88c7504b3718d788a4dbdacd5fe87' => 
    array (
      0 => 'assets\\html\\index\\main\\indexContestArrangementView.html',
      1 => 1558097630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137305ce559938e66a7-69087798',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce55993980357_87707240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce55993980357_87707240')) {function content_5ce55993980357_87707240($_smarty_tpl) {?><!DOCTYPE html>
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
        <article class="contest-arrangement-content">
            <h1>赛程安排</h1>
            <section>
                <table class="table-responsive">
                    <tbody>
                    <tr>
                        <th class="col-sm-2">赛程</th>
                        <th class="col-sm-4">日期</th>
                        <th class="col-sm-6">说明</th>
                    </tr>
                    <tr>
                        <td>初赛</td>
                        <td>9月1日-10月31日</td>
                        <td>
                            <ol>具体时间根据初赛事学校大赛通知为准；</ol>
                            <ol>出赛赛制根据学院不同会有些许的调整；</ol>
                            <ol>初赛赛程时间在2-3周。</ol>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="3">决赛</td>
                        <td>11月24日</td>
                        <td>
                            <ol>集中签到</ol>
                            <ol>参加虚拟实景平台体验活动</ol>
                        </td>
                    </tr>
                    <tr>
                        <td>11月25日</td>
                        <td>
                            <ol>上午8:00，大赛开幕式，抽签；</ol>
                            <ol>上午9：00-12：00实验配置；</ol>
                            <ol>下午14：00-18：00按抽签顺序答辩；</ol>
                        </td>
                    </tr>
                    <tr>

                        <td>11月26日</td>
                        <td>
                            <ol>上午8：00-12：00现场答辩；</ol>
                            <ol>下午14：00-16：00闭幕式颁奖典礼。</ol>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/signup_button_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </section>

        </article>
    </div>
</article>
<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/footer_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>

<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/all_script.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</html><?php }} ?>
