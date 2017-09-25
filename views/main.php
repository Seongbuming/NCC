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
    <link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
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
        <div class="area area-search">
            <div class="inside">
                <h2>내가 알고 싶은 암 찾아보기</h2>
                <input class="input-search" id="input-search-contents" type="text" title="검색 입력" />
                <label class="label-search" for="input-search-contents">검색어를 입력해주세요</label>
                <button class="button-search">검색</button>
                <button class="view-all">전체암보기</button>
            </div>
        </div>

        <div class="container-left">
            <div class="area">
                <div class="inside">
                    <h2><a href=".">발암요인</a></h2>
                    <p>암예방을 위한 인체 발암요인정보를 알아볼 수 있습니다.</p>
                </div>
            </div>
            <div class="area area-custom" style="background-image: url('images/hospicecare.png'); background-position: 90% 30%;">
                <div class="inside">
                    <div class="center">
                        <p>아름다운 만남 행복한 동행</p>
                        <h2 style="font-size: 1.7em;"><a href=".">호스피스완화의료</a></h2>
                    </div>
                </div>
            </div>

            <div class="area">
                <div class="inside">
                    <h2><a href=".">7대암검진권고</a></h2>
                    <p>사망률이 높은 암에 대한 검진 권고안을 새로이 개발한 것입니다.</p>
                </div>
            </div>
            <div class="area area-custom">
                <div class="inside">
                    <div class="center">
                        <img src="images/cancerprevention.png" alt="암 예방으로 삶 건강하게" style="vertical-align: middle;" />
                        <h2 style="display: inline-block; vertical-align: middle;"><a href=".">암예방 10대 수칙</a></h2>
                    </div>
                </div>
            </div>

            <div class="area">
                <div class="inside">
                    <h2><a href=".">국가암등록사업 연례보고서</a></h2>
                    <p>국가암등록사업의 연간 통계를 다운로드하여 보실 수 있습니다.</p>
                </div>
            </div>
            <div class="area">
                <div class="inside">
                    <h2><a href=".">생존자</a></h2>
                    <p>환자와 가족의 고통을 경감시켜 삶의 질을 향상시키는 의료 서비스입니다.</p>
                </div>
            </div>
        </div>

        <div class="container-right">
            <div class="call">
                <div class="area area-call">
                    <div class="inside">
                        <h2>암정보 상담센터</h2>
                        <div class="call-detail">
                            <img class="phonenumber" src="images/phonenumber.png" alt="1577-8899" />
                            <p>평일: 09:00 ~ 18:00</p>
                            <p>(주말 및 공휴일 휴무)</p>
                        </div>
                    </div>
                </div>
                <div class="area area-call-links">
                    <div class="inside">
                        <ul class="links">
                            <li><a href=".">전화상담예약 바로가기</a></li>
                            <li class="border"></li>
                            <li><a href=".">이메일상담 바로가기</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="area area-subscribe">
                <div class="inside">
                    <h2>암연구동향</h2>
                    <p>국립암센터가 제공하는 국내외 최신 암연구정보</p>
                    <button class="subscribe">구독신청</button>
                </div>
            </div>

            <div class="area area-sns">
                <div class="inside">
                    <a class="facebook" href="."><img src="images/icons/facebook_off.png" alt="페이스북" /></a>
                    <a class="twitter" href="."><img src="images/icons/twitter_off.png" alt="트위터" /></a>
                    <a class="blog" href="."><img src="images/icons/blog_off.png" alt="블로그" /></a>
                    <a class="post" href="."><img src="images/icons/post_off.png" alt="포스트" /></a>
                    <a class="youtube" href="."><img src="images/icons/youtube_off.png" alt="유튜브" /></a>
                </div>
            </div>
        </div>

        <div class="area area-notice">
            <div class="inside">
                <h2>공지사항</h2>
            </div>
        </div>

        <div class="area area-apply">
            <div class="inside">
            </div>
        </div>

        <div class="area area-banner">
            <div class="inside">
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="footer-top">
            <div class="container">
                <ul class="menu">
                    <li><a href=".">개인정보처리방침</a></li>
                    <li><a href=".">저작권 안내</a></li>
                    <li><a href=".">이용안내</a></li>
                    <li><a href=".">센터소개</a></li>
                    <li><a href=".">사이트맵</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <img class="logo" src="images/logo_gray.png" alt="국가암정보센터 로고" />
                <div class="copyright-pc">
                    <p>경기도 고양시 일산동구 일산로 323 국립암센터 10408</p>
                    <p>상담전화 : 1577 - 8899 / 홈페이지 운영관리 문의사항 : 031-920-2023 ( info@cancer.go.kr )</p>
                    <p class="copyright">Copyright 2017 National Cancer Information Center. All rights reserved.</p>
                    
                    <div class="about">
                        <p>※ 본 홈페이지는 보건복지부의 국민건강증진기금으로 제작되었으며, 광고 또는 상업적 콘텐츠를 포함하지 않고 있습니다.</p>
                        <p>※ 본 정보는 진료를 대신할 수 없고, 법적으로 활용할 수 없습니다.</p>
                    </div>
                </div>
                <div class="copyright-mobile">
                    <p>경기도 고양시 일산동구 일산로 323 국립암센터 10408</p>
                    <p>TEL : 1577 - 8899 (평일 09:00~18:00)</p>
                    <p>E-mail : info@cancer.go.kr</p>
                    <p class="copyright">Copyright 2017 국가암정보센터 All rights reserved.</p>
                </div>
                <img class="marks" src="images/marks.png" alt="마크" />
            </div>
        </div>
    </div>
    
    <script src="javascripts/jquery-1.12.4.min.js"></script>
    <script src="javascripts/main.js"></script>
    <!--[if lt IE 9]>
        <script src="javascripts/selectivizr-min.js"></script>
    <![endif]-->
</body>
</html>
