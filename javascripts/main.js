$(document).ready(function() {
    // 검색창 라벨 활성화/비활성화
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

    // 배너 슬라이더 로드
    $(".area-banner .bxslider").bxSlider({
        wrapperClass: "banner bx-wrapper",
        auto: true,
        pause: 5000,
        controls: false,
        autoControls: true,
        autoControlsCombine: true,
    });
});
