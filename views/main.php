<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>국가암정보센터</title>

    <link rel="stylesheet" type="text/css" href="stylesheets/normalize.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/common.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/layout.css" />
</head>

<body>
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="left">
                    <button class="whole-menu" title="전체 메뉴"></button>
                    <button class="restore-font-size">글자크기</button>
                    <button class="expand-font-size" title="글자 확대"></button>
                    <button class="reduce-font-size" title="글자 축소"></button>
                </div>
                <div class="right">
                    <input class="input-search" id="input-search-header" type="text" title="검색 입력" />
                    <label class="label-search" for="input-search-header">검색어를 입력해주세요</label>
                    <button class="button-search" title="검색"></button>
                    <button class="english">English</button>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <button class="whole-menu" title="전체 메뉴"></button>
                <button class="button-search" title="검색"></button>
                <div class="logo">
                    <a href="."><img src="images/logo.png" alt="국가암정보센터 로고" /></a>
                </div>
                <ul class="menu">
                    <li>암예방과 검진</li>
                    <li>내가 알고 싶은 암</li>
                    <li>암환자 생활백서</li>
                    <li>통계로 보는 암</li>
                    <li>암정보 나눔터</li>
                    <li>국가지원프로그램</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="contents">
        <div class="area-search">
            <h2>내가 알고 싶은 암 찾아보기</h2>
            <input class="input-search" id="input-search-contents" type="text" title="검색 입력" />
            <label class="label-search" for="input-search-contents">검색어를 입력해주세요</label>
            <button class="button-search">검색</button>
            <button class="view-all">전체암보기</button>
        </div>
    </div>

    <div class="footer">
    </div>
    
    <script src="javascripts/jquery-1.12.4.min.js"></script>
    <script src="javascripts/main.js"></script>
</body>
</html>
