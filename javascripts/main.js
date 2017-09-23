$(document).ready(function() {
    var $input_search = $(".header .header-top .input-search");
    var $label_search = $input_search.next(".label-search");
    $input_search.on("focusin", function() {
        $label_search.css("display", "none");
    }).on("focusout", function() {
        if (this.value.length == 0) {
            $label_search.css("display", "block");
        } else {
            $label_search.css("display", "none");
        }
    });
});
