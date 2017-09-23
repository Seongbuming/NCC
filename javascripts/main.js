$(document).ready(function() {
    function updateSearchPlaceholder() {
        var $label = $(this).next(".label-search");
        if (this.value.length == 0) {
            $label.css("display", "block");
        } else {
            $label.css("display", "none");
        }
    }

    $("header .header-top .input-search")
        .on("input", updateSearchPlaceholder)
        .on("focusout", updateSearchPlaceholder);
});
