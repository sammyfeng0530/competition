$(function () {

    /* 有关cookie的js */
    const setCookie = () => {
        let userId = $("input[name='user_id']").val();
        let userPwd = $("input[name='user_pwd']").val();
        let checked = $("input[name='remember']").is(':checked');
        console.log(checked);
        if (checked) {
            //设置cookie过期时间
            let date = new Date();
            date.setTime(date.getTime() + 60 * 1000);//60表示60秒钟
            Cookies.get("user_id", userId, {
                expires: date,
                path: '/'
            });//调用jquery.cookie.js中的方法设置cookie中的用户名    
            Cookies.get("user_pwd", userPwd, {
                expires: date,
                path: '/'
            });
        } else {
            Cookies.get("user_id", null);
            Cookies.get("user_pwd", null);
        }
    };

    //清除所有cookie函数
    const clearAllCookie = () => {
        let date = new Date();
        date.setTime(date.getTime() - 10000);
        let keys = document.cookie.match(/[^ =;]+(?=\=)/g);
        console.log("需要删除的cookie名字：" + keys);
        if (keys) {
            for (let i = keys.length; i--;)
                document.cookie = keys[i] + "=0; expire=" + date.toGMTString() + "; path=/";
        }
    };

    //获取cookie    
    const getCookie = () => {
        let userId = Cookies.get("user_id"); //获取cookie中的用户名    
        let userPwd = Cookies.get("user_pwd"); //获取cookie中的登陆密码  

        if (userId === null || userId == 0) {
            $("input[name='user_id']").val("");//如果cookie为空的话，会设置为0
        } else {
            $("input[name='user_id']").val(userId);
        }
        if (userPwd === null || userPwd == 0) {
            $("input[name='user_pwd']").val("");
        } else {
            $("input[name='user_pwd']").val(userPwd);
            $("input[name='remember']").prop("checked", true);
        }
    };

    getCookie();

    $('#login-form .custom-button .btn').on("click", function login() {

        //判断是否选中复选框，如果选中，添加cookie  
        const isRemember = $("input[name='remember']").is(':checked');

        if (isRemember) {
            setCookie();
        } else {
            clearAllCookie();
        }
    });


    /* 有关滑动验证的js */
    var slider = new SliderUnlock(".slideunlock-slider", {}, function(){
        $("input[name='code_input']").prop("checked",true);
    }, function(){
        $(".warn").text("index:" + slider.index + "， max:" + slider.max + ",lableIndex:" + slider.lableIndex + ",value:" + $(".slideunlock-lockable").val() + " date:" + new Date().getUTCDate());
    });

    slider.init();

    $("#resetBtn").on('click', function(){
        slider.reset();
        $("input[name='code_input']").prop("checked",false);
    });

    /* 有关登录注册的动画js */
    $('#login-form').validate({
        rules: {
            user_id: {
                required: true,
                minlength: 7,
                maxlength: 10
            },
            user_pwd: "required",
            code_input: {
                required: true,
            }
        },
        messages: {
            user_id: {
                required: "学号不能为空",
                minlength: "格式错误",
                maxlength: "格式错误"
            },
            user_pwd: "密码不能为空",
            code_input: {
                required: "请输入验证码",
            }
        }
    });

    $('#signup-form').validate({
        rules: {
            user_id: {
                required: true,
                minlength: 7,
                maxlength: 10,
                remote: {
                    url: "index.php?controller=User&method=canSignup",
                    type: "post",
                    async: false,
                    dataType: "json",
                    data: {
                        user_id: function () {
                            return $("#signup-form input[name='user_id']").val()
                        }
                    },
                }
            },
            user_name: "required",
            user_pwd: "required",
            pwd_comfirm: {
                required: true,
                equalTo: "#pwd"
            }
        },
        messages: {
            user_id: {
                required: "学号不能为空",
                minlength: "格式错误",
                maxlength: "格式错误",
                remote: "账号已经存在"
            },
            user_name: "用户名不能为空",
            user_pwd: "密码不能为空",
            pwd_comfirm: {
                required: "请重新输入密码",
                equalTo: "两次密码输入不一致"
            }
        }
    });

    $('.login-btn').on("click", function () {
        $('.tab-group .tab:nth-child(2)').removeClass('active');
        $('.tab-group .tab:nth-child(1)').addClass('active');
        $('#login-part').show();
        $('#register-part').hide();
    });

    $('.signup-btn').on("click", function () {
        $('.tab-group .tab:nth-child(1)').removeClass('active');
        $('.tab-group .tab:nth-child(2)').addClass('active');
        $('#login-part').hide();
        $('#register-part').show();
    });

    $('.login-form .tab a').on('click', function (e) {

        e.preventDefault();

        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');

        target = $(this).attr('href');

        $('.tab-content > div').not(target).hide();

        $(target).fadeIn(600);

    });

    const loginFromFadeToggle = (className) => {
        $(document).on("click",className,function () {
            $('.mask').fadeToggle();
            $('.login-form').fadeToggle();
        });
    };

    // loginFromFadeToggle('.close');
    loginFromFadeToggle('.login-btn');
    loginFromFadeToggle('.signup-btn');
    loginFromFadeToggle('.mask');
});
