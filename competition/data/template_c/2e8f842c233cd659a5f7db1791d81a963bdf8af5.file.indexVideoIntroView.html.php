<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:31:45
         compiled from "assets\html\index\course_center\indexVideoIntroView.html" */ ?>
<?php /*%%SmartyHeaderCode:194955ce55d51ee0677-15181674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e8f842c233cd659a5f7db1791d81a963bdf8af5' => 
    array (
      0 => 'assets\\html\\index\\course_center\\indexVideoIntroView.html',
      1 => 1558097630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194955ce55d51ee0677-15181674',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce55d52079598_18897698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce55d52079598_18897698')) {function content_5ce55d52079598_18897698($_smarty_tpl) {?><!DOCTYPE html>
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
                    <div class="video-intro">
                        <video src="" controls="controls" type="video/mp4" poster="assets/images/newspicone.png"
                               preload="none"></video>
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
