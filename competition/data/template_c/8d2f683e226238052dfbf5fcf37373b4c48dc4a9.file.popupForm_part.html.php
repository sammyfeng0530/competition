<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:15:30
         compiled from "assets\html\index\part_views\common\popupForm_part.html" */ ?>
<?php /*%%SmartyHeaderCode:61045ce55982309389-75105799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d2f683e226238052dfbf5fcf37373b4c48dc4a9' => 
    array (
      0 => 'assets\\html\\index\\part_views\\common\\popupForm_part.html',
      1 => 1556508363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61045ce55982309389-75105799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prompt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce5598233ad30_56150006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce5598233ad30_56150006')) {function content_5ce5598233ad30_56150006($_smarty_tpl) {?><div class="mask"></div>
<div class="form-horizontal form popup-form">
    <div class="close">×</div>
    <div class="tab-group">
        <div class="tab active"><a href="">提示</a></div>
    </div>

    <div class="tab-content active">
        <div style="display: block;">
            <div class="prompt-form">
                <div class="form-group">
                    <div class="col-xs-12">
                        <p id="prompt"><?php if (isset($_smarty_tpl->tpl_vars['prompt']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['prompt']->value;?>
<?php }?></p>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-offset-6 col-xs-6 confirm-button custom-button">
                        <button type="button" class="btn">确&nbsp定</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- tab-content -->

</div> <!-- /form -->

<?php }} ?>
