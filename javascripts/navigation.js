$(document).ready(function() {
    function resizeTopGNB() {
        // Mobile & Tablet에서만 수행
        if ($(document).width() >= 1200)
            return;

        var $gnb_top = $(".navigation .gnb-top");
        var width = 0 ;

        $gnb_top.children("li").each(function() {
            width += $(this).width();
        });
        if (width !== $gnb_top.width())
            $gnb_top.width(width);
    }

    resizeTopGNB();
    $(window).resize(resizeTopGNB);
});
