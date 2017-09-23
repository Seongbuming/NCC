$(document).ready(function() {
    $(".input-search").on("focusin", function() {
        var $label = $(this).next(".label-search");
        $label.css("display", "none");
    }).on("focusout", function() {
        var $label = $(this).next(".label-search");
        if (this.value.length == 0) {
            $label.css("display", "block");
        } else {
            $label.css("display", "none");
        }
    });
});
