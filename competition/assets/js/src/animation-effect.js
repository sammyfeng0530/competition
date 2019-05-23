$(function () {

    /* 赛事动态图片展示 */
    const slideShow = () => {

        const captionDom = $('#news-gallery .caption');

        const newsText = $('#news-gallery .news-gallery-text');

        //设置标语宽度与图片宽度一致
        captionDom.css({width: $('#news-gallery a').find('img').css('width')});

        //获取图片URL并展示它
        newsText.html($('#news-gallery a:first').find('img').attr('rel'))
            .animate({opacity: 0.85}, 400);

        setInterval(function newsgallery(){

            //if no IMGs have the show class, grab the first image
            let current = ($('#news-gallery a.show') ? $('#news-gallery a.show') : $('#news-gallery a:first'));

            //Get next image, if it reached the end of the slideshow, rotate it back to the first image
            let next = ((current.next().length) ? ((current.next().hasClass('caption')) ? $('#news-gallery a:first') : current.next()) : $('#news-gallery a:first'));

            //Get next image caption
            let caption = next.find('img').attr('rel');

            //Set the fade in effect for the next image, show class has higher z-index
            next.css({opacity: 0.0})
                .addClass('show')
                .animate({opacity: 1.0}, 1000);

            //Hide the current image
            current.animate({opacity: 0.0}, 1000)
                .removeClass('show');

            //Set the opacity to 0 and height to 1px
            $('#news-gallery .caption').animate({opacity: 0}, {
                queue: false,
                duration: 50
            }).animate({height: '1px'}, {queue: true, duration: 1000});

            //Animate the caption, opacity to 0.85 and heigth to 50px, a slide up effect
            $('#news-gallery .caption').animate({opacity: 0.85}, 0).animate({height: '50px'}, 1000);

            //Display the content
            $('#news-gallery .news-gallery-text').html(caption);
        }, 3000);

    };

    slideShow();

    /* 赛事新闻展示 */
    // 不断把新的第一个追加到后面
    const newsScroll = () => {
        let frtEle = $('.contest-news-text ul li:first');
        frtEle.animate({'marginTop': -$('.contest-news-text ul li').height()}, 500, function () {
            frtEle.css('marginTop', 0);
            $('.contest-news-text ul').append(frtEle);
        });
    };

    // 赛事动态新闻展示
    let startInterval = setInterval(newsScroll, 3000);

    // 鼠标悬停
    $('.contest-news-text ul li').hover(function () {
        clearInterval(startInterval);
    }, function () {
        startInterval = setInterval(newsScroll, 3000);
    });

    /* 方案展示 */
    const schemeItemShow = () => {
        const schemeItem = $('.scheme-item');
        const num = schemeItem.length;
        const even = num / 2;
        const odd = (num + 1) / 2;

        if (num % 2 === 0) {
            const evenChild = $('.scheme-item:nth-of-type(' + even + ')');
            evenChild.addClass('active');
            evenChild.prev().addClass('prev');
            evenChild.next().addClass('next');
        } else {
            const oddChild = $('.scheme-item:nth-of-type(' + odd + ')');
            oddChild.addClass('active');
            oddChild.prev().addClass('prev');
            oddChild.next().addClass('next');
        }


        // Keyboard nav
        $('html body').keydown(function (e) {
            if (e.keyCode === 37) { // left
                $('.active').prev().trigger('click');
            }
            else if (e.keyCode === 39) { // right
                $('.active').next().trigger('click');
            }
        });
    };

    schemeItemShow();
});

/* 初始化富文本编辑器 */
const initToolbarBootstrapBindings = () => {
    let fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
            'Times New Roman', 'Verdana'],
        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
    $.each(fonts, function (idx, fontName) {
        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
    });
    $('.dropdown-menu input').click(function () {
        return false;
    })
        .change(function () {
            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
        })
        .keydown('esc', function () {
            this.value = '';
            $(this).change();
        });

    /*        $('[data-role=magic-overlay]').each(function () {
     var overlay = $(this), target = $(overlay.data('target'));
     overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
     });*/
    if ("onwebkitspeechchange" in document.createElement("input")) {
        var editorOffset = $('#editor').offset();
        $('#voiceBtn').css('position', 'absolute').offset({
            top: editorOffset.top,
            left: editorOffset.left + $('#editor').innerWidth() - 35
        });
    } else {
        $('#voiceBtn').hide();
    }
};

const showErrorAlert = (reason, detail) => {
    let msg = '';
    if (reason === 'unsupported-file-type') {
        msg = "Unsupported format " + detail;
    }
    else {
        console.log("error uploading file", reason, detail);
    }
    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
};

$('#editor').wysiwyg({
    fileUploadError: showErrorAlert
});

$(function () {
    initToolbarBootstrapBindings();
});


/* 菜单栏active */

//刷新页面时左侧菜单栏active
const activeLeftmenu = (url) => {
    // 修改左侧菜单栏active项
    let menuLiItem = $('.left-menu nav li');
    menuLiItem.children('a.current').removeClass('current');

    for (let i = 0, l = menuLiItem.size(); i < l; i++) {
        if (menuLiItem.eq(i).children('a').attr("href") === url) {
            menuLiItem.eq(i).children('a').addClass('current');
            break;
        }
    }
};

//刷新页面时菜单栏active
const activeMainmenu = (url) => {
    // 修改菜单栏active项
    let menuItem = $('.menu ul li a');
    menuItem.removeClass('active');

    for (let i = 0, l = menuItem.size(); i < l; i++) {
        if (menuItem.eq(i).attr("href") === url) {
            menuItem.eq(i).addClass('active');
            break;
        }
    }
};

activeLeftmenu(('index.php' + window.location.search));
activeMainmenu(('index.php' + window.location.search));

// 设置页面的title
const title = $('.menu ul li a.active').text();
$(document).attr("title","企业管理虚拟实景实验设计大赛-"+title);


