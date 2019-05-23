/* *
 * 因本网站使用了jquery的load方法设计动态加载，此文档为解决浏览器前进、后退、刷新等问题
 *
 */

$(function () {
    getMainContent();
    getRightContent();
});

const activeLeftMenu = (url) => {
    // 修改左侧菜单栏active项
    let menuLiItem = $('.left-menu nav li');
    menuLiItem.children('a.current').removeClass('current');

    for (let i = 0, l = menuLiItem.length; i < l; i++) {
        if (menuLiItem.eq(i).children('a').attr("href") === url) {
            menuLiItem.eq(i).children('a').addClass('current');
            break;
        }
    }
};

const pushStateFunc = (url, title, usePush) => {
    let state = {'pageurl': url, 'pagetitle': title};
    if (usePush) {
        console.log("push state of " + state);
        history.pushState(state, title, url);
    }
};

const getMainContent = () => {

    $(".menu ul li a").off().on("click", function (e) {
        e.preventDefault();

        // 加载内容
        let href = $(this).attr("href");
        let title = $(this).text();
        if ($('.menu ul li a.active').attr("href") !== href) {
            loadContent(href, title, true);
        }

        return false;
    });
};

const loadContent = (url, title, usePush) => {

    // 修改菜单栏active项
    let menuItem = $('.menu ul li a');
    menuItem.removeClass('active');

    for (let i = 0, l = menuItem.length; i < l; i++) {
        if (menuItem.eq(i).attr("href") === url) {
            menuItem.eq(i).addClass('active');
            break;
        }
    }
    $(document).attr("title","虚拟实景实验设计大赛-"+title);
    $('.hp-content').load(url + ' .hp-container', function (e) {
        getMainContent();
        activeLeftMenu(url);
        $('.scheme-item:nth-of-type(3)').click();
    }).fadeIn('slow');

    pushStateFunc(url, title, usePush)

};

const getRightContent = () => {

    $('.left-menu nav li a').off().on('click', function (e) {
        e.preventDefault();

        // 加载内容
        let href = $(this).attr("href");
        let title = $(this).text();
        if ($('.left-menu nav li a.current').attr("href") !== href) {
            loadRightContent(href, title, true);
        }
    });
};

const loadRightContent = (url, title, usePush) => {
    activeLeftMenu(url);
    $(document).attr("title","虚拟实景实验设计大赛-"+title);
    $('.right-content').load(url + ' .right-container', function (e) {
        getRightContent()
    }).fadeIn('slow');

    pushStateFunc(url, title, usePush)
};

if (history.pushState) {
    window.addEventListener("popstate", function () {
        // console.log("popstate called ,href="+location.href +", state = "+history.state);
        if (!history.state) return;
        // console.log(history.state);
        loadContent(history.state.pageurl, history.state.pagetitle, false);
        // loadRightContent(history.state.pageurl,history.state.pagetitle,false);
    }, false);
}

$(document).on("click", ".left-menu nav li a", function (e) {
    e.preventDefault();

    // 加载内容
    let href = $(this).attr("href");
    let title = $(this).text();
    if($('.left-menu nav li a.current').attr("href")!==href){
        loadRightContent(href, title, true);
    }
    return false;
});

$(document).on("click", ".menu ul li a", function (e) {
    e.preventDefault();

    // 加载内容
    let href = $(this).attr("href");
    let title = $(this).text();
    if($('.menu ul li a.active').attr("href")!==href){
        loadContent(href, title, true);
    }
    return false;
});