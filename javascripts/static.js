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

    function openMenu() {
        $(this).parent("li").toggleClass("active");
    }

    function openInnerTab() {
        var name = $(this).attr("name");
        var $tab = $(`#${name}`).css("display", "block");

        $(this).parent().find(".selected").removeClass("selected");
        $(this).addClass("selected");
        $(".inner-tab-contents").not($tab).css("display", "none");
    }

    resizeTab();
    $(window).resize(resizeTab);

    $(".contents .left-menu > ul > li > .util").click(openMenu);
    $(".contents .left-menu > ul > li > .inner-menu > li > .util").click(openMenu);

    $(".contents .inner-tab > li").click(openInnerTab);
});