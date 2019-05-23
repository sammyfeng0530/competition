<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:31:44
         compiled from "assets\html\index\course_center\indexPlatformIntroView.html" */ ?>
<?php /*%%SmartyHeaderCode:324865ce55d503dd698-16115802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1633908eef6e55150528c7ddd300b9d3ec3693a' => 
    array (
      0 => 'assets\\html\\index\\course_center\\indexPlatformIntroView.html',
      1 => 1558097630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324865ce55d503dd698-16115802',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce55d5054ae12_85417563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce55d5054ae12_85417563')) {function content_5ce55d5054ae12_85417563($_smarty_tpl) {?><!DOCTYPE html>
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
    <article class="course-center">
        <?php echo $_smarty_tpl->getSubTemplate ('index/part_views/course_center/indexLeftMenuView_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="col-xs-9 right-content">
            <div class="right-container">
                <section class="course-center-content">
                    <div class="platform-intro">
                        企业管理虚拟实景实验设计大赛平台由三大部分组成：<br>
                        <ol>一、开发套件</ol>
                        <ol>1. 数据开发套件：</ol>
                        <ol>（1）大数据开发：集成可视化开发环境，可实现数据开发、调度、部署、运维、及数仓设计、数据质量管理等功能，</ol>
                        <ol>（2）BI报表工具，海量数据的实时在线分析、丰富的可视化效果，助您轻松完成数据分析、业务探查等，所见即所得。</ol>
                        <ol>（3）机器学习工具，集数据处理、特征工程、建模、离线预测为一体的机器学习平台,优质算法汇集,可视化编辑。</ol>
                        <ol>2. 应用开发套件：</ol>
                        <ol>（1）面向通用数据应用场景：提供数据应用开发的基础级工具，加速基础数据服务开发。如个性化推荐工具、数据可视化工具、快速BI站点搭建工具搭数、规则引擎工具等。</ol>
                        <ol>（2）面向行业垂直应用场景：提供行业相关性很高，适合特定场景的数据工具，如面向政府县级区域经济的可视化套件。</ol>
                        <ol>二、解决方案</ol>
                        <ol>
                            数加针对不同的业务场景，基于平台提供的开发套件与行业服务商的能力，将多方产品串联，提供行业解决方案，如敏捷BI解决方案、交通预测解决方案、智能问答机器人等，一方面客户可以自行参考解决方案，以自助的方式完成解决方案的实施。另一方面，客户也可以咨询行业服务商或者阿里云大数据平台官方，根据客户场景，提供定制化的端到端的解决方案实施。
                        </ol>
                        <ol>三、数据市场</ol>
                        <ol>访问：https://market.aliyun.com/chn/data</ol>
                        <ol>除了阿里云大数据官方的数据应用，我们会联合合作伙伴、ISV等来丰富大数据应用，打造大数据生态，以普惠大数据为使命，给用户提供更多更好的数据应用、数据API。</ol>
                    </div>
                </section>
                <?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/signup_button_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </article>
</div>
</article>

<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/footer_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--<script sassetsd/js/jquery-1.9.1.js"></script>
<script sassetsssetsmatiologin-and-register.jsript>
<script>
/*
    $(document).load(function() {
        $num = $('.scheme-item').length;
        $even = $num / 2;
        $odd = ($num + 1) / 2;

        if ($num % 2 === 0) {
            $('.scheme-item:nth-child(' + $even + ')').addClass('active');
            $('.scheme-item:nth-child(' + $even + ')').prev().addClass('prev');
            $('.scheme-item:nth-child(' + $even + ')').next().addClass('next');
        } else {
            $('.scheme-item:nth-child(' + $odd + ')').addClass('active');
            $('.scheme-item:nth-child(' + $odd + ')').prev().addClass('prev');
            $('.scheme-item:nth-child(' + $odd + ')').next().addClass('next');
        }
        $('.scheme-item').click(function() {
            if ($(this).hasClass('active')){

            }else{
                $(this).removeClass('prev next');
                $(this).siblings().removeClass('prev active next');
                $(this).addClass('active');
                $(this).prev().addClass('prev');
                $(this).next().addClass('next');
            }
        });

    });
*/

</script>
<script sassets_end/js/bootstrap.min.js"></script>
&lt;!&ndash;<script src="js/jquery-3.3.1.min.js"></script>&ndash;&gt;
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/login_and_register.js"></script>
<script>
    $(document).ready(function () {
        $('.menu ul li a').on('click', function (e) {
            e.preventDefault();  // 阻止链接跳转
            let url = this.href;  // 保存点击的地址
            $('.menu ul li.active').removeClass('active');
            $(this).parent('li').addClass('active');
            $('.hp-container').remove();
            $('.hp-content').load(url+' .hp-container').fadeIn('slow'); // 加载新内容
            // $('#content').load(url+' #container ').fadeIn('slow'); // 加载新内容,url地址与该地址下的选择器之间要有空格,表示该url下的#container
        });
        /*        $('.left-menu div a').on('click', function (e) {
         e.preventDefault();  // 阻止链接跳转
         $('.left-menu div a.current').removeClass('current');
         $(this).addClass('current');
         $('.right-container').remove();
         let url = this.href;  // 保存点击的地址
         $('.right-content').load(url + ' .right-container ').fadeIn('slow'); // 加载新内容,url地址与该地址下的选择器之间要有空格,表示该url下的#container
         });*/
    });

    $(document).on("click",".left-menu nav a",function (e) {
        e.preventDefault();  // 阻止链接跳转
        $('.left-menu nav a.current').removeClass('current');
        $(this).addClass('current');
        $('.right-container').remove();
        let url = this.href;  // 保存点击的地址
        $('.right-content').load(url + ' .right-container ').fadeIn('slow'); // 加载新内容,url地址与该地址下的选择器之间要有空格,表示该url下的#container
    })
    /*    $(document).on("click",".menu ul li a",function (e) {
     e.preventDefault();  // 阻止链接跳转
     let url = this.href;  // 保存点击的地址
     $('.menu ul li.active').removeClass('active');
     $(this).parent('li').addClass('active');
     $('.hp-container').remove();
     $('.hp-content').load(url).fadeIn('slow'); // 加载新内容
     });*/
