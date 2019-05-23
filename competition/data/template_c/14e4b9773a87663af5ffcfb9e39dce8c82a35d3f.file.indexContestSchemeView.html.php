<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:15:49
         compiled from "assets\html\index\main\indexContestSchemeView.html" */ ?>
<?php /*%%SmartyHeaderCode:251395ce55995e2ef67-69160073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14e4b9773a87663af5ffcfb9e39dce8c82a35d3f' => 
    array (
      0 => 'assets\\html\\index\\main\\indexContestSchemeView.html',
      1 => 1558097630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251395ce55995e2ef67-69160073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isDetail' => 0,
    'scheme' => 0,
    'schemes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce55995ebda86_82433716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce55995ebda86_82433716')) {function content_5ce55995ebda86_82433716($_smarty_tpl) {?><!DOCTYPE html>
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
        <article class="contest-scheme-content">
            <h1>方案展示</h1>
            <section>
                <?php if (isset($_smarty_tpl->tpl_vars['isDetail']->value)) {?>
                <section class="scheme-section">
                    <header class="scheme-name">
                        <div><h2><?php echo $_smarty_tpl->tpl_vars['scheme']->value['scheme_name'];?>
</h2></div>
                    </header>
                    <article>
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['scheme']->value['scheme_content'];?>

                        </p>
                    </article>
                </section>
                <?php } else { ?>
                <?php  $_smarty_tpl->tpl_vars['scheme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scheme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schemes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scheme']->key => $_smarty_tpl->tpl_vars['scheme']->value) {
$_smarty_tpl->tpl_vars['scheme']->_loop = true;
?>
                <section class="scheme-section">
                    <header class="scheme-name">
                        <div><h2><a href="index.php?controller=Index&method=getSchemeDetail&id=<?php echo $_smarty_tpl->tpl_vars['scheme']->value['scheme_id'];?>
">【<?php echo $_smarty_tpl->tpl_vars['scheme']->value['scheme_score'];?>
】<?php echo $_smarty_tpl->tpl_vars['scheme']->value['scheme_name'];?>
</a>
                        </h2></div>
                    </header>
                    <article>
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['scheme']->value['scheme_content'];?>

                        </p>
                    </article>
                </section>
                <?php } ?>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/signup_button_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </section>

        </article>
    </div>
</article>

<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/footer_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/all_script.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</html>

<?php }} ?>
