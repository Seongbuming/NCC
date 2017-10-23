$(document).ready(function() {
    function resizeTab() {
        // PC에서만 수행
        if ($(document).width() < 1200)
            return;

        var $tab = $(".contents .tab");
        var elements = $tab.find("li").length;
        var width = $tab.width() / elements;

        $tab.find("li").width(width);
    }

    resizeTab();
    $(window).resize(resizeTab);
});