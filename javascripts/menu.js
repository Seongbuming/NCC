$(document).ready(function() {
    function resizeWholeMenu() {
        // PC에서만 수행
        if ($(document).width() < 1200)
            return;

        var windowHeight = $(window).height();
        var topSpace = $(".header .header-top").height();
        $(".header .whole-menu").height(windowHeight - topSpace);
    }

    function onMenuEnter() {
        // PC에서만 수행
        if ($(document).width() < 1200)
            return;

        // .inner-menu 마크업
        var $inner_menu = $(this).find(".inner-menu");
        if ($inner_menu.length !== 0) {
            $inner_menu.css("display", "block");

            var whole_width = -1;
            var menu_height = $inner_menu.innerHeight();

            // 크기 설정
            $inner_menu.find("ul").each(function() {
                $(this).height(menu_height);
                whole_width += $(this).innerWidth() + 1;
            });
            $inner_menu.width(whole_width);

            var $pivot = $(".header .header-bottom .container");
            var translateX = (-whole_width + $inner_menu.parent().width()) / 2;
            var left = $inner_menu.offset().left + translateX;
            var leftMin = $pivot.offset().left;
            var right = left + whole_width;
            var rightMax = leftMin + $pivot.width();

            // 위치 설정
            if (left < leftMin) {
                $inner_menu.css("left", leftMin);
                $inner_menu.css("margin-left", "");
            } else if (right > rightMax) {
                $inner_menu.css("left", rightMax - $inner_menu.outerWidth());
                $inner_menu.css("margin-left", "");
            } else {
                $inner_menu.css("left", "");
                $inner_menu.css("margin-left", translateX);
            }
        }

        // .arrow 마크업
        var $arrow = $(this).find(".arrow");
        if ($arrow.length !== 0) {
            $arrow.css("display", "block");

            var translateX = ($(this).width() - $arrow.outerWidth()) / 2;
            $arrow.css("margin-left", translateX);
        }

        // .background 마크업
        var $background = $(".header .header-bottom .menu-background");
        if ($background.length !== 0) {
            $background.css("display", "block");

            var top = $(".header").height();
            var height = $("html").height() - top;
            
            $background.height(height);
        }
    }

    function onMenuLeave() {
        // PC에서만 수행
        if ($(document).width() < 1200)
            return;

        var $inner_menu = $(this).find(".inner-menu");
        if ($inner_menu.length !== 0) {
            $inner_menu.css("display", "none");
            $inner_menu.css("left", "");
            $inner_menu.css("margin-left", "");
        }

        var $arrow = $(this).find(".arrow");
        if ($arrow.length !== 0)
            $arrow.css("display", "none");

        var $background = $(".header .header-bottom .menu-background");
        if ($background.length !== 0)
            $background.css("display", "none");
    }

    resizeWholeMenu();
    $(window).resize(resizeWholeMenu);
    $(".header .header-bottom .menu > li").hover(onMenuEnter, onMenuLeave);
});