</script>
<script>
    /*    function prompt(prompt,url) {
     $('.prompt-form p').html(prompt);
     $('.mask').fadeToggle();
     $('.popup-form').fadeToggle();
     $('.confirm-button').click(function () {
     //            window.location.href=url;
     return 1;
     });
     }*/


    function prompt(prompt, yesFn) {
        $('.prompt-form p').html(prompt);
        $('.mask').fadeToggle();
        $('.popup-form').fadeToggle();
        $('.confirm-button').click(yesFn);
    }

    $(document).on("click", ".logout-btn a", function (e) {
        e.preventDefault();
        let url = this.href;
        prompt('是否确认退出？', function yes() {
            window.location.href = url;
        });
    });

    $(document).on("click", ".confirm", function (e) {
        e.preventDefault();
        prompt('是否确认提交？', function yes() {
            $(".confirm").parent().submit();
        });
    });

    $(document).on("click", ".join-in-submit", function (e) {
        e.preventDefault();
        prompt('是否确认加入队伍？', function yes() {
            $(".join-in-submit").parent().submit();
        });
    });
    $(document).on("click", ".addTeam", function (e) {
        e.preventDefault();
        prompt('是否确认加入队伍？', function yes() {
            $(".addTeam").parent().submit();
        });
    });
    $(document).on("click", ".sign-up-button a", function (e) {
        e.preventDefault();
        let url = this.href;
        if ($("input[type='checkbox']").is(':checked')) {
            prompt('是否确认报名？一旦报名成功，将无法撤销报名并更改队伍资料。', function yes() {
                window.location.href = url;
            });
        } else {
            prompt('请先仔细报名规则，并勾选选框。', function yes() {
                $('.mask').fadeToggle();
                $('.popup-form').fadeToggle();
            });
        }
    });
    promptFromFadeToggle('.close');
    promptFromFadeToggle('.mask');

    function promptFromFadeToggle(className) {
        $(className).click(function () {
                $('.mask').fadeToggle();
                $('.popup-form').fadeToggle();
            }
        );
    }

    // data input
    function editFadeToggle() {
        $(".form-horizontal .update").toggle();
        $(".form-horizontal .return").toggle();
        $(".form-horizontal .confirm").toggle();
    }
    $(document).on("click", ".update", function () {
        $(".form-horizontal input").removeAttr("disabled").css("background", "rgba(255,255,255,.95)");
        editFadeToggle();
    });

    $(document).on("click", ".return a", function () {
        let url = this.href;  // 保存点击的地址
        $('.right-container').remove();
        $('.right-content').load(url + ' .right-container ').fadeIn('slow');
    });

    $(document).on("click", ".join-or-create-team input[class='operate-radio']:radio", function () {
        let num = $(this).val();
        $(".team-form").hide();
        $(".team-form").eq(num).show();
    });

    $(document).ready(function () {
        $('.menu ul li a').removeClass('active');
        $('.menu ul li a').eq(6).addClass('active');

        /*        $(".join-or-create-team input[class='operate-radio']:radio").on("click", function () {
         let num = $(this).val();
         $(".team-form").hide();
         $(".team-form").eq(num).show();
         });*/

        $('.left-menu nav a').on('click', function (e) {
            e.preventDefault();  // 阻止链接跳转
            $('.left-menu nav a.current').removeClass('current');
            $(this).addClass('current');
            $('.right-container').remove();
            let url = this.href;  // 保存点击的地址
            $('.right-content').load(url + ' .right-container ').fadeIn('slow'); // 加载新内容,url地址与该地址下的选择器之间要有空格,表示该url下的#container
            /*            let url = 'index.php?controller=User&method=index'+ this.href;  // 保存点击的地址
             $.ajax({
             type: 'GET',
             url: url,
             dataType: 'html',
             success(response) {
             $('.right-content').load(url).fadeIn('slow');
             }, error(jqXHR, status, errorThrown) {
             console.log(jqXHR);
             }
             });*/
//
////            $('.right-content').load(url).fadeIn('slow'); // 加载新内容,url地址与该地址下的选择器之间要有空格,表示该url下的#container
//            // $('#content').load(url+' #container ').fadeIn('slow'); // 加载新内容,url地址与该地址下的选择器之间要有空格,表示该url下的#container
///*            const urlToExpand = url +
//                '?key=' + apiKey +
//                '&shortUrl=' + $inputField.val();
//            $.ajax({
//                url: urlToExpand,
//                type: 'GET',
//                dataType: 'json',
//                success(response) {
//                    $responseField.append('<p>Your expanded url is: </p><p>' + response.longUrl + '</p>');
//                }, error(jqXHR, status, errorThrown) {
//                    console.log(jqXHR);
//                }
//            });
//        });*/
        });
    });
</script>-->
</body>
<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/all_script.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</html><?php }} ?>
