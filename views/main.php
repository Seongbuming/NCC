<!doctype html>
<html lang="ko">
<head>
    <?=$this->loadLayout("head")?>
    <link rel="stylesheet" type="text/css" href="libraries/jquery.bxslider.min.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
</head>

<body>
    <div class="header">
        <?=$this->loadLayout("header")?>
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
            <div class="area area-custom">
                <div class="inside custom-1">
                    <div class="custom-1">
                        <img src="images/banner_hospice.png" alt="호스피스완화의료" />
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
                    <div class="custom-2">
                        <div class="left">
                            <img src="images/cancerprevention.png" alt="암 예방으로 삶 건강하게" />
                        </div>
                        <div class="right">
                            <h2><a href=".">암예방 10대 수칙</a></h2>
                        </div>
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

            <div class="area area-apply show-for-tablet">
                <div class="inside">
                    <a class="more" href=".">더보기</a>
                    <h2>신청하기</h2>
                    <div class="links">
                        <div class="wrapper"><a href=".">
                            <img src="images/icons/note.png" alt="아이콘" />
                            <p>교육자료 신청</p>
                        </a></div>
                        <div class="wrapper"><a href=".">
                            <img src="images/icons/monitor.png" alt="아이콘" />
                            <p>정보사용 신청</p>
                        </a></div>
                        <div class="wrapper"><a href=".">
                            <img src="images/icons/graph.png" alt="아이콘" />
                            <p>통계자료 신청</p>
                        </a></div>
                    </div>
                </div>
            </div>

            <div class="area area-sns">
                <div class="inside">
                    <a class="facebook" href=".">페이스북</a>
                    <a class="twitter" href=".">트위터</a>
                    <a class="blog" href=".">블로그</a>
                    <a class="post" href=".">포스트</a>
                    <a class="youtube" href=".">유튜브</a>
                </div>
            </div>
        </div>

        <div class="clear"></div>

        <div class="container-bottom">
            <div class="area area-apply show-for-mobile">
                <div class="inside">
                    <a class="more" href=".">더보기</a>
                    <h2>신청하기</h2>
                    <div class="links">
                        <div class="wrapper"><a href=".">
                            <img src="images/icons/note.png" alt="아이콘" />
                            <p>교육자료 신청</p>
                        </a></div>
                        <div class="wrapper"><a href=".">
                            <img src="images/icons/monitor.png" alt="아이콘" />
                            <p>정보사용 신청</p>
                        </a></div>
                        <div class="wrapper"><a href=".">
                            <img src="images/icons/graph.png" alt="아이콘" />
                            <p>통계자료 신청</p>
                        </a></div>
                    </div>
                </div>
            </div>
            <div class="area area-notice">
                <div class="inside">
                    <a class="more" href=".">더보기</a>
                    <h2>공지사항</h2>
                    <ul class="notice">
                        <li><a href=".">
                            <p class="title">홈페이지 개선제안 페이스북 이벤트</p>
                            <p class="date">2017.08.18</p>
                        </a></li>
                        <li><a href=".">
                            <p class="title">[당첨자공지] 홈페이지 출석 이벤트</p>
                            <p class="date">2017.08.18</p>
                        </a></li>
                        <li><a href=".">
                            <p class="title">홈페이지 출석 이벤트 (6/26 ~ 7/26)</p>
                            <p class="date">2017.08.18</p>
                        </a></li>
                        <li><a href=".">
                            <p class="title">2017년 국립암센터 금연대상</p>
                            <p class="date">2017.08.18</p>
                        </a></li>
                    </ul>
                </div>
            </div>
            <div class="area area-apply show-for-pc">
                <div class="inside">
                    <a class="more" href=".">더보기</a>
                    <h2>신청하기</h2>
                    <div class="links">
                        <div class="wrapper"><a href=".">
                            <img src="images/icons/note.png" alt="아이콘" />
                            <p>교육자료 신청</p>
                        </a></div>
                        <div class="wrapper"><a href=".">
                            <img src="images/icons/monitor.png" alt="아이콘" />
                            <p>정보사용 신청</p>
                        </a></div>
                        <div class="wrapper"><a href=".">
                            <img src="images/icons/graph.png" alt="아이콘" />
                            <p>통계자료 신청</p>
                        </a></div>
                    </div>
                </div>
            </div>
            <div class="area area-banner">
                <div class="inside">
                    <ul class="bxslider">
                        <li><a href="."><img src="images/img_popupzone01.png" alt="배너1" /></a></li>
                        <li><a href="."><img src="images/img_popupzone02.png" alt="배너2" /></a></li>
                        <li><a href="."><img src="images/img_popupzone03.png" alt="배너3" /></a></li>
                        <li><a href="."><img src="images/img_popupzone04.png" alt="배너4" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <?=$this->loadLayout("footer")?>
    </div>
    
    <?=$this->loadLayout("scripts")?>
    <script src="libraries/jquery.bxslider.min.js"></script>
    <script src="javascripts/main.js"></script>
</body>
</html>
