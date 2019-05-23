<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:15:36
         compiled from "assets\html\index\personal_center\userSchemeEditView.html" */ ?>
<?php /*%%SmartyHeaderCode:91115ce559887746b8-49068993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2ed3e8efd445007aa328caf22ee19b5ba87d2cf' => 
    array (
      0 => 'assets\\html\\index\\personal_center\\userSchemeEditView.html',
      1 => 1558097630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91115ce559887746b8-49068993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasTeam' => 0,
    'scheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce559888b0f34_53979335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce559888b0f34_53979335')) {function content_5ce559888b0f34_53979335($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title></title>
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
                    <div class="my-scheme-show">
                        <header><h1>团队方案</h1></header>
                        <?php if (isset($_smarty_tpl->tpl_vars['hasTeam']->value)&&$_smarty_tpl->tpl_vars['hasTeam']->value=="0") {?>
                        <article class="prompt-box"><p>请先加入队伍</p></article>
                        <?php } else { ?>
                        <?php if (isset($_smarty_tpl->tpl_vars['scheme']->value['scheme_id'])&&$_smarty_tpl->tpl_vars['scheme']->value['scheme_id']!=null) {?>
                        <article class="scheme-content-show">
                            <h2 class="scheme-name"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['scheme']->value['scheme_name'])===null||$tmp==='' ? '' : $tmp);?>
</h2>
                            <span>目前得分：
                                <span class="scheme-score">
                                    <?php if (($_smarty_tpl->tpl_vars['scheme']->value['scheme_score']!=null)&&($_smarty_tpl->tpl_vars['scheme']->value['scheme_score']!=0)) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['scheme']->value['scheme_score'];?>

                                    <?php } else { ?>
                                    尚未评分
                                    <?php }?>
                                </span>
                            </span>
                            <div class="scheme-content"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['scheme']->value['scheme_content'])===null||$tmp==='' ? '' : $tmp);?>
</div>
                            <?php if (($_smarty_tpl->tpl_vars['scheme']->value['scheme_score']==null)||($_smarty_tpl->tpl_vars['scheme']->value['scheme_score']==0)) {?>
                            <div class="custom-button edit-scheme"><a href="">编辑方案</a></div>
                            <div class="clearfix"></div>
                            <?php }?>
                        </article>
                        <?php if (($_smarty_tpl->tpl_vars['scheme']->value['scheme_score']==null)||($_smarty_tpl->tpl_vars['scheme']->value['scheme_score']==0)) {?>
                        <article class="scheme-editor" style="display:none;">
                            <div class="scheme-title">
                                <input type="text" maxlength="100" placeholder="输入文章标题" name="scheme_name"
                                       value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['scheme']->value['scheme_name'])===null||$tmp==='' ? '' : $tmp);?>
" required>
                                <span class="max-length">0/100</span>
                            </div>
                            <div class="scheme-editor-content">
                                <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
                                    <div class="btn-group">
                                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                           title="Font"><i
                                                class="fa fa-font"></i><b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                           title="Font Size"><i
                                                class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                                            <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                                            <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-default" data-edit="bold" title="加粗 (Ctrl/Cmd+B)"><i
                                                class="fa fa-bold"></i></a>
                                        <a class="btn btn-default" data-edit="italic" title="斜体 (Ctrl/Cmd+I)"><i
                                                class="fa fa-italic"></i></a>
                                        <a class="btn btn-default" data-edit="strikethrough" title="删除线"><i
                                                class="fa fa-strikethrough"></i></a>
                                        <a class="btn btn-default" data-edit="underline" title="下划线 (Ctrl/Cmd+U)"><i
                                                class="fa fa-underline"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-default" data-edit="insertunorderedlist" title="符号列表"><i
                                                class="fa fa-list-ul"></i></a>
                                        <a class="btn btn-default" data-edit="insertorderedlist" title="数字列表"><i
                                                class="fa fa-list-ol"></i></a>
                                        <a class="btn btn-default" data-edit="outdent" title="减少缩进 (Shift+Tab)"><i
                                                class="fa fa-outdent"></i></a>
                                        <a class="btn btn-default" data-edit="indent" title="增加缩进 (Tab)"><i
                                                class="fa fa-indent"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-default" data-edit="justifyleft"
                                           title="左对齐 (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                        <a class="btn btn-default" data-edit="justifycenter"
                                           title="居中对齐 (Ctrl/Cmd+E)"><i
                                                class="fa fa-align-center"></i></a>
                                        <a class="btn btn-default" data-edit="justifyright"
                                           title="右对齐 (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                        <a class="btn btn-default" data-edit="justifyfull" title="两端对齐 (Ctrl/Cmd+J)"><i
                                                class="fa fa-align-justify"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" title="超链接"><i
                                                class="fa fa-link"></i></a>
                                        <div class="dropdown-menu input-append">
                                            <input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
                                            <button class="btn" type="button">添加</button>
                                        </div>
                                        <a class="btn btn-default" data-edit="unlink" title="移除链接"><i
                                                class="fa fa-cut"></i></a>

                                    </div>

                                    <div class="btn-group">
                                        <a class="btn btn-default" title="插入图片"
                                           id="pictureBtn"><i class="fa fa-images"></i></a>
                                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn"
                                               data-edit="insertImage"/>
                                    </div>

                                    <div class="btn-group">
                                        <a class="btn btn-default" data-edit="undo" title="撤销 (Ctrl/Cmd+Z)"><i
                                                class="fa fa-undo"></i></a>
                                        <a class="btn btn-default" data-edit="redo" title="重做 (Ctrl/Cmd+Y)"><i
                                                class="fa fa-redo"></i></a>
                                    </div>
                                    <input type="text" data-edit="inserttext" id="voiceBtn" x-webkit-speech="">
                                </div>
                                <div id="editor" contenteditable="true">
                                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['scheme']->value['scheme_content'])===null||$tmp==='' ? '' : $tmp);?>

                                </div>
                            </div>
                            <div class="custom-button upload-scheme">
                                <a type="submit" href="index.php?controller=Scheme&method=addScheme">提&nbsp;交</a>
                            </div>
                            <div class="clearfix"></div>
                        </article>
                        <?php }?>
                        <?php }?>
                        <?php if ((!isset($_smarty_tpl->tpl_vars['scheme']->value))) {?>
                        <article class="scheme-editor" style="display:block;">
                            <div class="scheme-title">
                                <input type="text" maxlength="100" placeholder="输入文章标题" name="scheme_name"
                                       value="" required>
                                <span class="max-length">0/100</span>
                            </div>
                            <div class="scheme-editor-content">
                                <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
                                    <div class="btn-group">
                                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                           title="Font"><i
                                                class="fa fa-font"></i><b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                           title="Font Size"><i
                                                class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                                            <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                                            <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-default" data-edit="bold" title="加粗 (Ctrl/Cmd+B)"><i
                                                class="fa fa-bold"></i></a>
                                        <a class="btn btn-default" data-edit="italic" title="斜体 (Ctrl/Cmd+I)"><i
                                                class="fa fa-italic"></i></a>
                                        <a class="btn btn-default" data-edit="strikethrough" title="删除线"><i
                                                class="fa fa-strikethrough"></i></a>
                                        <a class="btn btn-default" data-edit="underline" title="下划线 (Ctrl/Cmd+U)"><i
                                                class="fa fa-underline"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-default" data-edit="insertunorderedlist" title="符号列表"><i
                                                class="fa fa-list-ul"></i></a>
                                        <a class="btn btn-default" data-edit="insertorderedlist" title="数字列表"><i
                                                class="fa fa-list-ol"></i></a>
                                        <a class="btn btn-default" data-edit="outdent" title="减少缩进 (Shift+Tab)"><i
                                                class="fa fa-outdent"></i></a>
                                        <a class="btn btn-default" data-edit="indent" title="增加缩进 (Tab)"><i
                                                class="fa fa-indent"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-default" data-edit="justifyleft"
                                           title="左对齐 (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                        <a class="btn btn-default" data-edit="justifycenter"
                                           title="居中对齐 (Ctrl/Cmd+E)"><i
                                                class="fa fa-align-center"></i></a>
                                        <a class="btn btn-default" data-edit="justifyright"
                                           title="右对齐 (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                        <a class="btn btn-default" data-edit="justifyfull" title="两端对齐 (Ctrl/Cmd+J)"><i
                                                class="fa fa-align-justify"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" title="超链接"><i
                                                class="fa fa-link"></i></a>
                                        <div class="dropdown-menu input-append">
                                            <input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
                                            <button class="btn" type="button">添加</button>
                                        </div>
                                        <a class="btn btn-default" data-edit="unlink" title="移除链接"><i
                                                class="fa fa-cut"></i></a>

                                    </div>

                                    <div class="btn-group">
                                        <a class="btn btn-default" title="插入图片"
                                           id="pictureBtn"><i class="fa fa-images"></i></a>
                                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn"
                                               data-edit="insertImage"/>
                                    </div>

                                    <div class="btn-group">
                                        <a class="btn btn-default" data-edit="undo" title="撤销 (Ctrl/Cmd+Z)"><i
                                                class="fa fa-undo"></i></a>
                                        <a class="btn btn-default" data-edit="redo" title="重做 (Ctrl/Cmd+Y)"><i
                                                class="fa fa-redo"></i></a>
                                    </div>
                                    <input type="text" data-edit="inserttext" id="voiceBtn" x-webkit-speech="">
                                </div>
                                <div id="editor" contenteditable="true">

                                </div>
                            </div>
                            <div class="custom-button upload-scheme">
                                <a type="submit" href="index.php?controller=Scheme&method=addScheme">提&nbsp;交</a>
                            </div>
                            <div class="clearfix"></div>
                        </article>
                        <?php }?>
                        <?php }?>
                    </div>
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
