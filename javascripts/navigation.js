$(document).ready(function() {
    function resizeTopGNB() {
        // Mobile & Tablet에서만 수행
        if ($(document).width() >= 1200)
            return;

        var $gnb_top = $(".navigation .gnb-top");
        var width = 0;

        $gnb_top.children("li").each(function() {
            width += $(this).outerWidth(true);
        });
        if (width !== $gnb_top.innerWidth()) {
            $gnb_top.innerWidth(width+1);
        }
    }

    function toggleBottomGNB() {
        $(".navigation .section-bottom").toggleClass("actived");
    }

    resizeTopGNB();
    $(window).resize(resizeTopGNB);

    $(".navigation .gnb-bottom-button").click(toggleBottomGNB);
});
