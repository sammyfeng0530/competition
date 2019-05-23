/**
 * Created by 皆凡人 on 2019-04-28.
 */
const openAlert = () => {
    $('.mask').fadeIn();
    $('.popup-form').fadeIn();
};

const closeAlert = () => {
    $('.mask').fadeOut();
    $('.popup-form').fadeOut();
    $('.login-form').fadeOut();
};

const popPrompt = (prompt, yesFn) => {
    $('.prompt-form p').html(prompt);
    $('.mask').fadeToggle();
    $('.popup-form').fadeToggle();
    $('.confirm-button').click(yesFn);
};

const alertBox = (text) => {
    $('.prompt-form p').html(text);
    openAlert();
    $('.confirm-button').click(closeAlert());
};

const reloadPartView = (url) => {
    $('.right-content').load(url + ' .right-container').fadeIn('slow');
};

const submitForm = (form, currentHref) => {
console.log(form.attr('action'));
    $.ajax({
        type: "POST",
        url: form.attr('action'),
        data: $(form).serialize(),
        dataType: "text",
        beforeSend: function (xhr) {
            xhr.setRequestHeader("Ajax-Request", "true");
        },
        success: function () {
            closeAlert();
            reloadPartView(currentHref);
        }
    });
    return false;
};

const clickPrompt = (btn, txt) => {
    $(document).on("click", btn, function (e) {
        e.preventDefault();
        let form = $(this).parents('form');
        let currentHref = $('.left-menu nav a.current').attr("href");

        popPrompt(txt, function yes() {
            submitForm(form, currentHref);
            // closeAlert();
        });
    });
};

const editFadeToggle = () => {
    $(".form-horizontal .update").toggle();
    $(".form-horizontal .return").toggle();
    $(".form-horizontal .confirm").toggle();
};

$(document).on("click", ".scheme-item", function (e) {
    $(this).removeClass('prev next active');
    $(this).siblings().removeClass('prev active next');
    $(this).addClass('active');
    $(this).prev().addClass('prev');
    $(this).next().addClass('next');
});

$(document).on("click", ".close", function () {
    closeAlert();
});

$(document).on("click", ".logout-btn a", function (e) {
    e.preventDefault();
    let url = this.href;
    popPrompt('是否确认退出？', function yes() {
        $.get(url);
        window.location.href='index.php?controller=Index&method=index';
    });
});

$(document).on("click", ".confirm-signup a", function (e) {
    e.preventDefault();
    let url = this.href;
    let currentHref = $('.left-menu nav a.current').attr("href");
    if ($("input[type='checkbox']").is(':checked')) {
        popPrompt('是否确认报名？一旦报名成功，将无法撤销报名并加入新成员、更改队伍资料。', function yes() {
            $.ajax({
                type: "GET",
                url: url,
                success: function () {
                    reloadPartView(currentHref);
                    closeAlert();
                    // alertBox("报名成功");
                }
            });
        });
    } else {
        popPrompt('请先仔细报名规则，并勾选选框。', closeAlert);
    }
});

$(document).on("click", ".update", function () {
    $(".form-horizontal input").removeAttr("disabled").css("background", "rgba(255,255,255,.95)");
    editFadeToggle();
});

$(document).on("click", ".return a", function () {
    let url = $('.left-menu nav a.current').attr("href");
    $('.right-container').remove();
    reloadPartView(url);
});

$(document).on("click", ".join-or-create-team input[class='operate-radio']:radio", function () {
    let num = $(this).val();
    $(".team-form").hide().eq(num).show();
});

$(document).on("onclick", ".scheme-name a", function () {
    const url = this.href;
    $.ajax({
        type: "GET",
        url: url,
        success: function () {
            $('.contest-scheme-content >section').load(url + ' .scheme-section').fadeIn('slow');
        }
    });
});

$(document).on("click", ".upload-scheme a", function (e) {
    e.preventDefault();
    let url = this.href;
    let currentHref = $('.left-menu nav a.current').attr("href");
    const data = {
        scheme_name: $("input[name='scheme_name']").val(),
        scheme_content: $("#editor").html()
    };
    popPrompt('是否确认提交？', function yes() {
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function () {
                reloadPartView(currentHref);
                closeAlert();
            }
        });
    });
});

$(document).on("click", ".edit-scheme a", function (e) {
    e.preventDefault();
    $('.scheme-content-show').hide();
    $('.scheme-editor').show();
});

$(document).on("click",".contest-intro .more", function (e) {
    e.preventDefault();
    $('.menu ul.nav>li:nth-of-type(2) a').click();
});

$(document).on("keyup","#join-team-form input[name='team_id'],#join-team-form input[name='team_invitation_code']",function () {
    let url = 'index.php?controller=Team&method=showTeam';
    let team_id = $("input[name='team_id']").val();
    let team_invitation_code = $("input[name='team_invitation_code']").val();
    let arr = {
        "team_invitation_code": team_invitation_code,
        "team_id": team_id
    };
    if (team_id && team_invitation_code) {
        $.post(url, arr, function (data) {
            $('#userJoinInTeamInfo').html(data).fadeIn();
        });
    }
});

const jumpToSignup = (btn) => {
    $(document).on("click",btn, function (e) {
        e.preventDefault();
        const url = $(this).attr("href");

        const correspondingMenuItem1 = $('.menu ul.nav-tabs>li:last-of-type a');
        const correspondingMenuItem2 = $('.menu li.btn-group:last-of-type ul.dropdown-menu>li:last-of-type a');

        if(url == correspondingMenuItem1.attr("href")){
            correspondingMenuItem1.click();
        }
        if(url == correspondingMenuItem2.attr("href")){
            correspondingMenuItem2.click();
        }

    });
};

$('#join-team-form').validate({
    rules: {
        team_id: {
            required: true,
            minlength: 7,
            maxlength: 7
        },
        team_invitation_code: "required",
    },
    messages: {
        team_id: {
            required: "团队ID不能为空",
            minlength: "格式错误",
            maxlength: "格式错误"
        },
        team_invitation_code: "邀请码不能为空"
    }
});

$('#create-team-form').validate({
    rules: {
        team_name: {
            required: true,
            minlength: 1,
            maxlength: 20
        },
        team_invitation_code: "required"
    },

    messages: {
        team_name: {
            required: "队名不能为空",
            minlength: "格式错误",
            maxlength: "格式错误"
        },
        team_invitation_code: "邀请码不能为空"
    }
});

$(document).on("keyup blur","#create-team-form input[name='team_name'],#create-team-form input[name='team_invitation_code']",function(evt){
    if($('#create-team-form').valid()){
        $(".addTeam button").prop("disabled",false);
    }else{
        $(".addTeam button").prop("disabled","disabled");
    }
});

$(function () {
    clickPrompt(".confirm", "是否确认提交？");
    clickPrompt(".join-in-submit button", "是否确认加入队伍？");
    clickPrompt(".addTeam button", "是否确认创建队伍？");
    jumpToSignup(".sign-up-online .more a");
    jumpToSignup(".sign-up-button a");
});